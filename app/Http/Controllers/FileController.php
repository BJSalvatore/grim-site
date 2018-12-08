<?php

namespace App\Http\Controllers;

use App;
use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


// there are four arrays of different file extensions used for validation
class FileController extends Controller
{
    private $image_ext = ['jpg', 'jpeg', 'png', 'gif'];
    private $audio_ext = ['mp3', 'ogg', 'mpga'];
    private $video_ext = ['mp4', 'mpeg'];
    private $document_ext = ['doc', 'docx', 'pdf', 'odt'];


public function __construct()
{
  $this->middleware('auth');
}

//fetch all files of a specific type and the user id
public function index($type, $id = null)
{
  $model = new File();

  if (!is_null($id)) {
    $response = $model::findOrFail($id);
  } else {
    $records_per_page = ($type == 'video') ? 6 : 15;

    $files = $model::where('type', $type)
                    ->where('user_id', Auth::id())
                    ->orderBy('id', 'desc')->paginate($records_per_page);

          $response = [
            'pagination' => [
              'total' => $files->total(),
              'per_page' => $files->perPage(),
              'current_page' => $files->currentPage(),
              'last_page' => $files->lastPage(),
              'from' => $files->firstItem(),
              'to' => $files->lastItem()
          ],
          'data' => $files
        ];
      }

      return response()->json($response);
    }

    // upload new file and create a new record in the database
    // first validates for max file size and allowed extensions
    public function store(Request $request)
    {
      $max_size = (int)ini_get('upload_max_filesize') * 1000;
      $all_ext = implode(',', $this->allExtensions()); //joins elements of array with string

      $this->validate($request, [
        'name' => 'required|unique:files',
        'file' => 'required|file|mimes:' . $all_ext . '|max:' . $max_size
      ]);

      //gets file extension and type
      $model = new File();

      $file = $request->file('file');
      $ext = $file-getClientOriginalExtension();
      $type = $this->getType($ext);

      //upload file to file storage in user personal directory
      if (Storage::putFileAs('/public/' . '/' . $type . '/', $file, $request['name'] . '.' . $ext))
        {
          return $model::create([
              'name' => $request['name'],
              'type' => $type,
              'extension' => $ext,
              'user_id' => Auth::id()
          ]);
        }

      return response()->json(false);
    }

    //edit files - filename can be changed
    public function edit(Request $request, $id)
    {
      $file = File::where('id', $id)->where ('user_id', Auth::id())->first();

      if ($file->name == $request['name']){
        return response()->json(false);
      }
        $this -> validate($request, [
          'name' => 'required|unique:files'
      ]);

      $old_filename = '/public/' . '/' . $file->type . '/' . $file->name . '.' . $file->extension;
      $new_filename = '/public/' . $this->getUserDir() . '/' . $request['type'] . '/' . $request['name'] . '.' . $request['extension'];

      if (Storage::disk('local')->exists($old_filename))
      {
        if(Storage::disk('local')->move($old_filename, $new_filename))
        {
          $file->name = $request['name'];
          return response()->json($file->save());
        }
      }

        return response()->json(false);
    }


    //delete file from disk and Database
    public function destroy($id)
    {
      $file = File::findOrFail($id);

      if (Storage::disk('local')->exists('/public/' . $this->getUserDir() . '/' . $file->type . '/' . $file->name . '.' . $file->extension))
      {
        if (Storage::disk('local')->exists('/public/' . $this->getUserDir() . '/' . $file->type . '/' . $file->name . '.' . $file->extension))
        {
          return response()->json($file->delete());
        }
      }
        return response()->json(false);
    }

    // this is the function used to determine type of file
    private function getType($ext)
    {
      if (in_array($ext, $this->image_ext))
      {
        return 'image';
      }

      if (in_array($ext, $this->audio_ext))
      {
        return 'audio';
      }

      if (in_array($ext, $this->video_ext))
      {
        return 'video';
      }

      if (in_array($ext, $this->document_ext))
      {
        return 'document';
      }
    }

    //get all extensions
    private function allExtensions()
    {
      return array_merge($this->image_ext, $this->audio_ext, $this->video_ext, $this->document_ext);
    }

    //get directory for the specific user
    // private function getUserDir()
    // {
    //   return Auth::user()-name . '_' . Auth::id();
    // }
}

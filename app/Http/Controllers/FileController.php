<?php

namespace App\Http\Controllers;

use App;
use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

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
public function index()
{

  $files = File::orderBy('created_on', 'desc')->paginate(5);
  return view('files.file-display', compact('files'));

    }

    public function create()
    {
        return view('files.file-form');
    }

    // upload new file and create a new record in the database
    // first validates for max file size and allowed extensions
    public function store(Request $request)
    {
      $max_size = (int)ini_get('upload_max_filesize') * 1000;
      $all_ext = implode(',', $this->allExtensions()); //joins elements of array with string

      $this->validate($request, [
        'name' => 'required|unique:files|max:15',
        'file' => 'required|file|mimes:' . $all_ext . '|max:' . $max_size
      ],
        $messages = [
          'name.required' => 'A file name is required.',
          'name.unique' => 'This name has been used before. Please try another one.',
          'name.max' => 'There is a maximum of 15 characters allowed.',
          'file.required' => 'There are no files attached.',
          'file.file' => 'This is not a file.',
          'file.mimes' => 'Accepted file types are: image, audio, video and documents.',
          'file.max' => 'Maximum file size is ' . $max_size,
        ]);

      //gets file extension and type
      $file = new File();
      $file-> name = $request->input('name');
      $file-> title = $request->input('title');
      $file-> user_id = auth()->user() -> username;

      $file = $request->file('file');
      $ext = $file -> getClientOriginalExtension();
      $type = $this->getType($ext);
      $filename = $request['name'] . '.' . $ext;
      $path = ('/public/assets/files/' . $filename);

      if(Storage::putFileAS($path, $file, $filename)){
        return File::create([
            'name' => $filename,
            'title' => $request->input('title'),
            'file' => $path,
            'type' => $type,
            'extension' => $ext,
            'user_id' => auth()->user() -> username
        ]);

        // save file to local folder
        $local = Storage::disk('local')->put($filePath, $file);
        $file-> file = $local;

      }
        $file -> file = $filename;
        dd($file);
        $file ->save();
    }

    public function show($id)
    {
        // call function in Post model
        $file = File::find($id);

        return view('files/file-display', ['file' => $file]);

    }

    //edit files - filename can be changed
    public function edit(Request $request, $id)
    {
      $file = File::where('id', $id)->where ('user_id', Auth::id())->first();

      if ($file->name == $request['name']){
        // return response()->json(false);
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
          $file->title = $request['name'];
          return $file->save();
        }
      }

    }


    //delete file from disk and Database
    public function destroy($id)
    {
      $file = File::findOrFail($id);

      if (Storage::disk('local')->exists('/public/' . $this->getUserDir() . '/' . $file->type . '/' . $file->name . '.' . $file->extension))
      {
        if (Storage::disk('local')->exists('/public/' . $this->getUserDir() . '/' . $file->type . '/' . $file->name . '.' . $file->extension))
        {
          return $file->delete();
        }
      }
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


}

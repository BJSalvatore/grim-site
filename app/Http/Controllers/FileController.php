<?php

namespace App\Http\Controllers;

use App;
use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        'title' => 'required|unique:files',
        'file' => 'required|file|mimes:' . $all_ext . '|max:' . $max_size
      ]);

      //gets file extension and type
      $file = new File();

      $file = $request->file('file');
      $ext = $file-getClientOriginalExtension();
      $type = $this->getType($ext);

      //upload file to file storage in user personal directory
      if (Storage::putFileAs('/public/files' . '/' . $type . '/', $file, $request['title'] . '.' . $ext))
        {
          return File::create([
              $file-> title => $request->input('title'),
              $ifle-> type => $type,
              $file-> extension => $ext,
              $file-> user_id => auth()->user() -> username
          ]);
        }
        $file ->save();
      // return response()->json(false);
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

      if ($file->title == $request['title']){
        // return response()->json(false);
      }
        $this -> validate($request, [
          'title' => 'required|unique:files'
      ]);

      $old_filename = '/public/' . '/' . $file->type . '/' . $file->title . '.' . $file->extension;
      $new_filename = '/public/' . $this->getUserDir() . '/' . $request['type'] . '/' . $request['title'] . '.' . $request['extension'];

      if (Storage::disk('local')->exists($old_filename))
      {
        if(Storage::disk('local')->move($old_filename, $new_filename))
        {
          $file->title = $request['title'];
          return $file->save();
        }
      }

    }


    //delete file from disk and Database
    public function destroy($id)
    {
      $file = File::findOrFail($id);

      if (Storage::disk('local')->exists('/public/' . $this->getUserDir() . '/' . $file->type . '/' . $file->title . '.' . $file->extension))
      {
        if (Storage::disk('local')->exists('/public/' . $this->getUserDir() . '/' . $file->type . '/' . $file->title . '.' . $file->extension))
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

    //get directory for the specific user
    // private function getUserDir()
    // {
    //   return Auth::user()-name . '_' . Auth::id();
    // }
}

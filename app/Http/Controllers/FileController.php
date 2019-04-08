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
use Session;

// there are four arrays of different file extensions used for validation
class FileController extends Controller
{
    private $image_ext = ['jpg', 'jpeg', 'png', 'gif', 'svg'];
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
  $files = File::orderBy('created_at', 'desc')->get();

  return view('files.index', compact('files'));

    }

    public function create()
    {
        return view('files.create');
    }

    // upload new file and create a new record in the database
    // first validates for max file size and allowed extensions
    public function store(Request $request)
    {

      $max_size = (int)ini_get('upload_max_filesize') * 20000;
      $all_ext = implode(',', $this->allExtensions()); //joins elements of array with string

      $this->validate($request, [
        'name' => 'required|unique:files|max:50',
        'title' => 'required|unique:files|max:191',
        'file' => 'required|file|mimes:' . $all_ext . '|max:' . $max_size,

      ],
        $messages = [
          'name.required' => 'A file name is required.',
          'name.unique' => 'This name has been used before. Please try another one.',
          'name.max' => 'There is a maximum of 50 characters allowed.',
          'title.required' => 'A title is required.',
          'title.unique' => 'This title has been used before. Please try another one.',
          'title.max' => 'The maximum number of characters is 191.',
          'file.required' => 'There are no files attached.',
          'file.file' => 'This is not a file.',
          'file.mimes' => 'Accepted file types are: image, audio, video and documents.',
          'file.max' => 'Maximum file size is ' . $max_size,
        ]);

      //gets file extension and type
      $file = new File;
      $file-> name = $request->input('name');
      $file-> title = $request->input('title');
      $file = $request->file('file');
      $file-> user_id = auth()->user() -> username;

      $ext = $file -> getClientOriginalExtension();
      $type = $this->getType($ext);
      $filename = $request['name'] . '.' . $ext;
      $path = storage_path('files/' . $filename);

      // if(Storage::disk('public') -> putFileAS($path, $file, $filename)){
      if(Storage::disk('local') -> putFileAS($path, $file, $filename)){
        $file = File::create([
            'title' => $request->input('title'),
            'name' => $request->input('name'),
            'file' => $filename,
            'type' => $type,
            'extension' => $ext,
            'user_id' => auth()->user() -> username,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

      }

        $file ->save();

        Session::flash('success', 'The file was saved successfully!');
        // redirect to another
        return redirect()->route('files.index');
    }

    public function show($id)
    {

        $file = File::find($id);
        return view('files.show', ['file' => $file]);

    }

    public function edit(Request $request, $id)
    {
      $file = File::find($id);

      return view('files.edit', ['file' => $file]);
    }


    //delete file from disk and Database
    public function destroy($id)
    {
      $file = File::findOrFail($id);

      if (Storage::disk('public')->exists('/public/' . $file->type . '/' . $file->name . '.' . $file->extension))
      {
        if (Storage::disk('public')->exists('/public/' . '/' . $file->type . '/' . $file->name . '.' . $file->extension))
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

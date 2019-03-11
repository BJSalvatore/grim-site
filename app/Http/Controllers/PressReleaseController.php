<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Press;

class PressReleaseController extends Controller
{
  public function index()
  {
     $releases = PressRelease::all();

     return view('releases.index', ['releases' => $releases]);
   }

  public function store(Request $request)
  {
      // validate the data
    $validatedData = $request ->validate([
        'title' => 'required|unique:releases|max:255',
        'release_date' => 'required|max:255',
        'url' => 'required'
      ]);
      // store in database
      $release = new PressRelease;
      $release -> title = $request -> input('title');
      $release -> release_date = $request -> input('release_date');
      $release -> url = $request -> input('url');
    }

}

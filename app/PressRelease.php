<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PressRelease extends Model
{
  protected $fillable = [
    'title', 'release_date', 'url'
  ];

  protected $table = 'releases';


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class PressRelease extends Model implements HasMedia
{
  use HasMediaTrait;

  protected $fillable = [
    'title', 'image', 'release_date', 'url'
  ];

  protected $table = 'releases';

}

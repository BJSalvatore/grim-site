<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  public function images()
  {
    protected $fillable = [
      'title', 'release_date', 'url'
    ];

    protected $table = 'images';
  }
}

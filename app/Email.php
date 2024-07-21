<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
  public function respond()
  {
      return $this->belongsTo('App\Messages', 'id');
  }
}

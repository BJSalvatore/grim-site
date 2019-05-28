<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

      protected $fillable = [
          'email', 'username', 'name', 'message', 'responded_on'
      ];

      protected $table = 'messages';


    public function responses()
    {
        return $this->hasMany('App\Response');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

      protected $fillable = [
          'email', 'name', 'nessage', 'username', 'created_at', 'updated_at', 'responded_on'
      ];

      protected $table = 'messages';


    public function messages()
    {
        return $this->belongsTo('App\Message', 'id');
    }
}

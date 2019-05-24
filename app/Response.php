<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
  protected $fillable = [
      'message_id', 'response', 'respondee', 'responded_on'
  ];

  protected $table = 'responses';


  public function message()
  {
      return $this->belongsTo('App\Message');
  }
}

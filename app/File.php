<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillagle = [
      'name', 'type', 'extension', 'user_id'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
      'title', 'file', 'type', 'extension', 'user_id'
    ];

    protected $table = 'files';

    public function files()
    {
        return $this->belongsTo('App\File', 'id');
    }
}

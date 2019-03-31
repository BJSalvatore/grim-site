<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
      'name', 'title', 'file', 'type', 'extension', 'user_id', 'created_on', 'updated_on'
    ];

    protected $table = 'files';

    public function files()
    {
        return $this->belongsTo('App\File', 'id');
    }
}

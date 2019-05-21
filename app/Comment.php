<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
      'username', 'comment', 'post_id', 'approved', 'created_at', 'updated_at', 'approved_at'
    ];

    protected $table = 'comments';

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

}

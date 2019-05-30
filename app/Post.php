<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Comment;

class Post extends Model
{
      protected $fillable = [
        'title', 'slug', 'post', 'image', 'created_at', 'updated_at'
    ];

    protected $table = 'posts';


  public function comments()
  {
      return $this->hasMany('App\Comment');
  }


}

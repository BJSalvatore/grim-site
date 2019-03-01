<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
      protected $fillable = [
        'title', 'post', 'slug', 'image'
    ];
    protected $table = 'posts';


  public function comments()
  {
      return $this->hasMany('App\Comment', 'id');
  }
}

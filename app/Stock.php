<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
  protected $fillable = [
    'id', 'itemName', 'price', 'description', 'size', 'quantity', 'image', 'user_id'
];

protected $table = 'items';

public function item(){

    return $this->belongsTo('App\Stock', 'id');
  }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
  protected $fillable = [
    'itemName', 'price', 'description', 'size', 'quantity', 'image', 'user_id'
];

protected $table = 'items';
}

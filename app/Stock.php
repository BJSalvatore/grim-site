<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
  protected $fillable = [
    'itemName', 'price', 'description', 'size', 'quantity', 'image'
];

protected $table = 'items';
}

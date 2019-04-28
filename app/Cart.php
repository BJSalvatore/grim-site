<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  protected $fillable = [
    'customerName', 'streetAddress', 'city', 'state', 'zipCode', 'phoneNumber', 'order', 'subtotal', 'shipping', 'total'
];

protected $table = 'cart';


public function cartItems()
{
  return $this->hasMany('App\User', 'cartItems');
}

}

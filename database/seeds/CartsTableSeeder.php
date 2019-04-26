<?php

use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{

    public function run()
    {
      DB::table('cart')->insert(['customerName' => 'Beth Salvatore', 'streetAddress' => '123 Main Street', 'city' => 'Lexington', 'state' => 'KY', 'zipCode' => '40502', 'itemName' => 'Black & White Logo Patch', 'size' =>'', 'quantity' => 2, 'price' => 2.00, 'subtotal' => 4.00, 'shipping' => 2.00, 'total' => 6.00]);

    }
}

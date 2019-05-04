<?php

use Illuminate\Database\Seeder;

class CartsTableSeeder extends Seeder
{

    public function run()
    {
      DB::table('cart')->insert([
        'customerName' => 'Beth Salvatore',
        'streetAddress' => '123 Main Street',
        'city' => 'Lexington',
        'state' => 'KY',
        'zipCode' => '40502',
        'phoneNumber' => '123-456-7891',
        'order' => ['Black & White Logo Patch', '', 2, '2.00'],
        // 'size' =>'',
        // 'quantity' => 2,
        // 'price' => '2.00',
        'subtotal' => '4.00',
        'shipping' => '2.00',
        'total' => '6.00'
      ]);

    }
}

<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('items')->insert([
        'itemName' => '11x17 Cop Killer Promo Poster',
        'price' => '2.00',
        'description' => 'Limited Supply',
        'size' => '',
        'quantity' => 25,
        'image' => 'b&w_patch.jpg',
        'user_id' =>'Demoncowgirl']);

      DB::table('items')->insert([
        'itemName' => 'Cop Killer 7" Vinyl Record',
        'price' => '10.00',
        'description' => 'Limited Supply',
        'size' => '',
        'quantity' => 25,
        'image' => 'grim_cop_killer.jpg',
        'user_id' =>'Demoncowgirl']);

      DB::table('items')->insert([
        'itemName' => 'Nuclear World Order Vinyl Record',
        'price' => '15.00',
        'description' => 'Our most recent, full-lenght LP. Release in 2018.',
        'size' => '',
        'quantity' => 25,
        'image' => 'NuclearWorldOrder.jpg',
        'user_id' =>'Demoncowgirl']);

      DB::table('items')->insert([
        'itemName' => 'The Grim Cloth Patch',
        'price' => '2.00',
        'description' => 'A ?-inch, black-and-white band logo path.',
        'size' => '',
        'quantity' => 25,
        'image' => 'b&w_patch.jpg',
        'user_id' =>'Demoncowgirl']);

      DB::table('items')->insert([
        'itemName' => 'The Grim Self Titled Orange Album',
        'price' => '0.00',
        'description' => 'Out of Print.',
        'size' => '',
        'quantity' => 10,
        'image' => 'orange_album.jpg',
        'user_id' =>'Demoncowgirl']);

      DB::table('items')->insert([
        'itemName' => 'Best of The Grim CD',
        'price' => '10.00',
        'description' => 'Limited Supply.',
        'size' => '','quantity' => 10,
        'image' => 'best_of_album.jpg',
        'user_id' =>'Demoncowgirl']);

      DB::table('items')->insert([
        'itemName' => 'Face of Betrayal LP',
        'price' => '0.00',
        'description' => 'Out of Print.',
        'size' => '',
        'quantity' => 15,
        'image' => 'face_of_betrayal.jpg',
        'user_id' =>'Demoncowgirl']);

      DB::table('items')->insert([
        'itemName' => 'The Grim Pin - Blue & White',
        'price' => '1.00',
        'description' => 'This is a ?-inch metal pin.',
        'size' => '0.00',
        'quantity' => 100,
        'image' => 'pins_blue_white.jpg',
        'user_id' =>'Demoncowgirl']);

      DB::table('items')->insert([
        'itemName' => 'The Grim Pin - Orange & Black',
        'price' => '1.00',
        'description' => 'This is a ?-inch metal pin.',
        'size' => '',
        'quantity' => 100,
        'image' => 'pins_black_orange.jpg',
        'user_id' =>'Demoncowgirl']);

      DB::table('items')->insert([
        'itemName' => 'The Grim Pin - Yellow & Purple',
        'price' => '1.00',
        'description' => 'This is a ?-inch metal pin.',
        'size' => '',
        'quantity' => 100,
        'image' => 'pins_purple.jpg',
        'user_id' =>'Demoncowgirl']);
    }
}

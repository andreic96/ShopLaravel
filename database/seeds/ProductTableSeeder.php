<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'http://www.heinzwatties.co.nz/var/heinzwatties/storage/images/our-products/298-17-eng-US/Our-Products.jpg',
            'title' => 'Produs1',
            'description' => 'Super cool product',
            'price' => '12.50'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://www.heinzwatties.co.nz/var/heinzwatties/storage/images/our-products/298-17-eng-US/Our-Products.jpg',
            'title' => 'Produs2',
            'description' => 'Super cool product',
            'price' => '12.50'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://www.heinzwatties.co.nz/var/heinzwatties/storage/images/our-products/298-17-eng-US/Our-Products.jpg',
            'title' => 'Produs3',
            'description' => 'Super cool product',
            'price' => '12.50'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://www.heinzwatties.co.nz/var/heinzwatties/storage/images/our-products/298-17-eng-US/Our-Products.jpg',
            'title' => 'Produs4',
            'description' => 'Super cool product',
            'price' => '12.50'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'http://www.heinzwatties.co.nz/var/heinzwatties/storage/images/our-products/298-17-eng-US/Our-Products.jpg',
            'title' => 'Produs5',
            'description' => 'Super cool product',
            'price' => '12.50'
        ]);
        $product->save();
    }
}

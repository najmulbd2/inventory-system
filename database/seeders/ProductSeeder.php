<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //product insert with seeders
        Product::create([
            'name'          => 'Shirt',
            'description'   => 'Very good',
            'quantity'      => 2,
            'cost_price'    => 550,
            'regular_price' => 800,
            'sale_price'    => 650,
            'status'        => 1,
            'image'         =>'https://i.ebayimg.com/images/g/wHIAAOSw37Baca9i/s-l500.jpg',
        ]);
    }
}

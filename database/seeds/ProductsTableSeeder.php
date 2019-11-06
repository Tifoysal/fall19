<?php

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
        	'name'=>'maliha',
        	'price'=>201.00	,
        ]);
    }
}

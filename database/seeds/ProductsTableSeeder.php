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
        	'category_id'=>1,
        	'price'=>201.00	,
        ]);
    }
}

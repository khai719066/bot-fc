<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductTableSeeder::class);     
    }	
}

class ProductTableSeeder extends Seeder
{
	public function run()
	{
		// DB::table('category')->insert(
		// 	array('name' =>'sanpham' )
		// );

		DB::table('product')->insert(
			[
     		 array('name' =>'khai' ,'price'=>100000,'cate_id'=>'3' ),
     		 array('name' =>'khiem' ,'price'=>150000,'cate_id'=>'3' ),
     		 array('name' =>'hoang' ,'price'=>100000,'cate_id'=>'3' )
        ]
        );
	}
}
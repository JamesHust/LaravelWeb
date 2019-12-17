<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data=[
        	
        	[
        		'cate_name'=>'iPhone',
        		'cate_slug'=>str_slug('iPhone')
        	],
        	[
        		'cate_name'=>'Samsung',
        		'cate_slug'=>str_slug('Samsung')
        	],
            [
                'cate_name'=>'LG',
                'cate_slug'=>str_slug('LG')
            ],
            [
                'cate_name'=>'Sony',
                'cate_slug'=>str_slug('Sony')
            ],
            [
                'cate_name'=>'Xiaomi',
                'cate_slug'=>str_slug('Xiaomi')
            ],
            [
                'cate_name'=>'Oppo',
                'cate_slug'=>str_slug('Oppo')
            ],
            [
                'cate_name'=>'Huawei',
                'cate_slug'=>str_slug('Huawei')
            ],
            [
                'cate_name'=>'Nokia',
                'cate_slug'=>str_slug('Nokia')
            ],
        ];
        DB::table('vp_categories')->insert($data);
    }
}

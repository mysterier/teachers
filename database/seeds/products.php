<?php

use Illuminate\Database\Seeder;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        for($i = 0; $i < 20; ++$i)
        {
            $data[] = [
                'title' => '标题' . $i,
                'cover' => '/images/products/' . $i . '.jpg',
                'desc' => '这里是描述' . $i,
                'price' => 500,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
        }
        
        DB::table('products')->insert($data);
    }
}

<?php

use Illuminate\Database\Seeder;

class teachers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->truncate();
        for($i = 0; $i < 20; ++$i)
        {
            $data[] = [
                'name' => '匠人' . $i,
                'avatar' => '/images/avatar/' . $i . '.jpg',
                'desc' => '这里是描述' . $i,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
        }
        
        DB::table('teachers')->insert($data);
    }
}

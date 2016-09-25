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
        $this->call('products');
        
        $this->command->info('Products table seeded!');
        
        $this->call('teachers');
        
        $this->command->info('Teachers table seeded!');
    }
}

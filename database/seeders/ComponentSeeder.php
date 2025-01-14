<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutNameEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('components')->insert([
            'componentType'=>'CPU',
            'componentName'=>'Ryzen 5 3600'
        ]);

        DB::table('components')->insert([
            'componentType'=>'CPU',
            'componentName'=>'Ryzen 7 5800x3d'
        ]);

        DB::table('components')->insert([
            'componentType'=>'CPU',
            'componentName'=>'Ryzen 9 5950x'
        ]);

        DB::table('components')->insert([
            'componentType'=>'CPU',
            'componentName'=>'Intel Core i7 13700',
        ]);

        DB::table('components')->insert([
            'componentType'=>'CPU',
            'componentName'=>'Intel Core i9 13900k'
        ]);
    }
}

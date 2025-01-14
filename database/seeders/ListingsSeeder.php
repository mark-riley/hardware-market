<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('listings')->insert([
            'listingName'=>'Name',
            'listingPrice'=>'0.01',
            'listingComponent'=>'Graphics Card',
            'listingModel'=>'GT 710',
            'listingQuality'=>'used',
            'listingDescription'=>'This is an example of a description of a listing.  There will be a lot of text here.',
            'userName'=>'SeededUser',
            'userID'=>'1'
        ]);
    }
}

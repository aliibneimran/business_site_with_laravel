<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gallery')->insert([
            'title'=>'This is image one',
            'category_id'=>1,
            'img'=>'cards-1.jpg'
        ]);
        DB::table('gallery')->insert([
            'title'=>'This is image two',
            'category_id'=>2,
            'img'=>'cards-2.jpg'
        ]);
        DB::table('gallery')->insert([
            'title'=>'This is image three',
            'category_id'=>3,
            'img'=>'cards-3.jpg'
        ]);
        DB::table('gallery')->insert([
            'title'=>'This is image four',
            'category_id'=>4,
            'img'=>'cards-4.jpg'
        ]);
    }
}

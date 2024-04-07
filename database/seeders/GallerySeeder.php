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
            'category'=>'example one',
            'img'=>'cards-1.jpg'
        ]);
        DB::table('gallery')->insert([
            'title'=>'This is image two',
            'category'=>'example two',
            'img'=>'cards-2.jpg'
        ]);
        DB::table('gallery')->insert([
            'title'=>'This is image three',
            'category'=>'example three',
            'img'=>'cards-3.jpg'
        ]);
        DB::table('gallery')->insert([
            'title'=>'This is image four',
            'category'=>'example four',
            'img'=>'cards-4.jpg'
        ]);
    }
}

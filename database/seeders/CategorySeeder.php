<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            'title'=>'Web Design',
            'status'=>1,
        ]);
        DB::table('category')->insert([
            'title'=>'Web Development',
            'status'=>1,
        ]);
        DB::table('category')->insert([
            'title'=>'Product Management',
            'status'=>1,
        ]);
        DB::table('category')->insert([
            'title'=>'Graphics Design',
            'status'=>1,
        ]);
        DB::table('category')->insert([
            'title'=>'Marketing',
            'status'=>1,
        ]);
    }
}

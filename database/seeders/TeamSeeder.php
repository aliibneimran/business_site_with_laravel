<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('team')->insert([
            'name'=> 'Walter White',
            'designation'=> 'Chief Executive Officer',
            'img'=> 'team-1.jpg',
            'twitter'=>'https://twitter.com/',
            'facebook'=>'www.facebook.com/hasnain.sadid',
            'instagram'=>'https://www.instagram.com/_sadid_rafi/',
            'linkedin'=>'https://www.linkedin.com/in/hasnainsadid/',
        ]);
        DB::table('team')->insert([
            'name'=> 'Sarah Jhonson',
            'designation'=> 'Product Manager',
            'img'=> 'team-2.jpg',
            'twitter'=>'https://twitter.com/',
            'facebook'=>'www.facebook.com/mamunr.rashid.357',
            'instagram'=>'https://www.instagram.com/_sadid_rafi/',
            'linkedin'=>'https://www.linkedin.com/in/hasnainsadid/',
        ]);
        DB::table('team')->insert([
            'name'=> 'William Anderson',
            'designation'=> 'CTO',
            'img'=> 'team-3.jpg',
            'twitter'=>'https://twitter.com/',
            'facebook'=>'https://www.facebook.com/profile.php?id=100007773072162',
            'instagram'=>'https://www.instagram.com/_sadid_rafi/',
            'linkedin'=>'https://www.linkedin.com/in/hasnainsadid/',
        ]);
        DB::table('team')->insert([
            'name'=> 'Amanda Jepson',
            'designation'=> 'Accountant',
            'img'=> 'team-4.jpg',
            'twitter'=>'https://twitter.com/',
            'facebook'=>'www.facebook.com/',
            'instagram'=>'https://www.instagram.com/',
            'linkedin'=>'https://www.linkedin.com/',
        ]);
    }
}

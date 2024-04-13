<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('service')->insert([
            'title'=>'Eligendi omnis sunt veritatis',
            'description'=>'Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.',
            'img'=>'cards-1.jpg'
        ]);
        DB::table('service')->insert([
            'title'=>'Possimus ut sed velit assumenda',
            'description'=>'Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.',
            'img'=>'cards-2.jpg'
        ]);
        DB::table('service')->insert([
            'title'=>'Error beatae dolor inventore aut',
            'description'=>'Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis numquam quae quaerat ipsam omnis. Neque debitis ipsum at architecto officia laboriosam odit. Ut sunt temporibus nulla culpa.',
            'img'=>'cards-3.jpg'
        ]);
        DB::table('service')->insert([
            'title'=>'Expedita voluptas ut ut nesciunt',
            'description'=>'Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos doloremque architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut aliquid ea dolores libero nobis.',
            'img'=>'cards-4.jpg'
        ]);
    }
}

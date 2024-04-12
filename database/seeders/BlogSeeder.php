<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blog')->insert([
            'title'=>'Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia',
            'desc'=>'Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta',
            'img'=>'blog-1.jpg',
            'date'=>'2024-4-07',
            'author'=>'Admin',
        ]);
        DB::table('blog')->insert([
            'title'=>'Nisi magni odit consequatur autem nulla dolorem',
            'desc'=>'Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.',
            'img'=>'blog-2.jpg',
            'date'=>'2024-4-07',
            'author'=>'Admin',
        ]);
        DB::table('blog')->insert([
            'title'=>'Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.',
            'desc'=>'Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis.',
            'img'=>'blog-3.jpg',
            'date'=>'2024-4-07',
            'author'=>'Admin',
        ]);
        DB::table('blog')->insert([
            'title'=>'Non rem rerum nam cum quo minus. Dolor distinctio deleniti explicabo eius exercitationem.',
            'desc'=>'Aspernatur rerum perferendis et sint. Voluptates cupiditate voluptas atque quae. Rem veritatis rerum enim et autem. Saepe atque cum eligendi eaque iste omnis a qui.',
            'img'=>'blog-4.jpg',
            'date'=>'2024-4-07',
            'author'=>'Admin',
        ]);
        DB::table('blog')->insert([
            'title'=>'Accusamus quaerat aliquam qui debitis facilis consequatur',
            'desc'=>'In itaque assumenda aliquam voluptatem qui temporibus iusto nisi quia. Autem vitae quas aperiam nesciunt mollitia tempora odio omnis. Ipsa odit sit ut amet necessitatibus. Quo ullam ut corrupti autem consequuntur totam dolorem.',
            'img'=>'blog-5.jpg',
            'date'=>'2024-4-07',
            'author'=>'Admin',
        ]);
        DB::table('blog')->insert([
            'title'=>'Distinctio provident quibusdam numquam aperiam aut',
            'desc'=>'Expedita et temporibus eligendi enim molestiae est architecto praesentium dolores. Illo laboriosam officiis quis. Labore officia quia sit voluptatem nisi est dignissimos totam. Et voluptate et consectetur voluptatem id dolor magni impedit. Omnis dolores sit.',
            'img'=>'blog-6.jpg',
            'date'=>'2024-4-07',
            'author'=>'Admin',
        ]);
    }
}

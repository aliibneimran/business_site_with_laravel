<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faq')->insert([
            'question'=>'Do you prefer working independently or on a team?',
            'answer'=>'I enjoy a blend of the two. I like having a team to strategize with, get diverse opinions from, and reach out to for feedback. But I am also comfortable taking on assignments that require me to work independently. I find I do some of my best work when I can focus alone in a quiet space, but I really value collaborating with my teammates to come up with the best ideas.',
        ]);
        DB::table('faq')->insert([
            'question'=>'When you’re balancing multiple projects, how do you keep yourself organized?',
            'answer'=>'I am used to juggling projects at my current job where I am often moving between coding one software program to another. I use the timeboxing technique to make sure they are all on track, allocating time on my calendar for certain tasks. I have found it really helps me prioritize what needs to get done first, and it holds me accountable for the more repetitive day-to-day tasks I am responsible for.',
        ]);
        DB::table('faq')->insert([
            'question'=>'What did you do in the last year to improve your knowledge?',
            'answer'=>'Like everyone else, I, too, gained some time last year from not having to travel two hours a day to and from work. I decided to spend my time on things I love. So I got back to learning how to play the guitar and journaling. I feel it brought me closer to myself and has been really great for my mental health and productivity.',
        ]);
        DB::table('faq')->insert([
            'question'=>'What is your expected salary?',
            'answer'=>'Based on my skills and experience and on the current industry rates, I’m looking at a salary around 30k',
        ]);
        DB::table('faq')->insert([
            'question'=>'How do you deal with pressure or stressful situations?',
            'answer'=>'I realize stressful situation are always going to come up, and I definitely have had to learn how to navigate them throughout my career. I think I get better at it with every new experience. While working on a new product launch at my last company, for example, things were not going according to plan with my team. Instead of pointing fingers, my first reaction was to take a step back and figure out some strategies around how we could we solve the problem at hand. Previously, I may have defaulted to panicking in that situation, so being calm and collected was definitely a step forward and helped me approach the situation with more clarity.',
        ]);
    }
}

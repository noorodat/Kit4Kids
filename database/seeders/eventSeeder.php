<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class eventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('campaigns')->delete();
        DB::table('campaigns')->insert([
            [
                'title' => 'School is coming',
                'description' => 'Help school students to gear up for school, 1$ is more than you think',
                'image' => 'assets/images/event/2.jpg',
                'target_money' => '2000',
                'raised_money' => '0',
                'start_date' => '2023-09-03',
                'end_date' => '2023-09-09',
            ],
            [
                'title' => 'Winter is coming',
                'description' => 'Help school students to gear up for Winter, help them wear warm jackets, boots etc.',
                'image' => 'assets/images/event/2.jpg',
                'target_money' => '2000',
                'raised_money' => '0',
                'start_date' => '2023-09-03',
                'end_date' => '2023-09-15',
            ],
            [
                'title' => 'School is coming',
                'description' => 'Help school students to gear up for school, 1$ is more than you think',
                'image' => 'assets/images/event/2.jpg',
                'target_money' => '2000',
                'raised_money' => '0',
                'start_date' => '2023-09-05',
                'end_date' => '2023-09-20',
            ],
            [
                'title' => 'School is coming',
                'description' => 'Help school students to gear up for school, 1$ is more than you think',
                'image' => 'assets/images/event/2.jpg',
                'target_money' => '2000',
                'raised_money' => '0',
                'start_date' => '2023-09-20',
                'end_date' => '2023-09-30',
            ],
            [
                'title' => 'School is coming',
                'description' => 'Help school students to gear up for school, 1$ is more than you think',
                'image' => 'assets/images/event/2.jpg',
                'target_money' => '2000',
                'raised_money' => '0',
                'start_date' => '2023-09-03',
                'end_date' => '2023-10-05',
            ],
            [
                'title' => 'School is coming',
                'description' => 'Help school students to gear up for school, 1$ is more than you think',
                'image' => 'assets/images/event/2.jpg',
                'target_money' => '2000',
                'raised_money' => '0',
                'start_date' => '2023-09-03',
                'end_date' => '2023-10-07',
            ],
            [
                'title' => 'School is coming',
                'description' => 'Help school students to gear up for school, 1$ is more than you think',
                'image' => 'assets/images/event/2.jpg',
                'target_money' => '2000',
                'raised_money' => '0',
                'start_date' => '2023-09-03',
                'end_date' => '2023-11-15',
            ],
            [
                'title' => 'School is coming',
                'description' => 'Help school students to gear up for school, 1$ is more than you think',
                'image' => 'assets/images/event/2.jpg',
                'target_money' => '2000',
                'raised_money' => '0',
                'start_date' => '2023-09-03',
                'end_date' => '2023-12-14',
            ],
        ]);
    }
}

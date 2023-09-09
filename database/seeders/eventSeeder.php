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
                'title' => 'Stationery',
                'description' => 'lourn nnkslnfdslkfndslkfsd',
                'image' => 'assets/images/event/2.jpg',
                'target_money' => '20',
                'raised_money' => '10',
                'start_date' => '2023-09-03',
                'end_date' => '2023-09-03',
                
            ],
            [
                'title' => 'Stationery',
                'description' => 'lourn nnkslnfdslkfndslkfsd',
                'image' => 'assets/images/event/2.jpg',
                'target_money' => '20',
                'raised_money' => '10',
                'start_date' => '2023-09-03',
                'end_date' => '2023-09-03',
                
            ],
            [
                'title' => 'Stationery',
                'description' => 'lourn nnkslnfdslkfndslkfsd',
                'image' => 'assets/images/event/2.jpg',
                'target_money' => '20',
                'raised_money' => '10',
                'start_date' => '2023-09-03',
                'end_date' => '2023-09-03',
                
            ],
            [
                'title' => 'Stationery',
                'description' => 'lourn nnkslnfdslkfndslkfsd',
                'image' => 'assets/images/event/2.jpg',
                'target_money' => '20',
                'raised_money' => '10',
                'start_date' => '2023-09-03',
                'end_date' => '2023-09-03',
                
            ],
            [
                'title' => 'Stationery',
                'description' => 'lourn nnkslnfdslkfndslkfsd',
                'image' => 'assets/images/event/2.jpg',
                'target_money' => '20',
                'raised_money' => '10',
                'start_date' => '2023-09-03',
                'end_date' => '2023-09-03',
                
            ],
        ]);
    }
}

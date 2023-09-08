<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->delete();
        DB::table('categories')->insert([
            [
                'title' => 'Stationery',
                'description' => 'lourn nnkslnfdslkfndslkfsd',
                'image' => 'assets/images/features/img5.png',
                'type' => '10',
                
            ],
            [
                'title' => 'Service',
                'description' => 'lourn nnkslnfdslkfndslkfsd',
                'image' => 'assets/images/features/img6.png',
                'type' => '10',
            ],
            [
                'title' => 'Tawjihi',
                'description' => 'lourn nnkslnfdslkfndslkfsd',
                'image' => 'assets/images/features/img7.png',
                'type' => '10',
            ]
        ]);
    }
}

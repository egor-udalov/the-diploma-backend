<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insertOrIgnore([
            [
                'name' => 'тестовое задание 1',
                'begining_time' => '2022-09-01 21:10:47',
                'ending_time' => '2022-09-01 21:10:50',
                'user_id' => '1',
            ],
            [
                'name' => 'тестовое задание 2',
                'begining_time' => '2022-09-01 21:10:47',
                'ending_time' => '2022-09-01 21:10:50',
                'user_id' => '2',
            ],
        ]);
    }
}

// 2022-09-01 21:10:47
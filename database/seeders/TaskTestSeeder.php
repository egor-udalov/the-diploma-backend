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
        DB::table('tasks')->insert([
            [
                'name' => 'тестовое задание 1',
                'user_id' => '1',
            ],
            [
                'name' => 'тестовое задание 2',
                'user_id' => '2',
            ],
        ]);
    }
}

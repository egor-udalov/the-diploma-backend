<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'пользователь 1',
                'email' => 'test1@mail.ru',
            ],
            [
                'name' => 'пользователь 2',
                'email' => 'test2@mail.ru',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    "name" => "matawee",
                    "email" => "642021154@tsu.ac.th",
                    "password" => Hash::make('123456'),
                    "telephone" => "0937518278",
                ],
                [
                    "name" => "Ouppala",
                    "password" => Hash::make('123456'),
                    "email" => "642021151@tsu.ac.th",
                    "telephone" => "0937518276",
                ],
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,25) as $index)
        {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'role' => 'Student',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
         }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,5) as $index)
        {
            DB::table('courses')->insert([
                'course_name' => Str::random(10),
                'capacity' => rand(3,8),
                'reg_student' => 0
            ]);
        }       
    }
}

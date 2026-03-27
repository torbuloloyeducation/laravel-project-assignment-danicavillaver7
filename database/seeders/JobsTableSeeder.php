<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('jobs')->insert([
            ['id'=>1, 'title'=>'Frontend Developer', 'description'=>'Build responsive UI'],
            ['id'=>2, 'title'=>'Backend Developer', 'description'=>'Build APIs'],
            ['id'=>3, 'title'=>'UI/UX Designer', 'description'=>'Design UI/UX'],
            ['id'=>4, 'title'=>'DevOps Engineer', 'description'=>'CI/CD, deployments'],
        ]);
    }
}
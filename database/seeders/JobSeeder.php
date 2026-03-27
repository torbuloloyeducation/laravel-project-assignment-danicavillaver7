<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run(): void
    {
        Job::create(['title' => 'Web Developer', 'description' => 'Build websites']);
        Job::create(['title' => 'Designer', 'description' => 'Design UI/UX']);
        Job::create(['title' => 'Backend Engineer', 'description' => 'Manage server-side code']);
    }
}
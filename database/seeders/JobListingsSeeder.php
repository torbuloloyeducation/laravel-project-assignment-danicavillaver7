<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobListing;

class JobListingsSeeder extends Seeder
{
    public function run(): void
    {
        JobListing::insert([
            ['title' => 'Frontend Developer', 'description' => 'Build responsive and user-friendly interfaces.'],
            ['title' => 'Backend Developer', 'description' => 'Develop robust APIs using Laravel.'],
            ['title' => 'UI/UX Designer', 'description' => 'Design clean and intuitive user interfaces.'],
            ['title' => 'DevOps Engineer', 'description' => 'Implement CI/CD pipelines and automate deployments.'],
        ]);
    }
}
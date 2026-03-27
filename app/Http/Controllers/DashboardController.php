<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\JobListing;
use App\Models\Application;

class DashboardController extends Controller
{
    public function index()
    {
        $usersCount = User::count();
        $jobsCount = JobListing::count();
        $applicationsCount = Application::count();
        $latestJobs = JobListing::latest()->take(5)->get();

        return view('pages.dashboard', compact(
            'usersCount', 'jobsCount', 'applicationsCount', 'latestJobs'
        ));
    }
}
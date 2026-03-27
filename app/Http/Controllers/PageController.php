<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job;
use App\Models\Application;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function jobs()
    {
        $jobs = Job::all(); // fetch all jobs from database
        return view('pages.jobs', compact('jobs'));
    }

    public function dashboard()
    {
        $userCount = User::count();
        $jobCount = Job::count();
        $applicationCount = Application::count();

        return view('pages.dashboard', compact('userCount', 'jobCount', 'applicationCount'));
    }
}
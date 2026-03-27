<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\JobListing;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function store(Request $request, JobListing $job)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cover_letter' => 'nullable|string',
        ]);

        Application::create([
            'user_id' => Auth::id() ?? 1,
            'job_listing_id' => $job->id,
            'status' => 'pending',
            'name' => $request->name,
            'email' => $request->email,
            'cover_letter' => $request->cover_letter,
        ]);

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}
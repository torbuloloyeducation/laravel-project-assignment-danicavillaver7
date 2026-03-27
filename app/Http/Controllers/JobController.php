<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Application;

class JobController extends Controller
{
    private $jobs = [
        1 => [
            'title' => 'Frontend Developer',
            'description' => 'Build responsive and user-friendly interfaces using modern technologies.'
        ],
        2 => [
            'title' => 'Backend Developer',
            'description' => 'Develop robust APIs and scalable systems using Laravel.'
        ],
        3 => [
            'title' => 'UI/UX Designer',
            'description' => 'Design clean and intuitive user interfaces, create wireframes and prototypes, and improve usability across digital platforms.'
        ],
        4 => [
            'title' => 'DevOps Engineer',
            'description' => 'Implement and maintain CI/CD pipelines, automate deployments, and monitor infrastructure.'
        ],
    ];

    public function index()
    {
        $jobs = $this->jobs;
        return view('pages.jobs', compact('jobs'));
    }

    public function showApplyForm($id)
    {
        if (!isset($this->jobs[$id])) abort(404);
        $job = (object) $this->jobs[$id];
        $job->id = $id;
        return view('pages.apply', compact('job'));
    }

    public function submitApplication(Request $request, $id)
{
    if (!isset($this->jobs[$id])) abort(404);

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'cover_letter' => 'required|string',
    ]);

    Application::create([
        'user_id' => Auth::id(),
        'job_listing_id' => $id,
        'name' => $request->name,
        'email' => $request->email,
        'cover_letter' => $request->cover_letter,
        'status' => 'pending',
    ]);

        Application::create([
            'user_id' => Auth::id(),
            'job_id' => $id,
            'name' => $request->name,
            'email' => $request->email,
            'cover_letter' => $request->cover_letter,
        ]);

        return redirect()->route('jobs.thankyou', $id);
    }

    public function showThankYou($id)
    {
        if (!isset($this->jobs[$id])) abort(404);
        $job = (object) $this->jobs[$id];
        $job->id = $id;
        return view('pages.thankyou', compact('job'));
    }
}
@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">Job Opportunities</h1>


<p class="mb-8">
    Explore our current openings and find a role that fits your skills and passion.
</p>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">

    <div style="background:#f8fafc; padding:20px; border-radius:10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;">
        <h2 style="font-size:1.25rem; font-weight:bold; margin-bottom:10px;">Frontend Developer</h2>
        <p style="margin-bottom:15px;">
            Build responsive and user-friendly interfaces using modern technologies.
        </p>
        <a href="{{ route('jobs.apply', 1) }}" 
           style="display:inline-block; background-color:#38bdf8; color:white; font-weight:bold; text-align:center; padding:12px 24px; border-radius:8px; text-decoration:none; transition: all 0.3s ease;"
           onmouseover="this.style.backgroundColor='#0284c7'; this.style.transform='scale(1.05)';"
           onmouseout="this.style.backgroundColor='#38bdf8'; this.style.transform='scale(1)';">
           Apply Now
        </a>
    </div>

    <div style="background:#f8fafc; padding:20px; border-radius:10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;">
        <h2 style="font-size:1.25rem; font-weight:bold; margin-bottom:10px;">Backend Developer</h2>
        <p style="margin-bottom:15px;">
            Develop robust APIs and scalable systems using Laravel.
        </p>
        <a href="{{ route('jobs.apply', 2) }}" 
           style="display:inline-block; background-color:#38bdf8; color:white; font-weight:bold; text-align:center; padding:12px 24px; border-radius:8px; text-decoration:none; transition: all 0.3s ease;"
           onmouseover="this.style.backgroundColor='#0284c7'; this.style.transform='scale(1.05)';"
           onmouseout="this.style.backgroundColor='#38bdf8'; this.style.transform='scale(1)';">
           Apply Now
        </a>
    </div>

    <div style="background:#f8fafc; padding:20px; border-radius:10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;">
        <h2 style="font-size:1.25rem; font-weight:bold; margin-bottom:10px;">UI/UX Designer</h2>
        <p style="margin-bottom:15px;">
            Design clean and intuitive user interfaces, create wireframes and prototypes, and improve usability across digital platforms.
        </p>
        <a href="{{ route('jobs.apply', 3) }}" 
        style="display:inline-block; background-color:#38bdf8; color:white; font-weight:bold; text-align:center; padding:12px 24px; border-radius:8px; text-decoration:none; transition: all 0.3s ease;"
        onmouseover="this.style.backgroundColor='#0284c7'; this.style.transform='scale(1.05)';"
        onmouseout="this.style.backgroundColor='#38bdf8'; this.style.transform='scale(1)';">
        Apply Now 
        </a>
    </div>

    <div style="background:#f8fafc; padding:20px; border-radius:10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;">
        <h2 style="font-size:1.25rem; font-weight:bold; margin-bottom:10px;">DevOps Engineer</h2>
        <p style="margin-bottom:15px;">
            Implement and maintain CI/CD pipelines, automate deployments, and monitor infrastructure.
        </p>
        <a href="{{ route('jobs.apply', 4) }}" 
           style="display:inline-block; background-color:#38bdf8; color:white; font-weight:bold; text-align:center; padding:12px 24px; border-radius:8px; text-decoration:none; transition: all 0.3s ease;"
           onmouseover="this.style.backgroundColor='#0284c7'; this.style.transform='scale(1.05)';"
           onmouseout="this.style.backgroundColor='#38bdf8'; this.style.transform='scale(1)';">
           Apply Now
        </a>
    </div>

</div>

@endsection
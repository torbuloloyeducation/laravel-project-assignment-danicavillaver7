@extends('layouts.app')

@section('content')
<div class="dashboard">
    <h1>Dashboard</h1>
    <p>Welcome, here’s a quick overview of your site.</p>

    <div class="stats">
        <div class="card">
            <h2>Users</h2>
            <p>{{ $usersCount }}</p>
        </div>
        <div class="card">
            <h2>Jobs</h2>
            <p>{{ $jobsCount }}</p>
        </div>
        <div class="card">
            <h2>Applications</h2>
            <p>{{ $applicationsCount }}</p>
        </div>
    </div>

    <div class="latest-jobs" style="margin-bottom:40px;">
        <h2>Latest Jobs</h2>
        <ul>
            @forelse($latestJobs as $job)
                <li>{{ $job->title }}</li>
            @empty
                <li>No jobs available yet.</li>
            @endforelse
        </ul>
    </div>

    <div class="next-upgrades">
        <h2>Next Upgrades</h2>
        <ul>
            <li>Login system</li>
            <li>Database jobs (real data)</li>
            <li>Dashboard UI</li>
            <li>Make it look like a real website</li>
        </ul>
    </div>
</div>

<style>
.dashboard {
    max-width: 900px;
    margin: auto;
    padding: 40px;
}
.stats {
    display: flex;
    gap: 20px;
    margin-bottom: 40px;
}
.card {
    background: #fff;
    padding: 25px;
    flex: 1;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0px 3px 10px rgba(0,0,0,0.1);
}
.card h2 {
    margin-bottom: 15px;
    font-size: 18px;
    color: #0b3c88;
}
.latest-jobs h2,
.next-upgrades h2 {
    margin-bottom: 15px;
    color: #0b3c88;
}
.latest-jobs ul,
.next-upgrades ul {
    list-style-type: disc;
    padding-left: 20px;
}
</style>
@endsection
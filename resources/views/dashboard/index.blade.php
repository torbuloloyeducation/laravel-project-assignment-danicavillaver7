@extends('layouts.app')

@section('content')
<h1>🚀 Dashboard</h1>
<p>Welcome, Danica! Here's a quick overview of your site.</p>

<div class="grid" style="margin-top: 20px;">
    <div class="card" style="background: #ffddc1;">
        <h2>👤 Users</h2>
        <p style="font-size: 28px; font-weight: bold;">{{ $usersCount }}</p>
    </div>

    <div class="card" style="background: #c1f0ff;">
        <h2>💼 Jobs</h2>
        <p style="font-size: 28px; font-weight: bold;">{{ $jobsCount }}</p>
    </div>

    <div class="card" style="background: #c1ffc1;">
        <h2>📄 Applications</h2>
        <p style="font-size: 28px; font-weight: bold;">{{ $applicationsCount }}</p>
    </div>
</div>

<div class="card" style="margin-top: 30px; background: #f0c1ff;">
    <h2>Next Upgrades</h2>
    <ul>
        <li>Login system</li>
        <li>Database jobs (real data)</li>
        <li>Dashboard UI</li>
        <li>Make it look like a real website</li>
    </ul>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="dashboard-container">
    <h1>Dashboard</h1>
    <p>Welcome back! Here's a quick overview of your site metrics.</p>

    <!-- Stats Cards -->
    <div class="stats-cards">
        <div class="card users-card">
            <h2>Users</h2>
            <p>{{ $usersCount }}</p>
        </div>
        <div class="card jobs-card">
            <h2>Jobs</h2>
            <p>{{ $jobsCount }}</p>
        </div>
        <div class="card applications-card">
            <h2>Applications</h2>
            <p>{{ $applicationsCount }}</p>
        </div>
        <div class="card pending-card">
            <h2>Pending Applications</h2>
            <p>{{ $pendingApplications ?? 3 }}</p>
        </div>
        <div class="card active-jobs-card">
            <h2>Active Jobs</h2>
            <p>{{ $activeJobs ?? 6 }}</p>
        </div>
        <div class="card messages-card">
            <h2>Messages</h2>
            <p>{{ $messagesCount ?? 1 }}</p>
        </div>
    </div>
</div>

<style>
.dashboard-container {
    max-width: 900px;
    margin: 50px auto;
    padding: 20px;
    font-family: 'Segoe UI', sans-serif;
    color: #1f2937;
}
h1 {
    font-size: 28px;
    margin-bottom: 10px;
    color: #0b3c88;
}
p {
    margin-bottom: 30px;
    color: #4b5563;
}

/* Stats Cards */
.stats-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}
.card {
    flex: 1;
    min-width: 180px;
    padding: 25px;
    background: #fff;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.2s, box-shadow 0.2s;
}
.card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}
.card h2 {
    font-size: 16px;
    color: #0b3c88;
    margin-bottom: 8px;
}
.card p {
    font-size: 22px;
    font-weight: bold;
}

/* Optional colors for each card */
.users-card { border-top: 4px solid #4ade80; }        /* green */
.jobs-card { border-top: 4px solid #60a5fa; }        /* blue */
.applications-card { border-top: 4px solid #facc15; }/* yellow */
.pending-card { border-top: 4px solid #f87171; }     /* red */
.active-jobs-card { border-top: 4px solid #8b5cf6; } /* purple */
.messages-card { border-top: 4px solid #f97316; }    /* orange */
</style>
@endsection
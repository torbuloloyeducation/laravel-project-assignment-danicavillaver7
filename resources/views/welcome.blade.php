@extends('layouts.app')

@section('content')

<div class="card">
    <h1>Welcome, Danica</h1>
    <p>This is your Laravel project. Explore the features and try modifying it.</p>
</div>

<div class="grid" style="margin-top: 20px;">
    <div class="card" style="background: #e8f0fe;">
        <h2>Login System</h2>
        <p>Create a secure login system for users with authentication.</p>
    </div>

    <div class="card" style="background: #e0f7fa;">
        <h2>Database Jobs</h2>
        <p>Manage real job data with proper database integration.</p>
    </div>

    <div class="card" style="background: #fff3e0;">
        <h2>Dashboard UI</h2>
        <p>See your data in a clean and modern dashboard layout.</p>
    </div>

    <div class="card" style="background: #f3e5f5;">
        <h2>Website Design</h2>
        <p>Make your Laravel project look like a professional website.</p>
    </div>
</div>

@endsection
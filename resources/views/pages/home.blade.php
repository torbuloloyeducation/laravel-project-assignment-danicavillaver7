@extends('layouts.app')

@section('content')

<h1 style="font-size:28px;">Welcome to My Laravel App</h1>

<p style="font-size:16px; margin-top:10px;">
    This is a clean and modern web application built with Laravel. 
    You can explore features, browse job opportunities, and easily get in touch with us.
</p>

<div style="margin-top:25px;">
    <a href="/contact" class="btn">Get in Touch</a>
    <a href="/jobs" class="btn" style="margin-left:10px; background:#64748b;">
        Browse Jobs
    </a>
</div>

<div style="margin-top:35px;">
    
    <div style="background:#f8fafc; padding:20px; border-radius:10px; margin-bottom:15px;">
        <h2>Job Opportunities</h2>
        <p>
            Discover available positions that match your skills and experience. 
            We provide opportunities for developers, designers, and other professionals.
        </p>
    </div>

    <div style="background:#f8fafc; padding:20px; border-radius:10px; margin-bottom:15px;">
        <h2>Easy Communication</h2>
        <p>
            Contact us easily through our simple and user-friendly contact form.
        </p>
    </div>

    <div style="background:#f8fafc; padding:20px; border-radius:10px;">
        <h2>Fast and Reliable</h2>
        <p>
            Built with Laravel, this application is designed to be efficient, secure, 
            and easy to use for all users.
        </p>
    </div>

</div>

<div class="contact-info">
    <h2>Why Choose Us?</h2>
    <p>
        We focus on simplicity, performance, and user experience. 
        Our goal is to provide a smooth and reliable platform for all users.
    </p>
</div>

@endsection
@extends('layouts.app')

@section('content')

<h1>About Us</h1>

    <p class="text-xl md:text-2xl text-white/90 mb-8">
        Discover a smart and simple platform to <strong>manage your tasks</strong>, 
        <strong>explore exciting job opportunities</strong>, and <strong>connect with ease</strong>.
    </p>
   <a href="{{ url('/jobs') }}" 
   style="display:inline-block; 
          background-color:#38bdf8; 
          color:white; 
          font-weight:bold; 
          text-align:center; 
          padding:12px 28px; 
          border-radius:8px; 
          text-decoration:none; 
          box-shadow: 0 5px 15px rgba(0,0,0,0.1); 
          transition: all 0.3s ease;"
   onmouseover="this.style.backgroundColor='#0284c7'; this.style.transform='scale(1.05)';"
   onmouseout="this.style.backgroundColor='#38bdf8'; this.style.transform='scale(1)';">
   Explore Jobs
</a>

<div style="margin-top:25px; background:#f8fafc; padding:20px; border-radius:10px;">
    <h2>Our Mission</h2>
    <p>
        Our mission is to create clean, efficient, and user-friendly web applications.
        We focus on delivering solutions that are not only functional but also enjoyable to use.
    </p>
</div>

<div style="margin-top:20px; background:#f8fafc; padding:20px; border-radius:10px;">
    <h2>Our Vision</h2>
    <p>
        We aim to become a trusted platform for developers and users by continuously improving 
        and adapting to modern technologies.
    </p>
</div>
<div style="margin-top:20px; background:#f8fafc; padding:20px; border-radius:10px;">
    <h2>Our Team</h2>
    <p>
        Our team consists of passionate developers and designers who love building meaningful digital experiences.
        We believe in collaboration, creativity, and continuous learning.
    </p>
</div>

<div class="contact-info">
    <h2>Get in Touch</h2>
    <p>
        Have questions or want to work with us? We'd love to hear from you.
        Reach out through our contact page and let’s build something great together.
    </p>

    <a href="/contact" class="btn">Contact Us</a>
</div>

@endsection
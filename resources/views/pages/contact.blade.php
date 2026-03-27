@extends('layouts.app')

@section('content')

<h1>Send Us a Message</h1>

<form>
    <div class="form-group">
        <label for="name">Full Name</label>
        <input id="name" type="text" placeholder="Enter your name">
    </div>

    <div class="form-group">
        <label for="email">Email Address</label>
        <input id="email" type="email" placeholder="Enter your email">
    </div>

    <div class="form-group">
        <label for="message">Your Message</label>
        <textarea id="message" placeholder="Write your message..."></textarea>
    </div>

    <button type="submit">Send Message</button>
</form>

<!-- Success Message at the Bottom -->
@if(session('success'))
    <div id="success-message" class="bg-green-100 text-green-800 p-4 rounded mt-6">
        {{ session('success') }}
    </div>

    <script>
        // Wait 5 seconds (5000 ms), then fade out the message
        setTimeout(() => {
            const msg = document.getElementById('success-message');
            if (msg) {
                msg.style.transition = "opacity 1s ease-out";
                msg.style.opacity = 0;
                setTimeout(() => msg.remove(), 1000); 
            }
        }, 5000);
    </script>
@endif


<div class="contact-info">
    <h2>Contact Info</h2>
    <p>Email: danicavillaver7@gmail.com</p>
    <p>Phone: 09633469073</p>
    <p>Address: Mabini, Davao de Oro</p>
</div>

@endsection
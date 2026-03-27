@extends('layouts.app')

@section('content')
<div class="text-center py-20">
    <h1 class="text-4xl font-bold mb-6 text-blue-600">Thank You!</h1>
    <p class="text-lg mb-4">Your application for <strong>{{ $job->title }}</strong> has been submitted successfully.</p>
    <a href="{{ url('/jobs') }}" 
       class="inline-block mt-6 bg-blue-600 text-white font-bold px-6 py-3 rounded-lg hover:bg-blue-700 transition">
       Back to Job Listings
    </a>
</div>
@endsection
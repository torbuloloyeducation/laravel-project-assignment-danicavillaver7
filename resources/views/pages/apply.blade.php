@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">Apply for {{ $job->title }}</h1>

<form action="{{ route('jobs.submit', $job->id) }}" method="POST" class="space-y-4">
    @csrf

    <div>
        <label for="name" class="block font-semibold mb-1">Full Name</label>
        <input id="name" name="name" type="text" 
               value="{{ old('name', Auth::user()?->name) }}" 
               class="w-full border rounded px-4 py-2 focus:ring-2 focus:ring-blue-400">
        @error('name')
            <p class="text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="email" class="block font-semibold mb-1">Email Address</label>
        <input id="email" name="email" type="email" 
               value="{{ old('email', Auth::user()?->email) }}" 
               class="w-full border rounded px-4 py-2 focus:ring-2 focus:ring-blue-400">
        @error('email')
            <p class="text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="cover_letter" class="block font-semibold mb-1">Cover Letter</label>
        <textarea id="cover_letter" name="cover_letter" rows="6" 
                  class="w-full border rounded px-4 py-2 focus:ring-2 focus:ring-blue-400">{{ old('cover_letter') }}</textarea>
        @error('cover_letter')
            <p class="text-red-500 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit" 
            class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 hover:scale-105 transition transform font-semibold">
        Submit Application
    </button>
</form>

@if(session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded mb-6">
        Application submitted successfully!
    </div>
@endif

@endsection
@props(['href' => '#', 'color' => 'blue'])

<a href="{{ $href }}" 
   class="bg-{{ $color }}-500 text-white font-semibold px-6 py-2 rounded-full hover:bg-{{ $color }}-600 transition transform hover:scale-105">
    {{ $slot }}
</a>
<x-button href="/contact" color="yellow">
    Contact Us
</x-button>
<x-button href="/jobs" color="blue">
    Browse Jobs
</x-button>
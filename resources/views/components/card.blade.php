<div class="rounded-lg shadow-lg overflow-hidden mb-6 card-hover"
     @if(isset($bgImage)) style="background-image: url('{{ $bgImage }}'); background-size: cover; background-position: center;" 
     @elseif(isset($bgColor)) style="background-color: {{ $bgColor }};" 
     @else style="background-color: white;" 
     @endif>
    
    <div class="p-6 bg-white/90 backdrop-blur-sm">
        @isset($title)
            <h2 class="text-xl font-bold mb-3">{{ $title }}</h2>
        @endisset

        @isset($badges)
            <div class="flex flex-wrap gap-2 mb-4">
                @foreach($badges as $badge)
                    <span class="px-3 py-1 text-sm font-semibold rounded-full {{ $badge['color'] }}">
                        @if(isset($badge['icon']))
                            <i class="{{ $badge['icon'] }} mr-1"></i>
                        @endif
                        {{ $badge['label'] }}
                    </span>
                @endforeach
            </div>
        @endisset

        {{ $slot }}
    </div>
</div>
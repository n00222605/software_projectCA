<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Plants') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          
            @forelse ($plants as $plant)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                    <a href="{{ route('plants.show', $plant) }}">{{ $plant->common_name }}</a>
                    </h2>
                    <p class="mt-2">
                        {{ $plant->family }}
                        {{$plant->description}}
                        @if ($plant->plant_image)
                        <img src="{{ $plant->plant_image }}" 
                        alt="{{ $plant->title }}" width="100">
                    @else
                        No Image
                    @endif
                    </p>

                </div>
            @empty
            <p>No plants</p>
            @endforelse
            
        </div>
    </div>
</x-app-layout>
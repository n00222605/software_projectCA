<x-app-layout>
    <x-slot name="header">
        <!-- Page Header -->
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('All Plants') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Grid Layout -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Iterate Over Plants -->
                @forelse ($plants as $plant)
                <!-- Plant Card -->
                <div class="bg-yellow-100 shadow-sm shadow-xl sm:rounded-lg">
                    <div class="p-6">
                        <!-- Plant Details -->
                        <h2 class="font-bold text-xl">
                            <a href="{{ route('plants.show', $plant) }}">{{ $plant->common_name }}</a>
                        </h2>
                        <p class="mt-2">{{ $plant->scientific_name }}</p>
                        <p class="mt-2">{{ $plant->height }}</p>
                        <!-- Plant Image -->
                        <div class="mt-4">
                            @if ($plant->plant_image)
                            <img src="{{ asset($plant->plant_image) }}" alt="{{ $plant->common_name }}" class="w-full sm:rounded-lg">
                            @else
                            <p>No Image</p>
                            @endif
                        </div>
                    </div>
                </div>
                @empty
                <!-- Empty State -->
                <p>No plants</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>

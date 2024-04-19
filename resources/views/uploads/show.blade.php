<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight mb-4">
            Dashboard
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg">
                <div class="my-12 p-12 bg-yellow-100 border-b border-gray-200 shadow-sm sm:rounded-lg flex items-center justify-center">
                    <div class="mr-12">
                        <!-- Display Plant Image -->
                        <img src="{{ asset($upload->upload_image) }}" class="sm:rounded-lg" alt="Plant Image">
                    </div>
                    <div>
                        <!-- Plant Name -->
                        <div class="font-bold text-3xl mb-8">
                            <span class="font-bold">Plant Name:</span>
                            <a href="{{ route('plants.show', ['plant' => $upload->plant->id]) }}" class="text-blue-500 hover:underline">{{ $upload->plant->common_name }}</a>
                        </div>
                        <!-- Uploaded By -->
                        <div class="text-gray-700 mb-2">
                            Uploaded By: {{ $upload->user_id }}
                        </div>
                        <!-- Location -->
                        <div class="text-gray-700 mb-2">
                            Location: {{ $upload->location }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

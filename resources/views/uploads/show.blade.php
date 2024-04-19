<x-app-layout>
    <!-- Define the header section of the layout -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Home') }} <!-- Display the title "Home" -->
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Main content area with a white background and shadow -->
            <div class="bg-white shadow-xl sm:rounded-lg">
                <div class="my-12 p-12 bg-yellow-100 border-b border-gray-200 shadow-sm sm:rounded-lg flex items-center justify-center">
                    <div class="mr-12">
                        <!-- Display uploaded image -->
                        <img src="{{ asset($upload->upload_image) }}" class="sm:rounded-lg" alt="Plant Image">
                    </div>
                    <div>
                        <!-- Display plant name -->
                        <div class="font-bold text-3xl mb-8">
                            <span class="font-bold">Plant Name:</span>
                            <!-- Link to the page displaying plant details -->
                            <a href="{{ route('plants.show', ['plant' => $upload->plant->id]) }}" class="text-blue-500 hover:underline">{{ $upload->plant->common_name }}</a>
                        </div>
                        <!-- Display uploader's ID -->
                        <div class="text-gray-700 mb-2">
                            Uploaded By: {{ $upload->user_id }}
                        </div>
                        <!-- Display location -->
                        <div class="text-gray-700 mb-2">
                            Location: {{ $upload->location }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
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

            <!-- Button for uploading images -->
            <x-primary-button class="mb-6">
                <a href="{{ route('uploads.create') }}">Upload Image</a> <!-- Link to the page for uploading images -->
            </x-primary-button>

            <!-- Grid layout for displaying uploads -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Loop through each upload in the $uploads array -->
                @forelse ($uploads as $upload)
                <a href="{{ route('uploads.show', $upload) }}" class="block">
                    <div class="bg-yellow-100 shadow-xl sm:rounded-lg">
                        <div class="p-6 flex items-center">
                            <div class="mr-6">
                                <!-- Display uploaded image -->
                                <img src="{{ asset($upload->upload_image) }}" class="w-24 h-24 rounded-full" alt="Plant Image">
                            </div>
                            <div>
                                <!-- Display plant name -->
                                <div class="font-bold text-lg mb-1">
                                    {{ $upload->plant->common_name }} <!-- Display the common name of the plant -->
                                </div>
                                <!-- Display uploader's ID -->
                                <div class="text-gray-700">
                                    Uploaded By: {{ $upload->user_id }} <!-- Display the ID of the uploader -->
                                </div>
                                <!-- Display location -->
                                <div class="text-gray-700">
                                    Location: {{ $upload->location }} <!-- Display the location where the image was uploaded -->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @empty
                <!-- If there are no uploads, display a message -->
                <p>No uploads</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>

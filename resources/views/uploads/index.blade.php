<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-primary-button class="mb-6">
                <a href="{{ route('uploads.create') }}">Upload Image</a>
            </x-primary-button>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                @forelse ($uploads as $upload)
                <a href="{{ route('uploads.show', $upload) }}" class="block">
                    <div class="bg-yellow-100 shadow-xl sm:rounded-lg">
                        <div class="p-6 flex items-center">
                            <div class="mr-6">
                                <!-- Display Plant Image -->
                                <img src="{{ asset($upload->upload_image) }}" class="w-24 h-24 rounded-full" alt="Plant Image">
                            </div>
                            <div>
                                <!-- Plant Name -->
                                <div class="font-bold text-lg mb-1">
                                    {{ $upload->plant->common_name }}
                                </div>
                                <!-- Uploaded By -->
                                <div class="text-gray-700">
                                    Uploaded By: {{ $upload->user_id }}
                                </div>
                                <!-- Location -->
                                <div class="text-gray-700">
                                    Location: {{ $upload->location }}
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @empty
                <p>No uploads</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
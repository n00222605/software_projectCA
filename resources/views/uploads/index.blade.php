<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Library') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-primary-button class="mt-6">
                <a href="{{ route('uploads.create') }}">Create an upload</a>
            </x-primary-button>
            <!-- <a href="{{ route('uploads.create') }}" class="btn-link btn-lg mb-2">Create an upload</a> -->
            @forelse ($uploads as $upload)
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="font-bold text-2xl">
                    <a href="{{ route('uploads.show', $upload) }}">{{ $upload->plant->common_name }}</a>
                </h2>
                <p class="mt-2">
                    {{ $upload->user_id }}
                    {{$upload->location}}
                    @if ($upload->upload_image)
                    <img src="{{ $upload->upload_image }}" alt="{{ $upload->location }}" width="100">
                    @else
                    No Image
                    @endif
                </p>

            </div>
            @empty
            <p>No uploads</p>
            @endforelse

        </div>
    </div>
</x-app-layout>
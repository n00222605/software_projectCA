<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Upload') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('uploads.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <x-text-input
                        type="text"
                        name="filename"
                        field="title"
                        placeholder="File name"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('filename')"></x-text-input>

                    <x-text-input
                        type="text"
                        name="user_id"
                        field="title"
                        placeholder="User name"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('user_id')"></x-text-input>

                    <x-text-input
                        type="text"
                        name="plant_id"
                        field="title"
                        placeholder="Plant name"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('plant_id')"></x-text-input>
                  
                    <x-file-input
                        type="file"
                        name="plant_image"
                        placeholder="Plant"
                        class="w-full mt-6"
                        field="plant_image"
                        :value="@old('upload_image')">>
                    </x-file-input>

                    <x-primary-button class="mt-6">Save Upload</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
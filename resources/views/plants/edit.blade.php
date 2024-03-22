<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Plant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('plants.update', $plant) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <x-text-input
                        type="text"
                        name="scientific_name"
                        field="title"
                        placeholder="Scientific Name"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('scientific_name', $plant->scientific_name)"></x-text-input>

                    <x-text-input
                        type="text"
                        name="common_name"
                        field="title"
                        placeholder="Common Name"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('common_name', $plant->common_name)"></x-text-input>

                    <x-text-input
                        type="text"
                        name="family"
                        field="title"
                        placeholder="Family"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('family', $plant->family)"></x-text-input>

                    <!-- I created a new component called textarea, you will need to do the same to using the x-textarea component -->
                    <x-textarea
                        name="description"
                        rows="10"
                        field="description"
                        placeholder="Description..."
                        class="w-full mt-6"
                        :value="@old('description', $plant->description)">
                    </x-textarea>

                    <x-textarea
                        type="text"
                        name="care"
                        field="title"
                        placeholder="Care"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('care', $plant->care)"></x-textarea>

                    <x-text-input
                        type="text"
                        name="height"
                        field="title"
                        placeholder="Height"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('height', $plant->height)"></x-text-input>
                  
                    <x-file-input
                        type="file"
                        name="plant_image"
                        placeholder="Plant"
                        class="w-full mt-6"
                        field="plant_image"
                        :value="@old('plant_image')">>
                    </x-file-input>

                    <x-primary-button class="mt-6">Save Plant</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

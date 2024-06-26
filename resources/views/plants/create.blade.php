<x-app-layout>
    <!-- Define the header section of the layout -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Plant') }} <!-- Display the title "Create Plant" -->
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Form for creating a new plant -->
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('plants.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Text input for scientific name -->
                    <x-text-input
                        type="text"
                        name="scientific_name"
                        field="title"
                        placeholder="Scientific Name"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('scientific_name')">
                    </x-text-input>

                    <!-- Text input for common name -->
                    <x-text-input
                        type="text"
                        name="common_name"
                        field="title"
                        placeholder="Common Name"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('common_name')">
                    </x-text-input>

                    <!-- Text input for family -->
                    <x-text-input
                        type="text"
                        name="family"
                        field="title"
                        placeholder="Family"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('family')">
                    </x-text-input>

                    <!-- Textarea input for description -->
                    <x-textarea
                        name="description"
                        rows="10"
                        field="description"
                        placeholder="Description..."
                        class="w-full mt-6"
                        :value="@old('description')">
                    </x-textarea>

                    <!-- Textarea input for care -->
                    <x-textarea
                        name="care"
                        rows="5"
                        field="description"
                        placeholder="Care"
                        class="w-full mt-6"
                        :value="@old('care')">
                    </x-textarea>

                    <!-- Text input for height -->
                    <x-text-input
                        type="text"
                        name="height"
                        field="title"
                        placeholder="Height"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('height')">
                    </x-text-input>
                  
                    <!-- File input for plant image -->
                    <x-file-input
                        type="file"
                        name="plant_image"
                        placeholder="Plant"
                        class="w-full mt-6"
                        field="plant_image"
                        :value="@old('plant_image')">
                    </x-file-input>

                    <!-- Text input for supplier -->
                    <x-text-input
                        type="text"
                        name="supplier"
                        field="title"
                        placeholder="Supplier"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('supplier')">
                    </x-text-input>

                    <!-- Button to submit form -->
                    <x-primary-button class="mt-6">Save Plant</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

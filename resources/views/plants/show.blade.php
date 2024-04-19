<x-app-layout>
    <!-- Define the header section of the layout -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('All Plants') }}
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Main content area with a white background and shadow -->
            <div class="bg-white shadow-xl sm:rounded-lg">
                <div class="my-6 p-6 bg-yellow-100 border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <!-- Scientific Name and Common Name -->
                    <div class="font-bold text-lg mb-1">
                        <span class="font-bold">Scientific Name:</span> {{ $plant->scientific_name }} <!-- Display the scientific name of the plant -->
                    </div>
                    <div class="font-bold text-lg mb-1">
                        <span class="font-bold">Common Name:</span> {{ $plant->common_name }} <!-- Display the common name of the plant -->
                    </div>

                    <!-- Display Plant Image -->
                    <div class="flex justify-center">
                        <img src="{{ asset($plant->plant_image) }}" class="w-64 h-auto" alt="Plant Image"> <!-- Display the plant image -->
                    </div>

                    <!-- Other Details -->
                    <div class="mt-6">
                        <!-- Family -->
                        <div class="text-gray-700">
                            <span class="font-bold text-gray-900">Family:</span> {{ $plant->family }} <!-- Display the family of the plant -->
                        </div>
                        <!-- Description -->
                        <div class="text-gray-700">
                            <span class="font-bold text-gray-900">Description:</span> {{ $plant->description }} <!-- Display the description of the plant -->
                        </div>
                        <!-- Care -->
                        <div class="text-gray-700">
                            <span class="font-bold text-gray-900">Care:</span> {{ $plant->care }} <!-- Display care instructions for the plant -->
                        </div>
                        <!-- Height -->
                        <div class="text-gray-700">
                            <span class="font-bold text-gray-900">Height:</span> {{ $plant->height }} <!-- Display the height of the plant -->
                        </div>
                        <!-- Suppliers -->
                        <div class="mt-4 text-gray-700">
                            <span class="font-bold text-gray-900">Suppliers:</span>
                            @foreach ($plant->suppliers as $supplier)
                            <span class="font-bold text-blue-500 hover:underline"><a href="{{ route('suppliers.show', $supplier) }}">{{ $supplier->name }}</span></a>, <!-- Display the suppliers of the plant with links to their details -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
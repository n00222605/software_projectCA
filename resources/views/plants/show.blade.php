<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg">
                <div class="my-6 p-6 bg-yellow-100 border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <!-- Scientific Name and Common Name -->
                    <div class="font-bold text-lg mb-1">
                        <span class="font-bold">Scientific Name:</span> {{ $plant->scientific_name }}
                    </div>
                    <div class="font-bold text-lg mb-1">
                        <span class="font-bold">Common Name:</span> {{ $plant->common_name }}
                    </div>

                    <!-- Display Plant Image -->
                    <div class="flex justify-center">
                        <img src="{{ asset($plant->plant_image) }}" class="w-64 h-auto" alt="Plant Image">
                    </div>

                    <!-- Other Details -->
                    <div class="mt-6">
                        <!-- Family -->
                        <div class="text-gray-700">
                            <span class="font-bold text-gray-900">Family:</span> {{ $plant->family }}
                        </div>
                        <!-- Description -->
                        <div class="text-gray-700">
                            <span class="font-bold text-gray-900">Description:</span> {{ $plant->description }}
                        </div>
                        <!-- Care -->
                        <div class="text-gray-700">
                            <span class="font-bold text-gray-900">Care:</span> {{ $plant->care }}
                        </div>
                        <!-- Height -->
                        <div class="text-gray-700">
                            <span class="font-bold text-gray-900">Height:</span> {{ $plant->height }}
                        </div>
                        <!-- Suppliers -->
                        <div class="mt-4 text-gray-700">
                            <span class="font-bold text-gray-900">Suppliers:</span>
                            @foreach ($plant->suppliers as $supplier)
                            <span class="font-bold text-blue-500 hover:underline"><a href="{{ route('suppliers.show', $supplier) }}">{{ $supplier->name }}</span></a>,
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
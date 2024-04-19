<x-app-layout>
    <!-- Define the header section of the layout -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('All Suppliers') }} <!-- Display the title "All Suppliers" -->
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          
            <!-- Loop through each supplier in the $suppliers array -->
            @forelse ($suppliers as $supplier)
                <div class="my-6 p-6 bg-yellow-100 border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <!-- Supplier Name -->
                    <h2 class="font-bold text-2xl">
                        <a href="{{ route('suppliers.show', $supplier) }}">{{ $supplier->name }}</a> <!-- Display the name of the supplier with a link to their details -->
                    </h2>
                    <!-- Supplier Address and Email -->
                    <p class="mt-2">
                        {{ $supplier->address }} <!-- Display the address of the supplier -->
                        {{ $supplier->email }} <!-- Display the email of the supplier -->
                    </p>
                </div>
            @empty
            <!-- If there are no suppliers, display a message -->
            <p>No suppliers</p>
            @endforelse
            
        </div>
    </div>
</x-app-layout>

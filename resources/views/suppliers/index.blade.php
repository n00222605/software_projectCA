<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('All Suppliers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          
            @forelse ($suppliers as $supplier)
                <div class="my-6 p-6 bg-yellow-100 border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                    <a href="{{ route('suppliers.show', $supplier) }}">{{ $supplier->name }}</a>
                    </h2>
                    <p class="mt-2">
                        {{ $supplier->address }}
                        {{$supplier->email}}
                    </p>

                </div>
            @empty
            <p>No suppliers</p>
            @endforelse
            
        </div>
    </div>
</x-app-layout>
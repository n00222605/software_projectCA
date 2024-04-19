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
            <!-- Main content area with a white background and shadow -->
            <div class="bg-white shadow-xl sm:rounded-lg">
                <div class="my-6 p-6 bg-yellow-100 border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <!-- Supplier information displayed in a table -->
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td class="font-bold pr-5">Company Name: </td>
                                <td>{{ $supplier->name }}</td> <!-- Display the company name of the supplier -->
                            </tr>
                            <tr>
                                <td class="font-bold pr-5">Email: </td>
                                <td>{{ $supplier->email }}</td> <!-- Display the email of the supplier -->
                            </tr>
                            <tr>
                                <td class="font-bold pr-5">Address: </td>
                                <td>{{ $supplier->address }}</td> <!-- Display the address of the supplier -->
                            </tr>
                        </tbody>
                    </table>
                    <!-- Display seeds supplied by the supplier -->
                    <div class="mt-4 text-gray-700">
                        <span class="font-bold text-gray-900 pr-6">Seeds Supplied:</span>
                        @foreach ($supplier->plants as $plant)
                        {{ $plant->common_name }}, <!-- Display the common names of the seeds supplied by the supplier -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
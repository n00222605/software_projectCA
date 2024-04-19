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
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td class="font-bold pr-5">Company Name: </td>
                                <td>{{ $supplier->name }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold pr-5">Email: </td>
                                <td>{{ $supplier->email }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold pr-5">Address: </td>
                                <td>{{ $supplier->address }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Display seeds supplied by the supplier -->
                    <div class="mt-4 text-gray-700">
                        <span class="font-bold text-gray-900 pr-6">Seeds Supplied:</span>
                        @foreach ($supplier->plants as $plant)
                            {{ $plant->common_name }},
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

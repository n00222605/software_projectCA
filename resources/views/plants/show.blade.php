<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td rowspan="8">
                                    <!-- use the asset function, access the file $plant->plant_image in the folder storage/images -->
                                    <img src="{{asset($plant->plant_image) }}" width="1500" />
                                </td>
                            </tr>

                            <tr>
                                <td class="font-bold ">Scientific Name </td>
                                <td>{{ $plant->scientific_name }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold ">Common Name </td>
                                <td>{{ $plant->common_name }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold ">Family </td>
                                <td>{{ $plant->family }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold">Description </td>
                                <td>{{ $plant->description }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold ">Care </td>
                                <td>{{ $plant->care }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold ">Height </td>
                                <td>{{ $plant->height }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold ">Suppliers </td>
                                <td>
                                    @foreach ($plant->suppliers as $supplier)
                                    {{ $supplier->name }},
                                    @endforeach
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <x-primary-button><a href="{{ route('plants.edit', $plant)}}">Edit</a></x-primary-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
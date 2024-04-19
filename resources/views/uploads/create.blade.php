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

                    <x-file-input
                        type="file"
                        name="upload_image"
                        placeholder="Plant"
                        class="w-full mt-6"
                        field="upload_image"
                        :value="@old('upload_image')">>
                    </x-file-input>

                    <div class="w-1/6 pt-6">
                        <x-county-dropdown
                            name="location"
                            field="location"
                            placeholder="Location"
                            class="w-full"
                            :selected="old('location')"
                            :counties="['Antrim', 'Armagh', 'Carlow', 'Cavan', 'Clare', 'Cork', 'Derry', 'Donegal', 'Down', 'Dublin', 'Fermanagh', 'Galway', 'Kerry', 'Kildare', 'Kilkenny', 'Laois', 'Leitrim', 'Limerick', 'Longford', 'Louth', 'Mayo', 'Meath', 'Monaghan', 'Offaly', 'Roscommon', 'Sligo', 'Tipperary', 'Tyrone', 'Waterford', 'Westmeath', 'Wexford', 'Wicklow']"
                        />
                    </div>


                    <x-primary-button class="mt-6">Save Upload</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.vehicles.index') }}"
                    class=" text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2  dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Close</a>

            </div>

            <div class="m-2 p-2">
                <form method="POST" action="{{ route('admin.vehicles.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <div>
                            <x-input-label for="brand" :value="__('Brand')" />
                            <x-text-input id="brand" class="block mt-1 w-full" type="text" name="brand"
                                :value="old('brand')" required autofocus autocomplete="brand" />
                            <x-input-error :messages="$errors->get('brand')" class="mt-2" />
                        </div>

                        <div class="mb-6">
                            <div>
                                <x-input-label for="model" :value="__('Model')" />
                                <x-text-input id="model" class="block mt-1 w-full" type="text" name="model"
                                    :value="old('model')" required autofocus autocomplete="model" />
                                <x-input-error :messages="$errors->get('model')" class="mt-2" />
                            </div>

                            <div class="mb-6 ">
                                <div class="">
                                    <x-input-label for="registration_no" :value="__('Registration_no')" />
                                    <x-text-input id="registration_no" class="block mt-1 w-full" type="text"
                                        name="registration_no" :value="old('registration_no')" required autofocus
                                        autocomplete="registration_no" />
                                    <x-input-error :messages="$errors->get('registration_no')" class="mt-2" />
                                </div>

                                <div class="mb-6">
                                    <div>
                                        <x-input-label for="insurance_no" :value="__('Insurance_no')" />
                                        <x-text-input id="insurance_no" class="block mt-1 w-full" type="text"
                                            name="insurance_no" :value="old('insurance_no')" required autofocus
                                            autocomplete="insurance_no" />
                                        <x-input-error :messages="$errors->get('insurance_no')" class="mt-2" />
                                    </div>

                                    <form method="POST" action="/upload" enctype="multipart/form-data">
                                        <div class="mb-6">
                                            <label class=":text-white mb-2 block text-sm font-medium text-gray-900"
                                                for="user_avatar">Upload
                                                Photo</label>
                                            <input
                                                class=":border-gray-600 :bg-gray-700 :text-gray-400 :placeholder-gray-400 block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none"
                                                aria-describedby="user_avatar_help" id="image" type="file"
                                                name="image" />
                                        </div>

                                        <div class="flex justify-end m-2 p-2">
                                            <button type="submit"
                                                class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Add</button>
                                        </div>
                                    </form>

                                </div>
                </form>



            </div>
        </div>
    </div>
</x-admin-layout>

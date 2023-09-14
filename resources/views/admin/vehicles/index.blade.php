<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.vehicles.create') }}"
                    class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                    Add New</a>

            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                    <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Picture</th>
                            <th scope="col" class="px-6 py-3">Vehicle ID</th>
                            <th scope="col" class="px-6 py-3">Brand</th>
                            <th scope="col" class="px-6 py-3">Model</th>
                            <th scope="col" class="px-6 py-3">Register No.</th>
                            <th scope="col" class="px-6 py-3">Insurance No.</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicles as $vehicle)
                            <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-900">
                                <td
                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img src="{{ Storage::url($vehicle->image) }}" alt="Vehicle Image"
                                        class=" h-16 w-25 rounded-lg">

                                </td>

                                <th scope="row"
                                    class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                    {{ $vehicle->id }}</th>
                                <td class="px-6 py-4">{{ $vehicle->brand }}</td>
                                <td class="px-6 py-4">{{ $vehicle->model }}</td>
                                <td class="px-6 py-4">{{ $vehicle->registration_no }}</td>
                                <td class="px-6 py-4">{{ $vehicle->insurance_no }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('admin.vehicles.edit', $vehicle->id) }}"
                                        class=":text-blue-500 font-medium text-blue-600 hover:underline">Edit</a>
                                    <form action="{{ route('admin.vehicles.destroy', $vehicle->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure?')">
                                        @csrf @method('DELETE')
                                        <button class=":text-red-500 py-2 font-medium text-red-600 hover:underline"
                                            type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>



        </div>

    </div>
</x-admin-layout>

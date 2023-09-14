<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class=":text-gray-400 w-full text-left text-sm text-gray-500">
                        <thead class=":bg-gray-700 :text-gray-400 bg-gray-50 text-xs uppercase text-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3">Picture</th>
                                <th scope="col" class="px-6 py-3">Product name</th>
                                <th scope="col" class="px-6 py-3">Color</th>
                                <th scope="col" class="px-6 py-3">Category</th>
                                <th scope="col" class="px-6 py-3">Price</th>
                                <th scope="col" class="px-6 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class=":bg-gray-800 :border-gray-700 border-b bg-white">
                                <th scope="row"
                                    class="flex items-center whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        alt="Jese image" />
                                </th>
                                <th scope="row"
                                    class=":text-white whitespace-nowrap px-6 py-4 font-medium text-gray-900">Apple
                                    MacBook Pro 17"</th>
                                <td class="px-6 py-4">Silver</td>
                                <td class="px-6 py-4">Laptop</td>
                                <td class="px-6 py-4">$2999</td>
                                <td class="px-6 py-4">
                                    <a href="#"
                                        class=":text-blue-500 font-medium text-blue-600 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class=":bg-gray-800 :border-gray-700 border-b bg-white">
                                <th scope="row"
                                    class="flex items-center whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        alt="Jese image" />
                                </th>
                                <th scope="row"
                                    class=":text-white whitespace-nowrap px-6 py-4 font-medium text-gray-900">Microsoft
                                    Surface Pro</th>
                                <td class="px-6 py-4">White</td>
                                <td class="px-6 py-4">Laptop PC</td>
                                <td class="px-6 py-4">$1999</td>
                                <td class="px-6 py-4">
                                    <a href="#"
                                        class=":text-blue-500 font-medium text-blue-600 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class=":bg-gray-800 bg-white">
                                <th scope="row"
                                    class="flex items-center whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                        alt="Jese image" />
                                </th>
                                <th scope="row"
                                    class=":text-white whitespace-nowrap px-6 py-4 font-medium text-gray-900">Magic
                                    Mouse 2</th>
                                <td class="px-6 py-4">Black</td>
                                <td class="px-6 py-4">Accessories</td>
                                <td class="px-6 py-4">$99</td>
                                <td class="px-6 py-4">
                                    <a href="#"
                                        class=":text-blue-500 font-medium text-blue-600 hover:underline">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="flex items-center justify-center font-semibold text-3xl text-gray-800 dark:text-white  leading-tight">
            {{ __('Your Bookings') }}
        </h2>
    </x-slot>

    <div class="px-8 relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Booking ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pick-up Location
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Drop-off Location
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Passenger Count
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Vehicle
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{ $booking->id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $booking->pickup }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $booking->dropoff }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $booking->passengers }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $booking->vehicle->brand }} - {{ $booking->vehicle->model }}
                            ({{ $booking->vehicle->registration_no }})
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('booking.destroy', $booking->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>

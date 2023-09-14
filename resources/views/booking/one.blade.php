<x-app-layout>
    <x-slot name="header">
        <h2 class="flex items-center justify-center font-semibold text-3xl text-gray-800 dark:text-white  leading-tight">
            {{ __('Book A Ride') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Welcome! {{ __(Auth::user()->name) }}
                </div>
            </div>
    </div> --}}

    <div class="flex items-center justify-center m-12">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mb-5 mx-auto w-full max-w-[550px] bg-white p-12 rounded-lg">


            <form action="{{ route('booking.store.one') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                Name
                            </label>
                            <input value="{{ __(Auth::user()->name) }}" readonly="readonly" type="text"
                                name="name" id="name" placeholder="Name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="mobile" class="mb-3 block text-base font-medium text-[#07074D]">
                                Mobile
                            </label>
                            <input value="{{ __(Auth::user()->mobile) }}" readonly="readonly" type="text"
                                name="mobile" id="mobile" placeholder="Last Name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>

                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="mobile" class="mb-3 block text-base font-medium text-[#07074D]">
                                Pick-up Location
                            </label>
                            <input value="{{ $booking->pickup ?? '' }}" type="text" name="pickup" id="pickup"
                                placeholder="Pickup"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>

                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="mobile" class="mb-3 block text-base font-medium text-[#07074D]">
                                Drop-off Location
                            </label>
                            <input value="{{ $booking->dropoff ?? '' }}" type="text" name="dropoff" id="dropoff"
                                placeholder="Dropoff"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="guest" class="mb-3 block text-base font-medium text-[#07074D]">
                        Passenger count
                    </label>
                    <input type="number" name="passengers" id="passengers" placeholder="Maximum 4" min="1"
                        max="4" value="{{ $booking->passengers ?? '' }}"
                        class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="sm:col-span-6 pt-5">
                    <label for="status" class="block text-sm font-medium text-gray-700">Vehicle</label>
                    <div class="mt-1">
                        <select id="vehicle_id" name="vehicle_id" class="form-multiselect block w-full mt-1">
                            @foreach ($vehicles as $vehicle)
                                <option value="{{ $vehicle->id }}"
                                    {{ $vehicle->id == optional($booking)->vehicle_id ? 'selected' : '' }}>
                                    {{ $vehicle->brand }} - {{ $vehicle->model }} ({{ $vehicle->registration_no }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('vehicle_id')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>



                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5" class="">
                            <label for="date" class=" mb-3 block text-base font-medium text-[#07074D]">
                                Date
                            </label>
                            <input type="datetime-local" name="dateTime" id="dateTime"
                                value="{{ $booking ? $booking->dateTime->format('Y-m-d\TH:i:s') : '' }}"
                                min="{{ $min_date->format('Y-m-d\TH:i:s') }}"
                                max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                                class="  w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    {{-- <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                                Time
                            </label>
                            <input type="time" name="time" id="time"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div> --}}
                </div>

                <button type="submit"
                    class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Book Your Ride
                </button>

                {{-- <div class="mb-5">
                        <label class="mb-3 block text-base font-medium text-[#07074D]">
                            Are you coming to the event?
                        </label>
                        <div class="flex items-center space-x-6">
                            <div class="flex items-center">
                                <input type="radio" name="radio1" id="radioButton1" class="h-5 w-5" />
                                <label for="radioButton1" class="pl-3 text-base font-medium text-[#07074D]">
                                    Cash
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" name="radio1" id="radioButton2" class="h-5 w-5" />
                                <label for="radioButton2" class="pl-3 text-base font-medium text-[#07074D]">
                                    Card
                                </label>
                            </div>
                        </div>
                    </div> --}}
            </form>

        </div>
    </div>
    </div>


</x-app-layout>

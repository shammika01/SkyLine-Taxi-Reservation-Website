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
        <div class="mx-auto w-full max-w-[550px] bg-white p-12 rounded-lg">
            <form action="https://formbold.com/s/FORM_ID" method="POST">
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="fName" class="mb-3 block text-base font-medium text-[#07074D]">
                                Name
                            </label>
                            <input value="{{ __(Auth::user()->name) }}" readonly="readonly" type="text"
                                name="fName" id="fName" placeholder="First Name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="lName" class="mb-3 block text-base font-medium text-[#07074D]">
                                Mobile
                            </label>
                            <input value="{{ __(Auth::user()->mobile) }}" readonly="readonly" type="text"
                                name="lName" id="lName" placeholder="Last Name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="guest" class="mb-3 block text-base font-medium text-[#07074D]">
                        Passenger count
                    </label>
                    <input type="number" name="guest" id="guest" placeholder="Maximum 4" min="0"
                        max="4"
                        class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                Date
                            </label>
                            <input type="date" name="date" id="date"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                                Time
                            </label>
                            <input type="time" name="time" id="time"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>

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

                <div>
                    <button
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>


</x-app-layout>

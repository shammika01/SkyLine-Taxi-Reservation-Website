<x-app-layout>
    <x-slot name="header">
        <h2 class="flex items-center justify-center font-semibold text-3xl text-gray-800 dark:text-white  leading-tight">
            {{ __('Welcome') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Welcome! {{ __(Auth::user()->name) }}
                </div>
            </div>
        </div>
    </div> --}}

    <section class="bg-white dark:bg-gray-700">
        <div class="py- mx-auto max-w-screen-xl px-4 text-center lg:py-16">
            <!-- <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white md:text-5xl lg:text-6xl">We invest in the world’s potential</h1> -->

            <h1
                class="mb-7 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                Experience the Comfort of On-Demand Travel</h1>

            <div class=" grid grid-cols-2 justify-center gap-2">
                <div class="mb-auto ms-auto">
                    <img class="h-52 w-auto rounded-lg" src="{{ url('/56dd83df7867a10a7d6f99c92dac66d1.webp') }}"
                        alt="" />
                </div>

                <div class="mb-auto me-auto">
                    <img class="h-52 w-auto rounded-lg" src="{{ url('/18078f287ce75878d1858ab43d7607e2.webp') }}"
                        alt="" />
                </div>

                <div class="ms-auto mt-auto"><img class="h-52 w-auto rounded-lg" src="{{ url('/14118042.jpg') }}"
                        alt="" /></div>

                <div class="me-auto mt-auto"><img class="h-52 w-auto rounded-lg"
                        src="{{ url('/8fdac97657ca0c66065657daf2d28e46.webp') }}" alt="" /></div>
            </div>

            <section class="bg-white dark:bg-gray-700">
                <div class="mx-auto max-w-screen-xl px-4 text-center lg:py-10">
                    <!-- <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white md:text-5xl lg:text-6xl">We invest in the world’s potential</h1> -->
                    <p class="mb-8 text-lg font-normal text-gray-500 dark:text-gray-400 sm:px-16 lg:px-48 lg:text-xl">
                        SkyLine provides Fast,
                        convenient transportation at your fingertips.Experience a reliable taxi service that gets you
                        where you
                        need to go,
                        anytime, anywhere.</p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-x-4 sm:space-y-0">
                        <a href="{{ route('booking.one') }}"
                            class="inline-flex items-center justify-center rounded-lg bg-blue-700 px-5 py-3 text-center text-base font-medium text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                            Book A Ride
                            <svg aria-hidden="true" class="-mr-1 ml-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        {{-- <a href="#"
                            class="inline-flex items-center justify-center rounded-lg border border-gray-300 px-5 py-3 text-center text-base font-medium text-gray-900 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                            Learn more </a> --}}
                    </div>
                </div>
            </section>
        </div>
    </section>








</x-app-layout>

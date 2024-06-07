<x-app-layout>
    <x-slot name="title">
        Freelancers
    </x-slot>
    <x-nav-custom></x-nav-custom>

    <main x-data="{ mobileFiltersOpen: false, menuOpen: false, sortMenuOpen:false }">

        <div class="bg-white dark:bg-slate-800">
            <div>

                <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">

                    <div x-show="mobileFiltersOpen" class="fixed inset-0 bg-black bg-opacity-25" @click="mobileFiltersOpen = false"></div>

                    <div x-show="mobileFiltersOpen" class="fixed inset-0 z-40 flex">

                        <div class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white dark:bg-slate-800 py-4 pb-12 shadow-xl">
                            <div class="flex items-center justify-between px-4">
                                <h2 class="text-lg font-medium text-gray-800 dark:text-slate-200">Filters</h2>
                                <button type="button" @click="mobileFiltersOpen = false" class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md text-gray-800 dark:text-slate-200 p-2 ">
                                    <span class="sr-only">Close menu</span>
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <!-- Filters -->
                            <form class="mt-4 border-t border-gray-200">
                                <h3 class="sr-only">Categories</h3>
                                <ul role="list" class="px-2 py-3 font-medium text-gray-900">
                                    <li>
                                        <a href="#" class="block px-2 py-3 text-gray-800 dark:text-slate-200">All</a>
                                    </li>

                                </ul>

                            </form>
                        </div>
                    </div>
                </div>

                <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-24">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-800 dark:text-gray-200">Freelancers</h1>

                        <div class="flex items-center">
                            <div class="relative inline-block text-left">
                                <div>
                                    <button type="button" @click="sortMenuOpen = !sortMenuOpen" class="group inline-flex justify-center text-sm font-medium text-gray-800 dark:text-slate-200" id="menu-button" aria-expanded="false" aria-haspopup="true">
                                        Sort
                                        <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>

                                <div x-show="sortMenuOpen" @click.away="sortMenuOpen = false" class="absolute z-10 right-0 mt-2 w-40 origin-top-right rounded-md bg-white dark:bg-slate-700 shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                    <div class="py-1" role="none">

                                    </div>
                                </div>
                            </div>

                            <!-- <button type="button" class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
                                <span class="sr-only">View grid</span>
                                <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z" clip-rule="evenodd" />
                                </svg>
                            </button> -->

                            <button type="button" @click="mobileFiltersOpen = !mobileFiltersOpen" class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                                <span class="sr-only">Filters</span>
                                <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <section aria-labelledby="products-heading" class="pb-24 pt-6">
                        <h2 id="products-heading" class="sr-only">Freelancers</h2>

                        <div class="grid grid-cols-1 h-screen py-5 px-7 overflow-y-scroll gap-x-8 gap-y-10 lg:grid-cols-4">
                            <!-- Filters -->

                            <!-- Product grid -->
                            <div class="flex flex-col gap-8 lg:col-span-3">
                                <!-- Your content -->
                                @foreach($freelancers as $freelancer)
                                <a href="{{ route('freelancer.show', [$freelancer->freelancer_id]) }}" class="freelancer relative bg-slate-200 dark:bg-slate-700 border shadow-xl ease-in duration-150 hover:scale-105 rounded-lg p-5">

                                    @if($freelancer->availability)
                                    <span class="absolute right-1 top-1 p-2 bg-green-500 rounded-full"></span>
                                    @else
                                    <span class="absolute right-1 top-1 p-2 bg-red-500 rounded-full"></span>
                                    @endif

                                    <img src="https://via.placeholder.com/150" alt="Profile Picture" class="h-12 w-12 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0 sm:float-left">

                                    <div class="flex items-baseline gap-1">
                                        <h2 class="text-xl text-slate-800 dark:text-slate-200">{{ $freelancer->user->name }}</h2>
                                        <!-- <span class="text-sm text-slate-800 dark:text-slate-200 ">Romania</span> -->
                                    </div>
                                    <p class="text-slate-400 text-sm mb-2">{{ $freelancer->niche }}</p>
                                    <div class="flex gap-3 mb-2">
                                        <p class="text-slate-400">{{ $freelancer->hourly_rate ? '$' . $freelancer->hourly_rate . ' / hour' : 'Not specified' }}</p>
                                        <!-- <p class="text-slate-400 flex items-center">4.5 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 dark:text-yellow-400 text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                        </p>
                                        <p class="text-slate-400">100% Job Success</p> -->

                                        <p class="text-slate-400">{{ $freelancer->availability ? 'Availabe' : 'Unavailable' }}</p>

                                    </div>
                                    <div class="flex gap-2 flex-wrap">
                                        @foreach($freelancer->skill as $skill)
                                        <span class="bg-gray-500 text-white dark:bg-slate-200 dark:text-slate-800 px-2 py-1 rounded-full text-xs font-semibold">
                                            {{ $skill->skill_name }}
                                        </span>
                                        @endforeach
                                    </div>
                                </a>
                                @endforeach

                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>

    </main>

    <x-footer-custom></x-footer-custom>

</x-app-layout>
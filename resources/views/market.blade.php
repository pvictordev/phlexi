<x-app-layout>
    <x-slot name="title">
        Market
    </x-slot>
    <x-nav-custom></x-nav-custom>
    <main>

        <div class="bg-white dark:bg-slate-800">
            <div>
                <!--
      Mobile filter dialog

      Off-canvas filters for mobile, show/hide based on off-canvas filters state.
    -->
                <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
                    <!--
        Off-canvas menu backdrop, show/hide based on off-canvas menu state.

        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
                    <div class="fixed inset-0 bg-black bg-opacity-25"></div>

                    <div class="fixed inset-0 z-40 flex">
                        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.

          Entering: "transition ease-in-out duration-300 transform"
            From: "translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "translate-x-full"
        -->
                        <div class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white dark:bg-slate-800 py-4 pb-12 shadow-xl">
                            <div class="flex items-center justify-between px-4">
                                <h2 class="text-lg font-medium text-gray-800 dark:text-slate-200">Filters</h2>
                                <button type="button" class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md text-gray-800 dark:text-slate-200 p-2 ">
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
                                        <a href="#" class="block px-2 py-3 text-gray-800 dark:text-slate-200">Totes</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-2 py-3 text-gray-800 dark:text-slate-200">Backpacks</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-2 py-3 text-gray-800 dark:text-slate-200">Travel Bags</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-2 py-3 text-gray-800 dark:text-slate-200">Hip Bags</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-2 py-3 text-gray-800 dark:text-slate-200">Laptop Sleeves</a>
                                    </li>
                                </ul>

                            </form>
                        </div>
                    </div>
                </div>

                <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-24">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-800 dark:text-gray-200">Projects</h1>

                        <div class="flex items-center">
                            <div class="relative inline-block text-left">
                                <div>
                                    <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-800 dark:text-slate-200" id="menu-button" aria-expanded="false" aria-haspopup="true">
                                        Sort
                                        <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>

                                <!--
              Dropdown menu, show/hide based on menu state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
                                <div class="absolute right-0 mt-2 w-40 origin-top-right rounded-md bg-white dark:bg-slate-700 shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                    <div class="py-1" role="none">
                                        <!--
                  Active: "bg-gray-100", Not Active: ""

                  Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                -->
                                        <a href="#" class="font-medium text-gray-800 dark:text-slate-200  block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Most Popular</a>
                                        <a href="#" class="text-gray-800 dark:text-slate-200 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Best Rating</a>
                                        <a href="#" class="text-gray-800 dark:text-slate-200 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Newest</a>
                                        <a href="#" class="text-gray-800 dark:text-slate-200 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Price: Low to High</a>
                                        <a href="#" class="text-gray-800 dark:text-slate-200 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-4">Price: High to Low</a>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
                                <span class="sr-only">View grid</span>
                                <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button type="button" class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                                <span class="sr-only">Filters</span>
                                <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <section aria-labelledby="products-heading" class="pb-24 pt-6">
                        <h2 id="products-heading" class="sr-only">Products</h2>

                        <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                            <!-- Filters -->

                            <!-- Product grid -->
                            <div class="flex flex-col gap-8 lg:col-span-3">
                                <!-- Your content -->
                                @foreach ($projects as $project)
                                <div class="relative bg-slate-200 dark:bg-slate-700 border shadow-2xl ease-in duration-150 hover:scale-105 rounded-lg p-5">
                                    <span class="absolute right-1 top-1 p-2 bg-green-500 rounded-full"></span>
                                    <h1 class="font-bold text-slate-800 dark:text-slate-200 text-xl">Blockchain Developers, crypto evangelists and web3 innovators</h1>
                                    <div class="mb-3 mt-3">
                                        <small class="text-slate-500 font-bold flex items-center gap-2">
                                            <span data-test="budget">
                                                Est. Budget: {{ $project->price }}$ -
                                            </span> <span>{{ $project->created_at->diffForHumans() }}</span>
                                        </small>
                                    </div>
                                    <div class="my-4">
                                        <div>
                                            <p class="text-gray-800 dark:text-gray-200" data-test="job-description-text">{{ $project->description }}</p>
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <!-- <button class="btn btn-primary">Join</button> -->
                                        <small class="bg-slate-500 text-white px-2 py-1 rounded-md">{{ $project->category->category_name }}</small>
                                    </div>
                                    <div class="my-4 ">
                                        <button class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">Offer</button>
                                    </div>
                                </div>
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
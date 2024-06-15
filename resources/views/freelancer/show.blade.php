<x-app-layout>
    <x-nav-custom></x-nav-custom>

    <main class="py-28">
        <span class="absolute top-20 left-2 cursor-pointer" onclick="history.back()">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" width="40px" height="40px" viewBox="0 0 32 32" version="1.1">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                    <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-414.000000, -985.000000)" fill="#2563eb">
                        <path d="M436,1002 L425.414,1002 L429.535,1006.12 C429.926,1006.51 429.926,1007.15 429.535,1007.54 C429.145,1007.93 428.512,1007.93 428.121,1007.54 L422.465,1001.879 C422.225,1001.639 422.15,1001.311 422.205,1001 C422.15,1000.689 422.225,1000.361 422.465,1000.121 L428.121,994.465 C428.512,994.074 429.145,994.074 429.535,994.465 C429.926,994.855 429.926,995.488 429.535,995.879 L425.414,1000 L436,1000 C436.553,1000 437,1000.448 437,1001 C437,1001.553 436.553,1002 436,1002 L436,1002 Z M442,985 L418,985 C415.791,985 414,986.791 414,989 L414,1013 C414,1015.21 415.791,1017 418,1017 L442,1017 C444.209,1017 446,1015.21 446,1013 L446,989 C446,986.791 444.209,985 442,985 L442,985 Z" id="arrow-left-square" sketch:type="MSShapeGroup">

                        </path>
                    </g>
                </g>
            </svg>
        </span>

        <div class="max-w-7xl mx-auto sm:p-6 lg:p-8">
            <div class="mx-auto p-4">
                <div class="border-2 relative border-gray-200 mx-auto rounded-lg shadow-lg overflow-hidden  dark:text-slate-200 bg-slate-200 dark:bg-slate-700">
                    <div class="absolute top-3 right-3">
                        <div @click.away="open = false" class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                <span class="">Contact</span>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 transition-transform duration-200 transform md:-mt-1">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-10 right-0 md:w-60 mt-2 origin-top-right">
                                <div class="px-2 pt-2 pb-4 bg-white rounded-md shadow-lg dark:bg-gray-700">
                                    <div class="z-10 flex flex-col">
                                        <button class="flex rounded-lg bg-transparent p-2 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                            <div class="bg-blue-500 text-white rounded-lg p-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none">
                                                    <path d="M4 7.00005L10.2 11.65C11.2667 12.45 12.7333 12.45 13.8 11.65L20 7" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <rect x="3" y="5" width="18" height="14" rx="2" stroke="#ffff" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="font-semibold text-left">Email</p>
                                                <p class="text-sm">{{ $freelancer->user->email ?? "No email" }}</p>
                                            </div>
                                        </button>

                                        <button class="flex row items-end rounded-lg bg-transparent p-2 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                            <div class="bg-teal-500 text-white rounded-lg p-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.3545 22.2323C15.3344 21.7262 11.1989 20.2993 7.44976 16.5502C3.70065 12.8011 2.2738 8.66559 1.76767 6.6455C1.47681 5.48459 2.00058 4.36434 2.88869 3.72997L5.21694 2.06693C6.57922 1.09388 8.47432 1.42407 9.42724 2.80051L10.893 4.91776C11.5152 5.8165 11.3006 7.0483 10.4111 7.68365L9.24234 8.51849C9.41923 9.1951 9.96939 10.5846 11.6924 12.3076C13.4154 14.0306 14.8049 14.5807 15.4815 14.7576L16.3163 13.5888C16.9517 12.6994 18.1835 12.4847 19.0822 13.1069L21.1995 14.5727C22.5759 15.5257 22.9061 17.4207 21.933 18.783L20.27 21.1113C19.6356 21.9994 18.5154 22.5232 17.3545 22.2323ZM8.86397 15.136C12.2734 18.5454 16.0358 19.8401 17.8405 20.2923C18.1043 20.3583 18.4232 20.2558 18.6425 19.9488L20.3056 17.6205C20.6299 17.1665 20.5199 16.5348 20.061 16.2171L17.9438 14.7513L17.0479 16.0056C16.6818 16.5182 16.0047 16.9202 15.2163 16.7501C14.2323 16.5378 12.4133 15.8569 10.2782 13.7218C8.1431 11.5867 7.46219 9.7677 7.24987 8.7837C7.07977 7.9953 7.48181 7.31821 7.99439 6.95208L9.24864 6.05618L7.78285 3.93893C7.46521 3.48011 6.83351 3.37005 6.37942 3.6944L4.05117 5.35744C3.74413 5.57675 3.64162 5.89565 3.70771 6.15943C4.15989 7.96418 5.45459 11.7266 8.86397 15.136Z" fill="#ffff" />
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="font-semibold text-left">Phone</p>
                                                <p class="text-sm">{{ $freelancer->user->phone ?? "No phone" }}</p>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col items-center px-6 py-4">
                        @if($freelancer->user->picture)
                        <img src="{{ Storage::url($freelancer->user->picture) }}" alt="Profile Picture" class="h-32 w-32 object-cover rounded-full mx-auto mb-3">
                        @else
                        <img src="https://via.placeholder.com/150" alt="Profile Picture" class="h-32 w-32 object-cover rounded-full mx-auto mb-3">
                        @endif
                        <div class="text-center">
                            <p class="text-xl font-semibold">{{ $freelancer->user->name }}</p>
                            <p class="text-sm text-slate-500 font-medium">{{ $freelancer->niche ?? "No niche added" }}</p>
                            <!-- <p class="text-sm font-medium">Romania - 04:20am</p> -->
                        </div>
                    </div>

                    <div class="border-t w-full border-b border-gray-400">
                        <div class="p-4 mx-auto flex flex-col gap-3 justify-between items-center">
                            <div class="text-center">
                                <p class="text-lg font-semibold">Hourly rate</p>
                                <p class="text-sm font-medium text-slate-500">{{ $freelancer->hourly_rate ? '$' . $freelancer->hourly_rate . ' / hour' : 'Not specified' }}</p>
                            </div>
                            <!-- <div class="text-center">
                                <p class="text-lg font-semibold">Rating</p>
                                <div class="flex items-center justify-center">
                                    <p class="text-sm font-medium text-slate-500">4.5</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 dark:text-yellow-400 text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                </div>
                            </div> -->
                            <div class="text-center ">
                                <p class="text-lg font-semibold">Availability</p>
                                <p class="text-sm font-medium text-slate-500">{{ $freelancer->availability ? 'Availabe' : 'Unavailable' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 flex flex-col items-center justify-center">
                        <h2 class="text-lg font-semibold mb-1">Bio</h2>
                        <p class="leading-relaxed text-slate-500">
                            {{ $freelancer->bio ?? "No bio added" }}
                        </p>
                    </div>

                    <!-- skills -->
                    <div class="border-t border-gray-400 px-6 py-4 relative">
                        <h2 class="text-lg font-semibold mb-2">Skills</h2>
                        <div class="flex flex-wrap gap-1">
                            @if($freelancerSkill->skill->isEmpty())
                            <span class="text-slate-500">No skills added</span>
                            @else
                            @foreach($freelancerSkill->skill as $skill)
                            <span class="bg-gray-300 text-gray-800 dark:bg-slate-200 dark:text-slate-800 px-2 py-1 rounded-full text-xs font-semibold">
                                {{ $skill->skill_name }}
                            </span>
                            @endforeach
                            @endif
                        </div>
                    </div>

                    <!-- Reviews -->
                    <div class=" border-t border-gray-400 px-6 py-4">
                        <h2 class="text-lg font-semibold mb-2">Reviews</h2>

                        <div class="overflow-y-auto max-h-80">
                            @if($reviews->isEmpty())
                            <span class="text-slate-500">No reivews yet</span>
                            @else
                            @foreach($reviews as $review)
                            <div class="border relative border-gray-300 dark:border-gray-600 rounded-lg p-4 my-2 mr-4">
                                <span class="absolute top-1 left-1 bg-gray-300 text-gray-800 dark:bg-slate-200 dark:text-slate-800 px-2 py-1 rounded-full text-xs font-semibold m-1">
                                    {{ $review->project->category->category_name }}
                                </span>

                                <h3 class="text-lg font-semibold mt-6 mb-2">{{ $review->project->title }}</h3>
                                <p class="text-gray-700 dark:text-gray-300">{{ $review->description }}</p>
                                <div class="flex justify-start items-center gap-2 just mt-2">
                                    <div class="flex items-center justify-center">
                                        <p class="text-sm font-medium text-slate-500">{{ $review->rating }}</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 dark:text-yellow-400 text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-slate-500">{{ $review->created_at->diffForHumans() }}</p>
                                </div>

                            </div>
                            @endforeach
                            @endif
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </main>

    <x-footer-custom></x-footer-custom>

</x-app-layout>
<x-app-layout>

    <x-slot name="title">
        Client Profile
    </x-slot>

    <x-nav-custom></x-nav-custom>

    <main class="py-28">
        @include('components.flash-alert')

        <div class="max-w-7xl mx-auto sm:p-6 lg:p-8">
            <div class="mx-auto p-4">
                <div class="border-2 border-gray-200 mx-auto rounded-lg shadow-lg overflow-hidden  dark:text-slate-200 bg-slate-200 dark:bg-slate-700">
                    <div class="flex justify-center flex-col items-center px-6 py-4 relative">
                        <div class="absolute top-2 right-2">
                            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                                <button @click="open = !open" class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                    <span class="">Switch</span>
                                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-10 right-0 md:w-60 mt-2 origin-top-right">
                                    <div class="px-2 pt-2 pb-4 bg-white rounded-md shadow-lg dark:bg-gray-700">
                                        <div class="z-10 flex flex-col">

                                            <a href="/dashboard/client" class="flex rounded-lg bg-transparent p-2 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                                <div class="bg-blue-500 text-white rounded-lg p-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none">
                                                        <path d="M13 20V18C13 15.2386 10.7614 13 8 13C5.23858 13 3 15.2386 3 18V20H13ZM13 20H21V19C21 16.0545 18.7614 14 16 14C14.5867 14 13.3103 14.6255 12.4009 15.6311M11 7C11 8.65685 9.65685 10 8 10C6.34315 10 5 8.65685 5 7C5 5.34315 6.34315 4 8 4C9.65685 4 11 5.34315 11 7ZM18 9C18 10.1046 17.1046 11 16 11C14.8954 11 14 10.1046 14 9C14 7.89543 14.8954 7 16 7C17.1046 7 18 7.89543 18 9Z" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                                <div class="ml-3">
                                                    <p class="font-semibold text-left">Client</p>
                                                    <p class="text-sm">Client profile</p>
                                                </div>
                                            </a>

                                            <a href="/dashboard/freelancer" class="flex row items-end rounded-lg bg-transparent p-2 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                                <div class="bg-teal-500 text-white rounded-lg p-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none">
                                                        <path d="M4 12H3V8C3 6.89543 3.89543 6 5 6H9M4 12V18C4 19.1046 4.89543 20 6 20H18C19.1046 20 20 19.1046 20 18V12M4 12H10M20 12H21V8C21 6.89543 20.1046 6 19 6H15M20 12H14M14 12V10H10V12M14 12V14H10V12M9 6V5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V6M9 6H15" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div class="ml-3">
                                                    <p class="font-semibold text-left">Freelancer</p>
                                                    <p class="text-sm">Freelancer profile</p>
                                                </div>
                                            </a>

                                            <a href="/dashboard" class="flex row items-end rounded-lg bg-transparent p-2 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                                <div class="bg-teal-500 text-white rounded-lg p-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none">
                                                        <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div class="ml-3">
                                                    <p class="font-semibold text-left">User profile</p>
                                                    <p class="text-sm">User profile</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(Auth::user()->picture)
                        <!-- <img src="{{ Storage::url(Auth::user()->picture) }}" alt="Profile Picture" class="h-24 w-24 object-cover border-2 border-slate-400 rounded-full mx-auto mb-1 sm:mb-0 sm:mr-1 sm:ml-0"> -->
                        <img src="{{ Storage::disk('s3')->url(Auth::user()->picture) }}" alt="Profile Picture" class="h-24 w-24 object-cover border-2 border-slate-400 rounded-full mx-auto mb-1 sm:mb-0 sm:mr-1 sm:ml-0">

                        @else
                        <img src="https://placehold.co/128" alt="Profile Picture" class="h-24 w-24 object-cover border-2 border-slate-400 rounded-full mx-auto mb-1 sm:mb-0 sm:mr-1 sm:ml-0">
                        @endif
                        <div class="text-center ">
                            <p class="text-xl font-semibold">{{$userData['name']}}</p>
                            <p class="text-sm font-medium">{{$userData['email']}}</p>
                            <!-- <div class="mt-4 absolute top-0 left-2">
                                <a href="/profile" class="text-xs font-semibold bg-gray-300 dark:bg-slate-200 dark:text-slate-800 rounded-full px-4 py-2 leading-none inline-block text-gray-700 mr-2">Edit Profile</a>
                            </div> -->
                        </div>
                    </div>

                    <!-- projects -->
                    <div class="border-t border-gray-400 px-6 py-4">
                        <div class="flex justify-between mb-4">
                            <h2 class="text-lg font-semibold mb-2">Projects</h2>
                            <a href="/project" class="p-2 text-slate-200 dark:text-slate-200 bg-blue-600 rounded-lg cursor-pointer">
                                Add a project
                            </a>
                        </div>
                        <div class="overflow-y-auto max-h-80">
                            @if($projectsData->isEmpty())
                            <p class="text-red-500">No projects found.</p>
                            @else
                            @foreach($projectsData as $projectData)
                            <div class="border relative border-gray-300 dark:border-gray-600 rounded-lg p-4 my-2 mr-4">
                                <span class="absolute top-1 left-1 bg-gray-300 text-gray-800 dark:bg-slate-200 dark:text-slate-800 px-2 py-1 rounded-full text-xs font-semibold m-1">
                                    {{$projectData->category->category_name}}
                                </span>
                                <a href="{{ route('project.edit', $projectData->id) }}" class="absolute bottom-1 right-1 p-2 bg-blue-600 rounded-full cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#ffff">
                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                @if($projectData->status == true)
                                <span class="absolute right-1 top-1 p-2 bg-green-500 rounded-full"></span>
                                @else
                                <span class="absolute right-1 top-1 p-2 bg-red-500 rounded-full"></span>
                                @endif
                                <h3 class="text-lg font-semibold mt-6 mb-2">{{$projectData->title}}</h3>
                                <p class="text-gray-700 dark:text-gray-300">{{$projectData->description}}</p>
                                <div class="flex justify-between mt-2">
                                    <p class="text-slate-500">Price: ${{$projectData->price}}</p>
                                </div>
                                <p class="text-slate-500 mt-1">Created {{ $projectData->created_at->diffForHumans() }}</p>

                                <x-custom-modal-button class="bg-red-600">
                                    Delete
                                </x-custom-modal-button>
                            </div>
                            <!-- modal -->
                            <x-custom-modal title="Delete the project" message="Would you like to delete this project? The process cannot be undone." fill="fill-red-500">
                                <form action="{{route('project.destroy', $projectData->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-confirmation-button color="bg-red-600">
                                        Delete
                                    </x-confirmation-button>
                                </form>

                                <button x-data x-on:click="$dispatch('close-modal')" class="p-2 mt-2 text-light-800 dark:text-slate-200 bg-slate-300 dark:bg-slate-800 rounded-lg cursor-pointer">Cancel</button>
                            </x-custom-modal>
                            @endforeach
                            @endif

                        </div>

                    </div>

                    <!-- offers -->
                    <div class="border-t border-gray-400 px-6 py-4">
                        <h2 class="text-lg font-semibold mb-2">Received Offers & Results</h2>
                        <div class="flex gap-2">
                            <div class="flex items-center justify-center relative">
                                <span class="absolute bottom-6 right-0 text-sm rounded-full z-0 px-1 bg-blue-500 text-white">{{ $offersCount ?? "0" }}</span>
                                <a class="border p-1 border-slate-800 dark:border-slate-400 rounded-lg" href="/offers/received">Received offers</a>
                            </div>
                            <div class="flex items-center justify-center relative">
                                <span class="absolute bottom-6 right-0 text-sm rounded-full z-0 px-1 bg-blue-500 text-white">{{ $resultsCount ?? "0" }}</span>
                                <a class="border p-1 border-slate-800 dark:border-slate-400 rounded-lg" href="/results">Received results</a>
                            </div>
                        </div>
                    </div>

                    <!-- reviews Left -->
                    <div class="border-t border-gray-400 px-6 py-4">
                        <h2 class="text-lg font-semibold mb-2">Left Reviews</h2>

                        <div class="overflow-y-auto max-h-80">

                            @if($reviewsLeft->isEmpty())
                            <p class="text-red-500">No reviews left.</p>
                            @else
                            @foreach($reviewsLeft as $reviewLeft)
                            <div class="border relative border-gray-300 dark:border-gray-600 rounded-lg p-4 my-2 mr-4">
                                <span class="absolute top-1 left-1 bg-gray-300 text-gray-800 dark:bg-slate-200 dark:text-slate-800 px-2 py-1 rounded-full text-xs font-semibold m-1">
                                    Programming
                                </span>
                                <a href="{{ route('review.edit', $reviewLeft->id ) }}" class="absolute bottom-1 right-1 p-2 bg-blue-600 rounded-full cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#ffff">
                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>

                                <h3 class="text-lg font-semibold mt-6 mb-2">{{ $reviewLeft->project->title }}</h3>
                                <p class="text-gray-700 dark:text-gray-300">{{ $reviewLeft->description }}</p>
                                <div class="flex justify-start items-center gap-2 just mt-2">
                                    <div class="flex items-center justify-center">
                                        <p class="text-sm font-medium text-slate-500">{{ $reviewLeft->rating }}</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 dark:text-yellow-400 text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-slate-500">{{ $reviewLeft->created_at->diffForHumans() }}</p>
                                </div>

                                <x-custom-modal-button class="bg-red-600">
                                    Delete
                                </x-custom-modal-button>
                            </div>

                            <!-- modal -->
                            <x-custom-modal title="Delete the review" message="Would you like to delete this review? The process cannot be undone." fill="fill-red-500">
                                <form action="{{route('review.destroy', $reviewLeft->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="p-2 mt-2 text-slate-200 dark:text-slate-200 bg-red-600 rounded-lg cursor-pointer">Delete</button>
                                </form>

                                <button x-data x-on:click="$dispatch('close-modal')" class="p-2 mt-2 text-light-800 dark:text-slate-200 bg-slate-300 dark:bg-slate-800 rounded-lg cursor-pointer">Cancel</button>
                            </x-custom-modal>
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
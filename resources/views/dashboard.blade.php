<x-app-layout>

    <x-slot name="title">
        Profile
    </x-slot>

    <x-nav-custom></x-nav-custom>

    <main class="py-24">
        <div class="max-w-7xl mx-auto sm:p-6 lg:p-8">
            <div class="mx-auto p-4">
                <div class="border-2 border-gray-200 mx-auto rounded-lg shadow-lg overflow-hidden  dark:text-slate-200 bg-slate-200 dark:bg-slate-700">
                    <div class="sm:flex sm:items-center px-6 py-4 relative">
                        <img src="https://via.placeholder.com/150" alt="Profile Picture" class="h-24 w-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0 sm:float-left">
                        <div class="text-center sm:text-left">
                            <p class="text-xl font-semibold">{{$userData['name']}}</p>
                            <p class="text-sm font-medium">{{$userData['email']}}</p>
                            <p class="text-sm font-medium">Middle of, Nowhere - 04:20am</p>
                            <div class="mt-4 absolute top-0 right-0">
                                <a href="/profile" class="text-xs font-semibold bg-gray-300 dark:bg-slate-200 dark:text-slate-800 rounded-full px-4 py-2 leading-none inline-block text-gray-700 mr-2">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="border-t relative w-full border-b border-gray-400">
                        <a href="{{ route('freelancer.edit', $freelancerData['freelancer_id']) }}" class="absolute top-1 right-1 p-2 bg-blue-600 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#ffff">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <div class="p-4 max-w-lg mx-auto  flex justify-between items-center">
                            <div class="text-center">
                                <p class="text-lg font-semibold">Price</p>
                                <p class="text-sm font-medium text-slate-500">${{$freelancerData['hourly_rate'] ?? " -"}} / hour</p>
                            </div>
                            <div class="text-center">
                                <p class="text-lg font-semibold">Rating</p>
                                <div class="flex items-center justify-center">
                                    <p class="text-sm font-medium text-slate-500">4.5</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 dark:text-yellow-400 text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-center ">
                                <p class="text-lg font-semibold">Availability</p>
                                <p class="text-sm font-medium text-slate-500">{{$freelancerData['availability'] ? "Available" : 'Unavailable'}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h2 class="text-lg font-semibold mb-4">Bio</h2>
                        <p class="leading-relaxed text-slate-500">
                            @if(isset($userData['bio']))
                            {{$userData['bio']}}
                            @else
                        <p class="text-red-500">No bio found.</p>
                        @endIf
                        </p>
                    </div>
                    <div class="border-t border-gray-400 px-6 py-4">
                        <p class="text-lg font-semibold mb-2">Phone</p>
                        <p class="text-slate-500">
                            @if(isset($userData['phone']))
                            {{$userData['phone']}}
                            @else
                        <p class="text-red-500">No phone found.</p>

                        @endif
                        </p>
                    </div>

                    <!-- skills -->
                    <div class="border-t border-gray-400 px-6 py-4 relative">
                        <h2 class="text-lg font-semibold mb-2">Skills</h2>
                        <div class="flex flex-wrap">
                            @if($freelancerSkills->isEmpty())
                            <p class="text-red-500">No skills found.</p>
                            @else

                            @foreach ($freelancerSkills as $freelancerSkill)
                            <a href="{{ route('skill.destroy', $freelancerSkill->skill->id) }}" class="bg-gray-200 text-gray-800 dark:bg-slate-200 dark:text-slate-800 px-2 py-1 rounded-full text-xs font-semibold m-1">
                                {{ $freelancerSkill->skill->skill_name }}
                            </a>
                            @endforeach
                            @endif
                        </div>
                        <a href="/skill" class="absolute top-1 right-1 p-2 bg-blue-600 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#ffff">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
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
                                @if($projectData->status == 'active')
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
                                <form action="{{route('project.destroy', $projectData->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="p-2 mt-2 text-slate-200 dark:text-slate-200 bg-red-600 rounded-lg cursor-pointer">Delete</button>
                                </form>
                            </div>
                            @endforeach
                            @endif
                        </div>

                    </div>

                    <!-- offers -->
                    <div class="border-t border-gray-400 px-6 py-4">
                        <h2 class="text-lg font-semibold mb-2">Offers, Responses & Results</h2>
                        <div class="flex gap-2">
                            <a class="border p-1 rounded-lg" href="/offers/received">Received offers</a>
                            <a class="border p-1 rounded-lg" href="/offers/accepted">Accepted offers</a>
                            <a class="border p-1 rounded-lg" href="/results">Received results</a>
                        </div>
                    </div>

                    <!-- Received reviews -->
                    <div class="border-t border-gray-400 px-6 py-4">
                        <h2 class="text-lg font-semibold mb-2">Received Reviews</h2>

                        <div class="overflow-y-auto max-h-80">

                            @foreach($reviewsReceived as $reviewReceived)
                            <div class="border relative border-gray-300 dark:border-gray-600 rounded-lg p-4 my-2 mr-4">
                                <span class="absolute top-1 left-1 bg-gray-300 text-gray-800 dark:bg-slate-200 dark:text-slate-800 px-2 py-1 rounded-full text-xs font-semibold m-1">
                                    {{ $reviewReceived->project->category->category_name }}
                                </span>

                                <h3 class="text-lg font-semibold mt-6 mb-2">{{ $reviewReceived->project->title }}</h3>
                                <p class="text-gray-700 dark:text-gray-300">{{ $reviewReceived->description }}</p>
                                <div class="flex justify-start items-center gap-2 just mt-2">
                                    <div class="flex items-center justify-center">
                                        <p class="text-sm font-medium text-slate-500">{{ $reviewReceived->rating }}</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 dark:text-yellow-400 text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                        </svg>
                                    </div>
                                    <p class="text-slate-500">{{ $reviewReceived->created_at->diffForHumans() }}</p>
                                </div>

                            </div>
                            @endforeach
                        </div>

                    </div>

                    <!-- Left reivews -->
                    <div class="border-t border-gray-400 px-6 py-4">
                        <h2 class="text-lg font-semibold mb-2">Left Reviews</h2>

                        <div class="overflow-y-auto max-h-80">

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
                                <form action="{{route('review.destroy', $reviewLeft->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="p-2 mt-2 text-slate-200 dark:text-slate-200 bg-red-600 rounded-lg cursor-pointer">Delete</button>
                                </form>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </main>

    <x-footer-custom></x-footer-custom>
</x-app-layout>
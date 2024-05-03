<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mx-auto px-4 py-8">
                <div class="mx-auto rounded-lg shadow-lg overflow-hidden dark:bg-slate-800 dark:text-slate-200 bg-white text-slate-800">
                    <div class="sm:flex sm:items-center px-6 py-4 relative">
                        <img src="https://via.placeholder.com/150" alt="Profile Picture" class="h-24 w-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0 sm:float-left">
                        <div class="text-center sm:text-left">
                            <p class="text-xl font-semibold">John Doe</p>
                            <p class="text-sm font-medium">Web Developer</p>
                            <p class="text-sm font-medium">Sibiu, Romania - 9:40pm</p>
                            <div class="mt-4 absolute top-0 right-0">
                                <a href="#" class="text-xs font-semibold bg-gray-200 dark:bg-slate-200 dark:text-slate-800 rounded-full px-4 py-2 leading-none inline-block text-gray-700 mr-2">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="border-t w-full border-b border-gray-200">
                        <div class="p-4 max-w-lg mx-auto  flex justify-between items-center">
                            <div class="text-center">
                                <p class="text-lg font-semibold">Price</p>
                                <p class="text-sm font-medium text-slate-500">$25 / hour</p>
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
                                <p class="text-sm font-medium text-slate-500">Available</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h2 class="text-lg font-semibold mb-4">Bio</h2>
                        <p class="leading-relaxed text-slate-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="border-t border-gray-200 px-6 py-4">
                        <p class="text-lg font-semibold mb-2">Phone Number</p>
                        <p class="text-slate-500">123-456-7890</p>
                    </div>

                    <!-- skills -->
                    <div class="border-t border-gray-200 px-6 py-4 relative">
                        <h2 class="text-lg font-semibold mb-2">Skills</h2>
                        <div class="flex flex-wrap">
                            <span class="bg-gray-200 text-gray-800 dark:bg-slate-200 dark:text-slate-800 px-2 py-1 rounded-full text-xs font-semibold m-1">HTML</span>
                            <span class="bg-gray-200 text-gray-800 dark:bg-slate-200 dark:text-slate-800 px-2 py-1 rounded-full text-xs font-semibold m-1">CSS</span>
                            <span class="bg-gray-200 text-gray-800 dark:bg-slate-200 dark:text-slate-800 px-2 py-1 rounded-full text-xs font-semibold m-1">JavaScript</span>
                            <span class="bg-gray-200 text-gray-800 dark:bg-slate-200 dark:text-slate-800 px-2 py-1 rounded-full text-xs font-semibold m-1">React</span>
                            <span class="bg-gray-200 text-gray-800 dark:bg-slate-200 dark:text-slate-800 px-2 py-1 rounded-full text-xs font-semibold m-1">Tailwind CSS</span>
                            <span class="bg-gray-200 text-gray-800 dark:bg-slate-200 dark:text-slate-800 px-2 py-1 rounded-full text-xs font-semibold m-1">Node.js</span>
                            <span class="bg-gray-200 text-gray-800 dark:bg-slate-200 dark:text-slate-800 px-2 py-1 rounded-full text-xs font-semibold m-1">Express.js</span>
                        </div>
                        <span class="absolute top-1 right-1 p-2 bg-blue-600 rounded-full cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#ffff">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </div>

                    <!-- projects -->
                    <div class="border-t border-gray-200 dark:border-gray-600 px-6 py-4">
                        <div class="flex justify-between mb-4">
                            <h2 class="text-lg font-semibold mb-2">Projects</h2>
                            <span class="p-2 text-slate-200 dark:text-slate-200 bg-blue-600 rounded-full cursor-pointer">
                                Add a project
                            </span>
                        </div>
                        <div class="overflow-y-auto max-h-80">
                            <div class="border relative border-gray-300 dark:border-gray-600 rounded-lg p-4 my-2 mr-4">
                                <span class="absolute bottom-1 right-1 p-2 bg-blue-600 rounded-full cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#ffff">
                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <span class="absolute right-1 top-1 p-2 bg-green-500 rounded-full"></span>
                                <h3 class="text-lg font-semibold mb-2">Project 1</h3>
                                <p class="text-gray-700 dark:text-gray-300">Description of Project 1</p>
                                <div class="flex justify-between mt-2">
                                    <p class="text-slate-500">Price: $500</p>
                                </div>
                                <p class="text-slate-500 mt-1">Created 2 days ago</p>
                            </div>
                            <div class="border relative border-gray-300 dark:border-gray-600 rounded-lg p-4 my-2 mr-4">
                                <span class="absolute bottom-1 right-1 p-2 bg-blue-600 rounded-full cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#ffff">
                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <span class="absolute right-1 top-1 p-2 bg-green-500 rounded-full"></span>
                                <h3 class="text-lg font-semibold mb-2">Project 1</h3>
                                <p class="text-gray-700 dark:text-gray-300">Description of Project 1</p>
                                <div class="flex justify-between mt-2">
                                    <p class="text-slate-500">Price: $500</p>
                                </div>
                                <p class="text-slate-500 mt-1">Created 2 days ago</p>
                            </div>

                            <div class="border relative border-gray-300 dark:border-gray-600 rounded-lg p-4 my-2 mr-4">
                                <span class="absolute bottom-1 right-1 p-2 bg-blue-600 rounded-full cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#ffff">
                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <span class="absolute right-1 top-1 p-2 bg-green-500 rounded-full"></span>
                                <h3 class="text-lg font-semibold mb-2">Project 1</h3>
                                <p class="text-gray-700 dark:text-gray-300">Description of Project 1</p>
                                <div class="flex justify-between mt-2">
                                    <p class="text-slate-500">Price: $500</p>
                                </div>
                                <p class="text-slate-500 mt-1">Created 2 days ago</p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-nav-custom></x-nav-custom>

    <main class="py-24">
        <div class="max-w-7xl mx-auto sm:p-6 lg:p-8">
            <div class="mx-auto p-4">
                <div class="border-2 relative border-gray-200 mx-auto rounded-lg shadow-lg overflow-hidden  dark:text-slate-200 bg-slate-200 dark:bg-slate-700">
                    <div class="absolute top-3 right-3">
                        <div @click.away="open = false" class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                <span class="">Contact</span>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-10 right-0 w-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right">
                                <div class="px-2 pt-2 pb-4 bg-white rounded-md shadow-lg dark:bg-gray-700">
                                    <div class="z-10 flex flex-col">

                                        <button class="flex rounded-lg bg-transparent p-2 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                            <div class="bg-blue-500 text-white rounded-lg p-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="font-semibold text-left">Email</p>
                                                <p class="text-sm">victor@mail.com</p>
                                            </div>
                                        </button>

                                        <button class="flex row items-end rounded-lg bg-transparent p-2 dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" @click="toggleDarkMode">
                                            <div class="bg-teal-500 text-white rounded-lg p-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="font-semibold text-left">Phone</p>
                                                <p class="text-sm">123456789</p>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center px-6 py-4">
                        <img src="https://via.placeholder.com/150" alt="Profile Picture" class="h-32 w-32 rounded-full mx-auto mb-3">
                        <div class="text-center">
                            <p class="text-xl font-semibold">Victor</p>
                            <p class="text-sm font-medium">Web Developer</p>
                            <p class="text-sm font-medium">Middle of, Nowhere - 04:20am</p>
                        </div>
                    </div>
                    <div class="border-t relative w-full border-b border-gray-400">
                        <div class="p-4 max-w-lg mx-auto  flex justify-between items-center">
                            <div class="text-center">
                                <p class="text-lg font-semibold">Price</p>
                                <p class="text-sm font-medium text-slate-500">$20 / hour</p>
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

                    <div class="p-3 flex flex-col items-center justify-center">
                        <h2 class="text-lg font-semibold mb-1">Bio</h2>
                        <p class="leading-relaxed text-slate-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium iste voluptatum cumque! Omnis suscipit officiis harum reprehenderit veritatis sapiente illum. Iste a vitae quae rerum quibusdam provident, dolor suscipit culpa dolorum placeat nisi inventore excepturi vero laboriosam error dolore? Expedita veniam eos adipisci quasi error sunt! Tenetur maiores ratione nisi soluta eius unde dolores quis pariatur blanditiis officiis neque, voluptate explicabo repellat quisquam quasi
                        </p>
                    </div>

                    <div class="p-3 border-t flex flex-col items-center justify-center">

                    </div>

                    <!-- skills -->
                    <div class="border-t border-gray-400 px-6 py-4 relative">
                        <h2 class="text-lg font-semibold mb-2">Skills</h2>
                        <div class="flex flex-wrap">
                            <a href="" class="bg-gray-200 text-gray-800 dark:bg-slate-200 dark:text-slate-800 px-2 py-1 rounded-full text-xs font-semibold m-1">
                                begit
                            </a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <x-footer-custom></x-footer-custom>

</x-app-layout>
<x-app-layout>
    <x-slot name="title">
        Edit
    </x-slot>
    <div class="h-screen relative flex justify-center items-center ">

        <span onclick="history.back()" class="absolute top-2 left-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" width="40px" height="40px" viewBox="0 0 32 32" version="1.1">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                    <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-414.000000, -985.000000)" fill="#2563eb">
                        <path d="M436,1002 L425.414,1002 L429.535,1006.12 C429.926,1006.51 429.926,1007.15 429.535,1007.54 C429.145,1007.93 428.512,1007.93 428.121,1007.54 L422.465,1001.879 C422.225,1001.639 422.15,1001.311 422.205,1001 C422.15,1000.689 422.225,1000.361 422.465,1000.121 L428.121,994.465 C428.512,994.074 429.145,994.074 429.535,994.465 C429.926,994.855 429.926,995.488 429.535,995.879 L425.414,1000 L436,1000 C436.553,1000 437,1000.448 437,1001 C437,1001.553 436.553,1002 436,1002 L436,1002 Z M442,985 L418,985 C415.791,985 414,986.791 414,989 L414,1013 C414,1015.21 415.791,1017 418,1017 L442,1017 C444.209,1017 446,1015.21 446,1013 L446,989 C446,986.791 444.209,985 442,985 L442,985 Z" id="arrow-left-square" sketch:type="MSShapeGroup">

                        </path>
                    </g>
                </g>
            </svg>
        </span>

        <div class="mx-auto container max-w-5xl bg-slate-200 dark:bg-slate-900 rounded-lg shadow-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-slate-200 mb-4">Edit Freelancer</h2>
                <form action="{{ route('freelancer.update', ['id' => $freelancer->freelancer_id]) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-4">
                        <label for="rate" class="block text-sm font-medium text-gray-700 dark:text-slate-300">Hourly Rate</label>
                        <input type="number" value="{{ $freelancer->hourly_rate }}" id="rate" name="rate" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:bg-slate-900 dark:border-gray-600 dark:text-slate-200 rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="niche" class="block text-sm font-medium text-gray-700 dark:text-slate-300">Your niche</label>
                        <input type="text" value="{{ $freelancer->niche }}" id="niche" name="niche" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:bg-slate-900 dark:border-gray-600 dark:text-slate-200 rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="bio" class="block text-sm font-medium text-gray-700 dark:text-slate-300">Bio</label>
                        <textarea type="text" id="bio" name="bio" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:bg-slate-900 dark:border-gray-600 dark:text-slate-200 rounded-md">{{ $freelancer->bio }}</textarea>
                    </div>

                    <div class="mb-4 flex flex-col">
                        <span class="text-sm font-medium text-gray-700 dark:text-slate-300 mb-2">Availability</span>
                        <div class="flex items-center">
                            <div class="flex items-center pr-2 ">
                                <input name="availability" id="default-checkbox" type="radio" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Available</label>
                            </div>
                            <div class="flex items-center p-2">
                                <input name="availability" id="default-radio" type="radio" value="0" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checked-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Unavailable</label>
                            </div>
                        </div>

                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Edit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
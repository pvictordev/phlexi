<x-app-layout>
    <x-slot name="title">
        Accept
    </x-slot>
    <div class="h-screen relative flex justify-center items-center ">
        <x-back-link></x-back-link>

        <div class="mx-auto max-w-2xl container bg-slate-200 dark:bg-slate-900 rounded-lg shadow-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-slate-200 mb-4">Woud you like to accept this result ?</h2>
                <form method="POST">
                    @csrf
                    @method('patch')

                    <div class="flex items-center space-x-4">
                        <!-- Accept Radio Button -->
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-blue-500" name="choice" value="1">
                            <span class="ml-2 text-slate-800 dark:text-slate-200">Accept</span>
                        </label>

                        <!-- Reject Radio Button -->
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-red-500" name="choice" value="0">
                            <span class="ml-2 text-slate-800 dark:text-slate-200">Reject</span>
                        </label>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-green-700 active:bg-green-700 focus:outline-none focus:border-green-700 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
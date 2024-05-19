<x-app-layout>
    <x-slot name="title">
        Create
    </x-slot>
    <div class="h-screen relative flex justify-center items-center ">
        <x-back-link></x-back-link>
        <div class="mx-auto max-w-2xl container bg-slate-200 dark:bg-slate-900 rounded-lg shadow-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-slate-200 mb-4">Add a skill</h2>
                <form method="POST">
                    @csrf
                    @method('post')
                    <div class="mb-4">
                        <label for="skill_id" class="block text-sm font-medium text-gray-700 dark:text-slate-300">Skill</label>
                        <select id="skill_id" name="skill_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white dark:bg-slate-900 dark:border-gray-600 dark:text-slate-200 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach($skills as $skill)
                            <option value="{{ $skill->id }}">{{ $skill->skill_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-green-700 active:bg-green-700 focus:outline-none focus:border-green-700 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
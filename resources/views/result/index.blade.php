<x-app-layout>
    <x-slot name="title">
        Create
    </x-slot>
    <div class="h-screen relative flex justify-center items-center ">
        <x-back-link></x-back-link>

        <div class="mx-auto relative max-w-2xl container flex flex-col gap-2">
            @foreach ($results as $result)
            <div class="min-h-16 flex items-center  bg-slate-200 dark:bg-slate-900 rounded-lg shadow-lg overflow-hidden">
                <p class="text-slate-400 p-2 mb-10 dark:slate-800">{{ $result->description }}</p>
                <a href="{{ route('result.edit', $result->id )}}" class="px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-green-700 active:bg-green-700 focus:outline-none focus:border-green-700 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150" href="">Accept result</a>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
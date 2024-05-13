<x-app-layout>
    <x-slot name="title">
        Create
    </x-slot>
    <div class="h-screen relative flex justify-center items-center ">
        <x-back-link></x-back-link>

        <div class="mx-auto relative max-w-2xl container flex flex-col gap-2">
            @foreach ($results as $result)
            <div class="min-h-16 flex items-center  bg-slate-200 dark:bg-slate-900 rounded-lg shadow-lg overflow-hidden">
                <a href="{{ route('result.edit', $result->id )}}" class="absolute top-2 right-2 p-2 bg-green-500 rounded-lg">
                    accept the result
                </a>
                <p class="text-slate-400 p-2 mb-10 dark:slate-800">{{ $result->description }}</p>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
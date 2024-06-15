<x-app-layout>
    <x-slot name="title">
        Results
    </x-slot>

    <div class="h-screen flex flex-col justify-center items-center">
        <x-back-link></x-back-link>

        <div class="mb-5 flex justify-center flex-col items-center">
            <h2 class="text-2xl text-slate-800 dark:text-slate-200">Results</h2>
            <p class="text-slate-400">Hurry up! you have some projects done.</p>
        </div>

        <div class="mx-auto relative max-w-2xl container overflow-y-auto max-h-52  flex flex-col gap-2">
            @if($results->isEmpty())
            <span class="min-h-24 text-red-500 text-xl flex items-center flex-col">Currently you have no results.</span>
            @else
            @foreach ($results as $result)
            <div class="min-h-24 flex items-start p-2 flex-col bg-slate-200 dark:bg-slate-900 rounded-lg shadow-lg overflow-hidden">
                <h2 class="text-slate-800 text-xl px-2 py-1 dark:slate-800">{{ $result->project->title }}</h2>

                <p class="text-slate-500 p-2 dark:slate-800">Result submitted by
                    <a class="font-bold hover:underline" href="/freelancers/{{ $result->freelancer_id }}">
                        this
                    </a>
                    user
                </p>

                <p class="text-slate-500 p-2 dark:slate-800">{{ $result->description }}</p>

                <x-custom-modal-button class="bg-green-600">
                    Accept
                </x-custom-modal-button>
            </div>

            <x-custom-modal title="Accept the result" message="Would you like to accept this result? The process cannot be undone." fill="fill-green-500">
                <form action="{{ route('result.edit', $result->id )}}" method="POST">
                    @csrf
                    @method('patch')
                    <input type="hidden" value="1" name="choice">
                    <button class="p-2 mt-2 text-slate-200 dark:text-slate-200 bg-green-600 rounded-lg cursor-pointer">Accept</button>
                </form>

                <button x-data x-on:click="$dispatch('close-modal')" class="p-2 mt-2 text-light-800 dark:text-slate-200 bg-slate-300 dark:bg-slate-800 rounded-lg cursor-pointer">Cancel</button>
            </x-custom-modal>
            @endforeach
            @endif

        </div>
    </div>
</x-app-layout>
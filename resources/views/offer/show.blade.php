<x-app-layout>
    <x-slot name="title">
        Offers Received
    </x-slot>

    <div class="h-screen relative flex flex-col justify-center items-center">
        <x-back-link></x-back-link>

        <div class="mb-5 flex justify-center flex-col items-center">
            <h2 class="text-2xl text-slate-800 dark:text-slate-200">Offers Received</h2>
            <p class="text-slate-400">Hurry up! you have some offers to work on.</p>
        </div>

        <div class="mx-auto p-6 relative max-w-2xl overflow-y-auto h-52 container flex flex-col gap-2">
            @if($offers->isEmpty())
            <span class="h-32 text-red-500 text-xl flex items-center flex-col">Currently you have no offers.</span>
            @else
            @foreach ($offers as $offer)
            <div class="flex items-start p-2 flex-col bg-slate-200 dark:bg-slate-900 rounded-lg shadow-lg">
                <h2 class="text-slate-800 px-2 py-1 dark:slate-800">{{ $offer->project->title }}</h2>
                <p class="text-slate-400 p-2 dark:slate-800">{{ $offer->description }}</p>
                <x-custom-modal-button class="bg-green-600">
                    Accept
                </x-custom-modal-button>
            </div>

            <x-custom-modal title="Accept the offers" message="Would you like to accept this offer? The process cannot be undone." fill="fill-green-500">
                <form action="{{route('offer.edit', $offer->id) }}" method="POST">
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
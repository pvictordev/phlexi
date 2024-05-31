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

        <div class="mx-auto relative max-w-2xl overflow-y-auto max-h-52 container flex flex-col gap-2">
            @if($offers->isEmpty())
            <span class="min-h-24 text-red-500 text-xl flex items-center flex-col">Currently you have no offers.</span>
            @else
            @foreach ($offers as $offer)
            <div class="min-h-24 flex items-start flex-col bg-slate-200 dark:bg-slate-900 rounded-lg shadow-lg overflow-hidden">
                <p class="text-slate-400 p-2 dark:slate-800">{{ $offer->description }}</p>
                <a href="{{ route('offer.edit', [$offer->id]) }}" class="p-2 m-2 bg-green-500 rounded-lg">
                    Accept
                </a>
            </div>
            @endforeach

            @endif
        </div>
    </div>
</x-app-layout>
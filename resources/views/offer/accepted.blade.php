<x-app-layout>
    <x-slot name="title">
        Offers Accepted
    </x-slot>

    <div class="h-screen relative flex flex-col justify-center items-center">
        <x-back-link></x-back-link>

        <div class="mb-5 flex justify-center flex-col items-center">
            <h2 class="text-2xl text-slate-800 dark:text-slate-200">Offers Accepted</h2>
            <p class="text-slate-400">Hurry up! you have some projects to work on.</p>
        </div>

        <div class="mx-auto p-6 relative max-w-2xl overflow-y-auto h-52 container flex flex-col gap-2">
            @if($acceptedOffers->isEmpty())
            <span class="h-32 text-red-500 text-xl flex items-center flex-col">Currently you have no accepted offers.</span>
            @else
            @foreach ($acceptedOffers as $acceptedOffer)
            <div class="flex items-start flex-col bg-slate-200 dark:bg-slate-900 rounded-lg shadow-lg">
                <h2 class="text-slate-800 px-2 py-1 dark:slate-800">{{ $acceptedOffer->project->title }}</h2>
                <p class=" text-slate-400 p-2 dark:slate-800">{{ $acceptedOffer->description }}</p>
                <a href=" {{ route('result.create', $acceptedOffer->id) }}" class="p-2 m-2 text-white bg-green-500 rounded-lg">
                    Submit a result
                </a>
            </div>

            @endforeach
            @endif
        </div>
    </div>
</x-app-layout>
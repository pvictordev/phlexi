@props(['class' => ''])
<button x-data x-on:click="$dispatch('open-modal')" class="p-2 mt-2 text-slate-200 dark:text-slate-200 rounded-lg cursor-pointer {{ $class }}">
    {{ $slot }}
</button>
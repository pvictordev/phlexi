<x-app-layout>

    <x-slot name="title">
        Edit
    </x-slot>

    <x-nav-custom></x-nav-custom>
    <div class="py-32">
        <div class="max-w-7xl mx-auto p-4 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-slate-200 dark:bg-gray-900 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-slate-200 dark:bg-gray-900 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-slate-200 dark:bg-gray-900 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
    <x-footer-custom></x-footer-custom>
</x-app-layout>
<x-guest-layout>
    <x-slot name="title">
        Register
    </x-slot>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div x-data="{ show: false }" class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <div class="relative">
                <span class="absolute right-2 top-2 cursor-pointer">
                    <svg @click="show = !show" :class="{'hidden': !show, 'block': show }" xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="none" class="stroke-current text-black dark:text-white">
                        <path d="M12 16.01C14.2091 16.01 16 14.2191 16 12.01C16 9.80087 14.2091 8.01001 12 8.01001C9.79086 8.01001 8 9.80087 8 12.01C8 14.2191 9.79086 16.01 12 16.01Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 11.98C8.09 1.31996 15.91 1.32996 22 11.98" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M22 12.01C15.91 22.67 8.09 22.66 2 12.01" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <svg @click="show = !show" :class="{'block': !show, 'hidden': show}" xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="none" class="stroke-current text-black dark:text-white">
                        <path d="M14.83 9.17999C14.2706 8.61995 13.5576 8.23846 12.7813 8.08386C12.0049 7.92926 11.2002 8.00851 10.4689 8.31152C9.73758 8.61453 9.11264 9.12769 8.67316 9.78607C8.23367 10.4444 7.99938 11.2184 8 12.01C7.99916 13.0663 8.41619 14.08 9.16004 14.83" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 16.01C13.0609 16.01  14.0783 15.5886 14.8284 14.8384C15.5786 14.0883 16 13.0709 16 12.01" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17.61 6.39004L6.38 17.62C4.6208 15.9966 3.14099 14.0944 2 11.99C6.71 3.76002 12.44 1.89004 17.61 6.39004Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M20.9994 3L17.6094 6.39" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.38 17.62L3 21" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19.5695 8.42999C20.4801 9.55186 21.2931 10.7496 21.9995 12.01C17.9995 19.01 13.2695 21.4 8.76953 19.23" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </span>
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <!-- Confirm Password -->
        <div x-data="{ show: false }" class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <div class="relative">
                <span class="absolute right-2 top-2 cursor-pointer">
                    <svg @click="show = !show" :class="{'hidden': !show, 'block': show }" xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="none" class="stroke-current text-black dark:text-white">
                        <path d="M12 16.01C14.2091 16.01 16 14.2191 16 12.01C16 9.80087 14.2091 8.01001 12 8.01001C9.79086 8.01001 8 9.80087 8 12.01C8 14.2191 9.79086 16.01 12 16.01Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 11.98C8.09 1.31996 15.91 1.32996 22 11.98" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M22 12.01C15.91 22.67 8.09 22.66 2 12.01" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <svg @click="show = !show" :class="{'block': !show, 'hidden': show}" xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="none" class="stroke-current text-black dark:text-white">
                        <path d="M14.83 9.17999C14.2706 8.61995 13.5576 8.23846 12.7813 8.08386C12.0049 7.92926 11.2002 8.00851 10.4689 8.31152C9.73758 8.61453 9.11264 9.12769 8.67316 9.78607C8.23367 10.4444 7.99938 11.2184 8 12.01C7.99916 13.0663 8.41619 14.08 9.16004 14.83" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 16.01C13.0609 16.01  14.0783 15.5886 14.8284 14.8384C15.5786 14.0883 16 13.0709 16 12.01" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17.61 6.39004L6.38 17.62C4.6208 15.9966 3.14099 14.0944 2 11.99C6.71 3.76002 12.44 1.89004 17.61 6.39004Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M20.9994 3L17.6094 6.39" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.38 17.62L3 21" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19.5695 8.42999C20.4801 9.55186 21.2931 10.7496 21.9995 12.01C17.9995 19.01 13.2695 21.4 8.76953 19.23" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </span>
                <x-text-input name="password" type="password" id="password_confirmation" class="block mt-1 w-full" name="password_confirmation" required autocomplete="new-password" />

            </div>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>
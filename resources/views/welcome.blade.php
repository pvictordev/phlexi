<x-app-layout>
    <x-nav-custom></x-nav-custom>
    <x-slot name="title">
        Home
    </x-slot>
    <main>
        <div class="flex flex-col items-center justify-center">
            @include('components.flash-alert')

            <section class="container h-screen flex items-center justify-center">
                <div class="max-w-7xl p-4 flex items-center justify-center max-md:flex-col-reverse">
                    <div class="flex flex-col max-md:items-center">
                        <p class="text-lg font-medium leading-8 text-indigo-600/95 max-md:text-center">@lang('welcome.hero.title')</p>
                        <h1 class="mt-3 text-5xl font-bold leading-[4rem] tracking-tight text-gray-900 dark:text-white max-md:text-center">@lang('welcome.hero.subtitle')
                        </h1>
                        <p class="mt-3 text-lg leading-relaxed text-slate-500">@lang('welcome.hero.description')</p>
                        <div class="mt-6 flex gap-2">
                            <a href="/login" class="transform rounded-md bg-indigo-600/95 px-5 py-3 font-medium text-white transition-colors hover:bg-indigo-700">@lang('welcome.hero.get_started')</a>
                            <a href="#" class="transform rounded-md border border-slate-900 px-5 py-3 font-medium text-slate-900 dark:border-slate-200 dark:text-slate-200 transition-colors">@lang('welcome.hero.request_demo')</a>
                        </div>
                    </div>
                    <div class="max-md:w-96 max-md:h-96">
                        <img src="https://i.pinimg.com/originals/7b/7e/07/7b7e0712e9c23914f938ec7f51cd0951.png" alt="">
                    </div>
                </div>
            </section>

            <section class="container bg-white dark:bg-slate-800 py-24 sm:py-32">
                <div class="px-4">
                    <div class="mx-auto max-w-2xl lg:text-center">
                        <h2 class="font-semibold leading-7 text-indigo-600">@lang('welcome.features.title')</h2>
                        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-800 dark:text-slate-200 sm:text-4xl">@lang('welcome.features.subtitle')</p>
                        <p class="mt-6 text-lg leading-8 text-slate-500">Quis tellus eget adipiscing convallis sit sit eget aliquet quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In mi viverra elit nunc.</p>
                    </div>
                    <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                        <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                        </svg>
                                    </div>
                                    <span class="text-slate-800 dark:text-slate-200">@lang('welcome.features.push_to_deploy')</span>
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-500">Morbi viverra dui mi arcu sed. Tellus semper adipiscing suspendisse semper morbi. Odio urna massa nunc massa.</dd>
                            </div>

                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                        </svg>
                                    </div>
                                    <span class="text-slate-800 dark:text-slate-200">@lang('welcome.features.ssl_certificates')</span>
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-500">Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget. Sem sodales gravida quam turpis enim lacus amet.</dd>
                            </div>

                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                        </svg>
                                    </div>
                                    <span class="text-slate-800 dark:text-slate-200">@lang('welcome.features.simple_queues')</span>
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-500">Quisque est vel vulputate cursus. Risus proin diam nunc commodo. Lobortis auctor congue commodo diam neque.</dd>
                            </div>

                            <div class="relative pl-16">
                                <dt class="text-base font-semibold leading-7 text-gray-900">
                                    <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                                        </svg>
                                    </div>
                                    <span class="text-slate-800 dark:text-slate-200">@lang('welcome.features.advanced_security')</span>
                                </dt>
                                <dd class="mt-2 text-base leading-7 text-gray-500">Arcu egestas dolor vel iaculis in ipsum mauris. Tincidunt mattis aliquet hac quis. Id hac maecenas ac donec pharetra eget.</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </section>

            <section class="container bg-white dark:bg-slate-800 py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                            <dt class="text-base leading-7 text-gray-500">@lang('welcome.stats.transactions_title')</dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-800 dark:text-gray-200 sm:text-5xl">@lang('welcome.stats.transactions_value')</dd>
                        </div>
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                            <dt class="text-base leading-7 text-gray-500">@lang('welcome.stats.assets_title')</dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-800 dark:text-gray-200 sm:text-5xl">@lang('welcome.stats.assets_value')</dd>
                        </div>
                        <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                            <dt class="text-base leading-7 text-gray-500">@lang('welcome.stats.users_title')</dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-gray-800 dark:text-gray-200 sm:text-5xl">@lang('welcome.stats.users_value')</dd>
                        </div>
                    </dl>
                </div>
            </section>

            <section class="container bg-white dark:bg-slate-800  py-24 sm:py-32">
                <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
                    <div class="max-w-2xl">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-800 dark:text-gray-200 sm:text-4xl">@lang('welcome.leadership')</h2>
                        <p class="mt-6 text-lg leading-8 text-gray-500">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p>
                    </div>
                    <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                        <li>
                            <div class="flex items-center gap-x-6">
                                <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <div>
                                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-800 dark:text-gray-200">Leslie Alexander</h3>
                                    <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center gap-x-6">
                                <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <div>
                                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-800 dark:text-gray-200">Leslie Alexander</h3>
                                    <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center gap-x-6">
                                <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <div>
                                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-800 dark:text-gray-200">Leslie Alexander</h3>
                                    <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center gap-x-6">
                                <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <div>
                                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-800 dark:text-gray-200">Leslie Alexander</h3>
                                    <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                        </li>
                        <!-- More people... -->
                    </ul>
                </div>
            </section>

            <section class="container bg-white dark:bg-slate-800  py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <h2 class="text-center text-lg leading-8 font-semibold text-indigo-600">@lang('welcome.partners')</h2>
                    <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                        <img class="col-span-2  max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor" width="158" height="48">
                        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158" height="48">
                        <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158" height="48">
                        <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal" width="158" height="48">
                        <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic" width="158" height="48">
                    </div>
                </div>
            </section>

            <section class="container bg-white dark:bg-slate-800 py-24 sm:py-32">
                <div class="flex flex-col items-center">
                    <h2 class="font-bold text-5xl mt-5 tracking-tight text-slate-800 dark:text-slate-200">
                        @lang('welcome.faq.title')
                    </h2>
                    <p class="text-gray-500 text-xl mt-3">
                        @lang('welcome.faq.subtitle')

                    </p>
                </div>
                <div class="grid divide-y divide-slate-800 dark:divide-slate-200 max-w-5xl mx-auto mt-8 px-3">

                    @foreach(__('welcome.faq.questions') as $question)
                    <div class="py-5">
                        <details class="group">
                            <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                <span class="text-slate-800 dark:text-slate-200"> @lang($question['question'])</span>
                                <span class="text-slate-800 dark:text-slate-200 transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="text-slate-500 mt-3 group-open:animate-fadeIn">
                                @lang($question['answer'])
                            </p>
                        </details>
                    </div>
                    @endforeach
                </div>
            </section>
        </div>
    </main>

    <x-footer-custom></x-footer-custom>
</x-app-layout>
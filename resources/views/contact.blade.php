<x-app-layout>
    <x-slot name="title">
        Contact
    </x-slot>

    <x-nav-custom></x-nav-custom>

    <main>
        <section class="h-screen text-gray-700 body-font relative">
            <div class="absolute inset-0 top-16 bg-gray-300">
                <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.6488742896145!2d24.137801599999996!3d45.7782267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474c678604b4ad13%3A0xe744074070b2b902!2sGSD%20Software%20%26%20Technology!5e0!3m2!1sen!2sro!4v1706821622878!5m2!1sen!2sro" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style=""></iframe>
            </div>
            <div class="container px-5 py-40 mx-auto flex">
                <div class="lg:w-1/3 md:w-1/2 bg-slate-200 dark:bg-slate-800 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative shadow-md">
                    <h2 class="text-slate-800 dark:text-slate-200 text-lg mb-1 font-medium title-font">Contact</h2>
                    <p class="leading-relaxed mb-5 text-gray-500">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-500">Email</label>
                        <input type="email" id="email" name="email" class="w-full text-slate-800 dark:text-slate-200 bg-white dark:bg-gray-700 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-500">Message</label>
                        <textarea id="message" name="message" class="w-full text-slate-800 dark:text-slate-200 bg-white dark:bg-gray-700 rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                    <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send</button>
                    <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
                </div>
            </div>
        </section>
    </main>

    <x-footer-custom></x-footer-custom>
</x-app-layout>
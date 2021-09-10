<x-guest-layout>

    <section class="container pt-16 mx-auto mb-32">

        {{-- Header --}}
        <header class="flex flex-col py-8 mt-8 mb-12 space-y-6 text-center">
            <h2 class="font-serif text-5xl font-bold">Membership</h2>
            <hr class="self-center w-40 border-b-4 border-theme-blue-200">
        </header>

        <div class="grid grid-cols-3 gap-8 my-16" data-aos="fade-up" data-aos-offset="100" data-aos-duration="500">
            <div class="border border-gray-200 divide-y divide-gray-200 shadow-lg bg-gray-50">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold leading-6 text-gray-900">Free</h2>
                    <p class="mt-4 text-sm leading-normal">Awesome packages</p>
                    <p class="mt-8">
                        <span class="text-4xl font-extrabold">$0.00</span>
                    </p>
                    <x-jet-button class="mt-6">
                        {{ __("Sign Up") }}
                        <svg style="height: 1.25rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current">
                            <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"></path>
                        </svg>
                    </x-jet-button>

                </div>
                <div class="px-6 pt-6 pb-8">
                    <h3 class="text-xs font-semibold tracking-wide uppercase">What's included
                    </h3>
                    <ul class="mt-6 space-y-4">
                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Some huge benefit
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Crazy offer
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Used Laravel 8 to make this
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Tailwind is awesome
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                AOS js library for some extra effects
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border border-gray-200 divide-y divide-gray-200 shadow-lg bg-gray-50">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold leading-6 text-gray-900">Monthly</h2>
                    <p class="mt-4 text-sm leading-normal">Awesome packages</p>
                    <p class="mt-8">
                        <span class="text-4xl font-extrabold">$2</span>
                        <span class="text-base font-medium text-gray-500">/mo</span>
                    </p>
                    <x-jet-button class="mt-6">
                        {{ __("Sign Up") }}
                        <svg style="height: 1.25rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current">
                            <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"></path>
                        </svg>
                    </x-jet-button>

                </div>
                <div class="px-6 pt-6 pb-8">
                    <h3 class="text-xs font-semibold tracking-wide uppercase">What's included
                    </h3>
                    <ul class="mt-6 space-y-4">
                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Some huge benefit
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Crazy offer
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Used Laravel 8 to make this
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Tailwind is awesome
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                AOS js library for some extra effects
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border border-gray-200 divide-y divide-gray-200 shadow-lg bg-gray-50">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold leading-6 text-gray-900">Yearly</h2>
                    <p class="mt-4 text-sm leading-normal">Awesome packages</p>
                    <p class="mt-8">
                        <span class="text-4xl font-extrabold">$20</span>
                        <span class="text-base font-medium text-gray-500">/year</span>
                    </p>
                    <x-jet-button class="mt-6">
                        {{ __("Sign Up") }}
                        <svg style="height: 1.25rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current">
                            <path class="heroicon-ui" d="M9.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"></path>
                        </svg>
                    </x-jet-button>
                </div>
                <div class="px-6 pt-6 pb-8">
                    <h3 class="text-xs font-semibold tracking-wide uppercase">What's included
                    </h3>
                    <ul class="mt-6 space-y-4">
                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Some huge benefit
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Crazy offer
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Used Laravel 8 to make this
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                Tailwind is awesome
                            </span>
                        </li>

                        <li class="flex space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-green-500" />
                            <span class="text-xs leading-normal">
                                AOS js library for some extra effects
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>

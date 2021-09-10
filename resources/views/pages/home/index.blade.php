<x-guest-layout>

    {{-- Hero Section --}}
    <section class="relative flex h-screen overlay">
        <div class="container flex items-center justify-between w-full mx-auto">
            {{-- Text --}}
            <div class="">
                <div class="mb-4 space-y-4 font-serif font-bold text-8xl" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="500">
                    <h2>Blog designed</h2>
                    <h2>To help you</h2>
                    <h2>Succeed!</h2>
                </div>
                <div class="space-y-6" data-aos="fade-in" data-aos-delay="500" data-aos-duration="500">
                    <p class="max-w-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dicta quidem consequuntur, blanditiis magni quo modi! Nam modi explicabo alias.
                    </p>
                    <x-jet-button class="mt-4">
                        {{ __('Subscribe') }}
                    </x-jet-button>
                </div>
            </div>

            {{-- Image --}}
            <div class="opacity-90" data-aos="fade-left" data-aos-offset="200" data-aos-delay="50" data-aos-duration="500">
                <img class="max-w-3xl" src="{{ asset('img/bg/stripe.svg') }}" alt="Stripe">
            </div>
        </div>
        <div class="curve curve-bottom"></div>
    </section>

    {{-- Blog Posts --}}
    <section class="container mx-auto">
        <header class="flex flex-col py-8 mt-8 mb-12 space-y-6 text-center">
            <h2 class="font-serif text-5xl font-bold">Latest Post</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, nesciunt?</p>
            <hr class="self-center w-40 border-b-4 border-theme-blue-200">
        </header>

        <div class="post-container">
            {{-- Single Post --}}
            <article class="flex" data-aos="fade-up">
                <a href="#" class="post-image">
                    <img class="object-cover w-full h-full" src="{{ asset('img/stock/stock-one.jpg') }}" alt="Stock One">
                </a>
                <section class="relative flex-1">
                    <div class="mt-16 space-y-8">
                        <a href="#" class="text-sm font-bold uppercase text-theme-blue-100">Tags</a>
                        <h2 class="font-serif text-5xl font-bold">
                            How to set up your living room space? Tips and Tricks
                        </h2>
                        <p class="leading-6 tracking-wide text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. A minima, reprehenderit officia neque praesentium quo alias vel saepe earum incidunt. Ratione, laudantium voluptatum? Esse eveniet sed laborum. Id modi eius asperiores quae rem exercitationem, fugit, quasi corrupti, commodi repellat placeat neque possimus necessitatibus facere ipsa corporis doloribus fugiat! Inventore, nostrum.
                        </p>
                    </div>

                    {{-- Author --}}
                    <div class="absolute flex justify-between w-full bottom-8">
                        <div class="flex items-center space-x-4">
                            <a href="#">
                                <img class="object-cover w-12 h-12 rounded" src="{{ asset('img/authors/author-one.jpg') }}" alt="Author One">
                            </a>
                            <div class="">
                                <h3 class="text-xl font-bold">Jane Doe</h3>
                                <span class="text-sm text-gray-600">Food & Leisure</span>
                            </div>
                        </div>

                        {{-- Button --}}
                        <x-link.primary>
                            {{ __('Read More') }}
                        </x-link.primary>

                    </div>
                </section>
            </article>

            {{-- Single Post --}}
            <article class="flex" data-aos="fade-up">
                <a href="#" class="post-image">
                    <img class="object-cover w-full h-full" src="{{ asset('img/stock/stock-two.jpg') }}" alt="Stock One">
                </a>
                <section class="relative flex-1">
                    <div class="mt-16 space-y-8">
                        <a href="#" class="text-sm font-bold uppercase text-theme-blue-100">Tags</a>
                        <h2 class="font-serif text-5xl font-bold">
                            How to set up your living room space? Tips and Tricks
                        </h2>
                        <p class="leading-6 tracking-wide text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. A minima, reprehenderit officia neque praesentium quo alias vel saepe earum incidunt. Ratione, laudantium voluptatum? Esse eveniet sed laborum. Id modi eius asperiores quae rem exercitationem, fugit, quasi corrupti, commodi repellat placeat neque possimus necessitatibus facere ipsa corporis doloribus fugiat! Inventore, nostrum.
                        </p>
                    </div>

                    {{-- Author --}}
                    <div class="absolute flex justify-between w-full bottom-8">
                        <div class="flex items-center space-x-4">
                            <a href="#">
                                <img class="object-cover w-12 h-12 rounded" src="{{ asset('img/authors/author-two.jpg') }}" alt="Author One">
                            </a>
                            <div class="">
                                <h3 class="text-xl font-bold">John Rouge</h3>
                                <span class="text-sm text-gray-600">Lifestyle</span>
                            </div>
                        </div>

                        {{-- Button --}}
                        <x-link.primary>
                            {{ __('Read More') }}
                        </x-link.primary>

                    </div>
                </section>
            </article>

            {{-- Single Post --}}
            <article class="flex" data-aos="fade-up">
                <a href="#" class="post-image">
                    <img class="object-cover w-full h-full" src="{{ asset('img/stock/stock-three.jpg') }}" alt="Stock One">
                </a>
                <section class="relative flex-1">
                    <div class="mt-16 space-y-8">
                        <a href="#" class="text-sm font-bold uppercase text-theme-blue-100">Tags</a>
                        <h2 class="font-serif text-5xl font-bold">
                            How to set up your living room space? Tips and Tricks
                        </h2>
                        <p class="leading-6 tracking-wide text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. A minima, reprehenderit officia neque praesentium quo alias vel saepe earum incidunt. Ratione, laudantium voluptatum? Esse eveniet sed laborum. Id modi eius asperiores quae rem exercitationem, fugit, quasi corrupti, commodi repellat placeat neque possimus necessitatibus facere ipsa corporis doloribus fugiat! Inventore, nostrum.
                        </p>
                    </div>

                    {{-- Author --}}
                    <div class="absolute flex justify-between w-full bottom-8">
                        <div class="flex items-center space-x-4">
                            <a href="#">
                                <img class="object-cover w-12 h-12 rounded" src="{{ asset('img/authors/author-three.jpg') }}" alt="Author One">
                            </a>
                            <div class="">
                                <h3 class="text-xl font-bold">John Gray</h3>
                                <span class="text-sm text-gray-600">Food & Leisure</span>
                            </div>
                        </div>

                        {{-- Button --}}
                        <x-link.primary>
                            {{ __('Read More') }}
                        </x-link.primary>

                    </div>
                </section>
            </article>

            {{-- Single Post --}}
            <article class="flex" data-aos="fade-up">
                <a href="#" class="post-image">
                    <img class="object-cover w-full h-full" src="{{ asset('img/stock/stock-four.jpg') }}" alt="Stock One">
                </a>
                <section class="relative flex-1">
                    <div class="mt-16 space-y-8">
                        <a href="#" class="text-sm font-bold uppercase text-theme-blue-100">Tags</a>
                        <h2 class="font-serif text-5xl font-bold">
                            How to set up your living room space? Tips and Tricks
                        </h2>
                        <p class="leading-6 tracking-wide text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. A minima, reprehenderit officia neque praesentium quo alias vel saepe earum incidunt. Ratione, laudantium voluptatum? Esse eveniet sed laborum. Id modi eius asperiores quae rem exercitationem, fugit, quasi corrupti, commodi repellat placeat neque possimus necessitatibus facere ipsa corporis doloribus fugiat! Inventore, nostrum.
                        </p>
                    </div>

                    {{-- Author --}}
                    <div class="absolute flex justify-between w-full bottom-8">
                        <div class="flex items-center space-x-4">
                            <a href="#">
                                <img class="object-cover w-12 h-12 rounded" src="{{ asset('img/authors/author-four.jpg') }}" alt="Author One">
                            </a>
                            <div class="">
                                <h3 class="text-xl font-bold">Michelle Jones</h3>
                                <span class="text-sm text-gray-600">Health</span>
                            </div>
                        </div>

                        {{-- Button --}}
                        <x-link.primary>
                            {{ __('Read More') }}
                        </x-link.primary>

                    </div>
                </section>
            </article>
        </div>

        <div class="flex justify-center my-16">
            <x-jet-button>
                Load More...
            </x-jet-button>
        </div>
    </section>
</x-guest-layout>

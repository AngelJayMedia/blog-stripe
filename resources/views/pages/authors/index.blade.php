<x-guest-layout>

    <section class="container pt-16 mx-auto mb-32">

        {{-- Header --}}
        <header class="flex flex-col py-8 mt-8 mb-12 space-y-6 text-center">
            <h2 class="font-serif text-5xl font-bold">Authors</h2>
            <hr class="self-center w-40 border-b-4 border-theme-blue-200">
        </header>

        <div class="gap-8 my-16 space-y-4 sm:grid sm:grid-cols-2 lg:grid-cols-4 sm:space-y-0">

            {{-- Author Single --}}
            <div class="transition duration-500 transform bg-white shadow-lg hover:shadow-xl hover:scale-105" data-aos="fade-up">
                <img class="w-full" src="{{ asset('img/authors/author-one.jpg') }}" />
                <div class="px-4 py-4 space-y-4">
                    <h1 class="font-serif text-2xl font-bold font-gray-700">Jane Doe</h1>
                    <p class="text-sm tracking-normal">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus dolore, rem vel nam excepturi veritatis.
                    </p>
                    <div class="flex pt-8 space-x-4">
                        <a href="#">
                            <x-fab-facebook-f class="h-4 text-theme-blue-200" />
                        </a>
                        <a href="#">
                            <x-fab-twitter class="h-4 text-theme-blue-200" />
                        </a>
                        <a href="#">
                            <x-fab-instagram-square class="h-4 text-theme-blue-200" />
                        </a>
                        <a href="#">
                            <x-fab-linkedin-in class="h-4 text-theme-blue-200" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="transition duration-500 transform bg-white shadow-lg hover:shadow-xl hover:scale-105" data-aos="fade-up">
                <img class="w-full" src="{{ asset('img/authors/author-two.jpg') }}" />
                <div class="px-4 py-4 space-y-4">
                    <h1 class="font-serif text-2xl font-bold font-gray-700">David Rouge</h1>
                    <p class="text-sm tracking-normal">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus dolore, rem vel nam excepturi veritatis.
                    </p>
                    <div class="flex pt-8 space-x-4">
                        <a href="#">
                            <x-fab-facebook-f class="h-4 text-theme-blue-200" />
                        </a>
                        <a href="#">
                            <x-fab-twitter class="h-4 text-theme-blue-200" />
                        </a>
                        <a href="#">
                            <x-fab-instagram-square class="h-4 text-theme-blue-200" />
                        </a>
                        <a href="#">
                            <x-fab-linkedin-in class="h-4 text-theme-blue-200" />
                        </a>

                    </div>
                </div>
            </div>
            <div class="transition duration-500 transform bg-white shadow-lg hover:shadow-xl hover:scale-105" data-aos="fade-up">
                <img class="w-full" src="{{ asset('img/authors/author-three.jpg') }}" />
                <div class="px-4 py-4 space-y-4">
                    <h1 class="font-serif text-2xl font-bold font-gray-700">John Gray</h1>
                    <p class="text-sm tracking-normal">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus dolore, rem vel nam excepturi veritatis.
                    </p>
                    <div class="flex pt-8 space-x-4">
                        <a href="#">
                            <x-fab-facebook-f class="h-4 text-theme-blue-200" />
                        </a>
                        <a href="#">
                            <x-fab-twitter class="h-4 text-theme-blue-200" />
                        </a>
                        <a href="#">
                            <x-fab-instagram-square class="h-4 text-theme-blue-200" />
                        </a>
                        <a href="#">
                            <x-fab-linkedin-in class="h-4 text-theme-blue-200" />
                        </a>

                    </div>
                </div>
            </div>
            <div class="transition duration-500 transform bg-white shadow-lg hover:shadow-xl hover:scale-105" data-aos="fade-up">
                <img class="w-full" src="{{ asset('img/authors/author-four.jpg') }}" />
                <div class="px-4 py-4 space-y-4">
                    <h1 class="font-serif text-2xl font-bold font-gray-700">Michelle Jones</h1>
                    <p class="text-sm tracking-normal">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus dolore, rem vel nam excepturi veritatis.
                    </p>
                    <div class="flex pt-8 space-x-4">
                        <a href="#">
                            <x-fab-facebook-f class="h-4 text-theme-blue-200" />
                        </a>
                        <a href="#">
                            <x-fab-twitter class="h-4 text-theme-blue-200" />
                        </a>
                        <a href="#">
                            <x-fab-instagram-square class="h-4 text-theme-blue-200" />
                        </a>
                        <a href="#">
                            <x-fab-linkedin-in class="h-4 text-theme-blue-200" />
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </section>

</x-guest-layout>

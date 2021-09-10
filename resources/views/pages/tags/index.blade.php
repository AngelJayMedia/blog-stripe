<x-guest-layout>
    <section class="container pt-16 mx-auto mb-32">

        <header class="flex flex-col py-8 mt-8 mb-12 space-y-8 text-center">
            <h2 class="font-serif text-5xl font-bold">Tags</h2>
            <hr class="self-center w-40 border-b-4 border-theme-blue-200">
        </header>

        <div class="grid grid-cols-4 gap-6" data-aos="fade-up" data-aos-offset="100" data-aos-duration="500">

            <a href="#" class="relative col-span-1 cursor-pointer hover:shadow">
                <img class="w-full h-full transition-all obeject-cover opacity-80 duration-250 hover:opacity-100" src="{{ asset('img/tags/outdoors.jpg') }}" alt="Outdoors">
                <h2 class="absolute inset-x-auto w-full py-2 font-serif text-5xl font-bold text-center text-white bg-gray-600 bg-opacity-50 text-shadow top-2/4">
                    Outdoors
                </h2>
            </a>

            <a href="#" class="relative col-span-1 cursor-pointer hover:shadow">
                <img class="w-full h-full transition-all obeject-cover opacity-80 duration-250 hover:opacity-100" src="{{ asset('img/tags/health.jpg') }}" alt="Health">
                <h2 class="absolute inset-x-auto w-full py-2 font-serif text-5xl font-bold text-center text-white bg-gray-600 bg-opacity-50 text-shadow top-2/4">
                    Health
                </h2>
            </a>

            <a href="#" class="relative col-span-1 cursor-pointer hover:shadow">
                <img class="w-full h-full transition-all obeject-cover opacity-80 duration-250 hover:opacity-100" src="{{ asset('img/tags/environment.jpg') }}" alt="Environment">
                <h2 class="absolute inset-x-auto w-full py-2 font-serif text-5xl font-bold text-center text-white bg-gray-600 bg-opacity-50 text-shadow top-2/4">
                    Environment
                </h2>
            </a>

            <a href="#" class="relative col-span-1 cursor-pointer hover:shadow">
                <img class="w-full h-full transition-all obeject-cover opacity-80 duration-250 hover:opacity-100" src="{{ asset('img/tags/fitness.jpg') }}" alt="Fitness">
                <h2 class="absolute inset-x-auto w-full py-2 font-serif text-5xl font-bold text-center text-white bg-gray-600 bg-opacity-50 text-shadow top-2/4">
                    Fitness
                </h2>
            </a>

            <a href="#" class="relative col-span-1 cursor-pointer hover:shadow">
                <img class="w-full h-full transition-all obeject-cover opacity-80 duration-250 hover:opacity-100" src="{{ asset('img/tags/family.jpg') }}" alt="Family">
                <h2 class="absolute inset-x-auto w-full py-2 font-serif text-5xl font-bold text-center text-white bg-gray-600 bg-opacity-50 text-shadow top-2/4">
                    Family
                </h2>
            </a>

            <a href="#" class="relative col-span-1 cursor-pointer hover:shadow">
                <img class="w-full h-full transition-all obeject-cover opacity-80 duration-250 hover:opacity-100" src="{{ asset('img/tags/decor.jpg') }}" alt="Decor">
                <h2 class="absolute inset-x-auto w-full py-2 font-serif text-5xl font-bold text-center text-white bg-gray-600 bg-opacity-50 text-shadow top-2/4">
                    Decor
                </h2>
            </a>

            <a href="#" class="relative col-span-1 cursor-pointer hover:shadow">
                <img class="w-full h-full transition-all obeject-cover opacity-80 duration-250 hover:opacity-100" src="{{ asset('img/tags/beauty.jpg') }}" alt="Beauty">
                <h2 class="absolute inset-x-auto w-full py-2 font-serif text-5xl font-bold text-center text-white bg-gray-600 bg-opacity-50 text-shadow top-2/4">
                    Beauty
                </h2>
            </a>

            <a href="#" class="relative col-span-1 cursor-pointer hover:shadow">
                <img class="w-full h-full transition-all obeject-cover opacity-80 duration-250 hover:opacity-100" src="{{ asset('img/tags/diy.jpg') }}" alt="DIY">
                <h2 class="absolute inset-x-auto w-full py-2 font-serif text-5xl font-bold text-center text-white bg-gray-600 bg-opacity-50 text-shadow top-2/4">
                    DIY
                </h2>
            </a>

        </div>
    </section>

</x-guest-layout>

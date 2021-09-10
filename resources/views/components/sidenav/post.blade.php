<aside class="col-span-1 space-y-8" data-aos="fade-left" data-aos-duration="500">

    {{-- About Author --}}
    <div class="p-6 space-y-8 border border-gray-200">
        <h2 class="relative font-serif text-2xl font-bold text-center">
            <span class="side-title">
                About Author
            </span>
        </h2>
        <div class="">
            <img src="{{ asset('img/authors/author-four.jpg') }}" alt="Author Four">
        </div>

        <div class="">
            <p class="text-sm tracking-wide text-gray-700">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus maiores dicta consectetur, eligendi tenetur corporis suscipit? Expedita asperiores in quod.
            </p>
        </div>

        {{-- Stats --}}
        <div class="">
            <span class="px-4 py-1 text-white bg-gray-800">
                24 Post[s]
            </span>
        </div>

        {{-- Socials --}}
        <div class="flex space-x-4">
            <a href="#">
                <x-fab-facebook-f class="h-4 text-theme-blue-00" />
            </a>
            <a href="#">
                <x-fab-twitter class="h-4 text-theme-blue-00" />
            </a>
            <a href="#">
                <x-fab-instagram-square class="h-4 text-theme-blue-00" />
            </a>
            <a href="#">
                <x-fab-linkedin-in class="h-4 text-theme-blue-00" />
            </a>
        </div>

        {{-- Button --}}
        <a class="block" href="#">
            View Profile
        </a>
    </div>

    {{-- Popular Posts --}}
    <div class="p-6 space-y-8 border border-gray-200">
        <h2 class="relative font-serif text-2xl font-bold text-center">
            <span class="side-title">
                Popular Posts
            </span>
        </h2>
        <div class="flex flex-col space-y-8">

            {{-- Single Trending --}}
            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-1">
                    <img class="object-cover" src="{{ asset('img/stock/stock-one.jpg') }}" alt="Stock One">
                </div>
                <div class="col-span-2">
                    <h2 class="font-serif">Best paint schema to use for walls</h2>
                </div>
            </div>

            {{-- Single Trending --}}
            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-1">
                    <img class="object-cover" src="{{ asset('img/stock/stock-two.jpg') }}" alt="Stock One">
                </div>
                <div class="col-span-2">
                    <h2 class="font-serif">Best paint schema to use for walls</h2>
                </div>
            </div>

            {{-- Single Trending --}}
            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-1">
                    <img class="object-cover" src="{{ asset('img/stock/stock-three.jpg') }}" alt="Stock One">
                </div>
                <div class="col-span-2">
                    <h2 class="font-serif">Best paint schema to use for walls</h2>
                </div>
            </div>
        </div>
    </div>

    {{-- Tags --}}
    <div class="p-6 space-y-8 border border-gray-200">
        <h2 class="relative font-serif text-2xl font-bold text-center">
            <span class="side-title">
                Tags
            </span>
        </h2>

        <div class="flex flex-wrap gap-3">
            <x-buttons.default>
                Outdoors
            </x-buttons.default>
            <x-buttons.default>
                Health
            </x-buttons.default>
            <x-buttons.default>
                Environment
            </x-buttons.default>
            <x-buttons.default>
                Fitness
            </x-buttons.default>
            <x-buttons.default>
                Family
            </x-buttons.default>
            <x-buttons.default>
                Decor
            </x-buttons.default>
            <x-buttons.default>
                Beauty
            </x-buttons.default>
            <x-buttons.default>
                DIY
            </x-buttons.default>
        </div>
    </div>
</aside>

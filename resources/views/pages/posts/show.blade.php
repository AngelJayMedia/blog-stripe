<x-guest-layout>
    <section class="container mx-auto">
        <div class="grid grid-cols-4 gap-10 pt-24">
            {{-- Single Post --}}
            <article class="col-span-3" data-aos="fade-up" data-aos-duration="500">

                {{-- Cover Image --}}
                <div class=" h-96">
                    <img class="object-cover w-full h-full" src="{{ asset('img/stock/stock-five.jpg') }}" alt="Stock Five">
                </div>

                {{-- Content --}}
                <div class="relative flex-1">
                    <div class="mt-16 space-y-8">
                        {{-- Tags --}}
                        <a href="#" class="text-sm font-bold uppercase text-theme-blue-100">Tags</a>

                        {{-- Title --}}
                        <h2 class="font-serif text-5xl font-bold">
                            How to set up your living room space? Tips and Tricks
                        </h2>

                        {{-- Author --}}
                        <div class="flex items-center space-x-8">
                            <div class="flex items-center space-x-4">
                                <a href="#">
                                    <img class="object-cover w-12 h-12 rounded" src="{{ asset('img/authors/author-four.jpg') }}" alt="Author One">
                                </a>
                                <div class="">
                                    <h3 class="text-xl font-bold">Michelle Jones</h3>
                                </div>
                            </div>

                            {{-- Date --}}
                            <span class="text-gray-600">
                                Posted: 4 September 2045
                            </span>
                        </div>

                        <p class="leading-6 tracking-wide text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi veniam doloribus saepe, officia eligendi quaerat magnam? Dicta magni obcaecati commodi explicabo, maiores nemo itaque deserunt porro ratione aspernatur quia, illum ea! Ad corporis odit nihil, reiciendis illo ab earum, quidem mollitia, voluptate iure aliquam! Voluptatibus facilis molestias, placeat libero ratione porro, sit quo ab quibusdam qui ipsum, architecto cum officia itaque sint quod dolor reprehenderit autem unde! Pariatur asperiores, laborum perferendis illo iure tempore quae a quasi, rem iusto assumenda atque laudantium molestiae veniam ducimus obcaecati autem cumque nobis aperiam esse? Dignissimos minima maxime id ducimus sint, alias vero dolores pariatur soluta illo atque quo, laborum esse! Consectetur dolorem totam illo aspernatur laudantium maxime provident quisquam ea vel earum, deleniti blanditiis? Molestias unde cumque numquam iure delectus adipisci asperiores! Asperiores dolores laborum deserunt placeat, debitis pariatur numquam sunt esse in libero consectetur vitae soluta, odio fuga quo ipsa quaerat aliquid distinctio harum! Eius dignissimos impedit nulla ex facere odit quidem! Nulla qui inventore quod, rem in eos ea maxime voluptate autem facilis incidunt repudiandae tempore, quam consequuntur rerum reprehenderit sunt quo error quibusdam amet! Earum incidunt ut expedita aperiam perspiciatis numquam inventore corporis nam, dignissimos doloribus culpa. Quod, deserunt expedita!
                        </p>
                        <p class="leading-6 tracking-wide text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi veniam doloribus saepe, officia eligendi quaerat magnam? Dicta magni obcaecati commodi explicabo, maiores nemo itaque deserunt porro ratione aspernatur quia, illum ea! Ad corporis odit nihil, reiciendis illo ab earum, quidem mollitia, voluptate iure aliquam! Voluptatibus facilis molestias, placeat libero ratione porro, sit quo ab quibusdam qui ipsum, architecto cum officia itaque sint quod dolor reprehenderit autem unde! Pariatur asperiores, laborum perferendis illo iure tempore quae a quasi, rem iusto assumenda atque laudantium molestiae veniam ducimus obcaecati autem cumque nobis aperiam esse? Dignissimos minima maxime id ducimus sint, alias vero dolores pariatur soluta illo atque quo, laborum esse! Consectetur dolorem totam illo aspernatur laudantium maxime provident quisquam ea vel earum, deleniti blanditiis? Molestias unde cumque numquam iure delectus adipisci asperiores! Asperiores dolores laborum deserunt placeat, debitis pariatur numquam sunt esse in libero consectetur vitae soluta, odio fuga quo ipsa quaerat aliquid distinctio harum! Eius dignissimos impedit nulla ex facere odit quidem! Nulla qui inventore quod, rem in eos ea maxime voluptate autem facilis incidunt repudiandae tempore, quam consequuntur rerum reprehenderit sunt quo error quibusdam amet! Earum incidunt ut expedita aperiam perspiciatis numquam inventore corporis nam, dignissimos doloribus culpa. Quod, deserunt expedita!
                        </p>
                        <p class="leading-6 tracking-wide text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi veniam doloribus saepe, officia eligendi quaerat magnam? Dicta magni obcaecati commodi explicabo, maiores nemo itaque deserunt porro ratione aspernatur quia, illum ea! Ad corporis odit nihil, reiciendis illo ab earum, quidem mollitia, voluptate iure aliquam! Voluptatibus facilis molestias, placeat libero ratione porro, sit quo ab quibusdam qui ipsum, architecto cum officia itaque sint quod dolor reprehenderit autem unde! Pariatur asperiores, laborum perferendis illo iure tempore quae a quasi, rem iusto assumenda atque laudantium molestiae veniam ducimus obcaecati autem cumque nobis aperiam esse? Dignissimos minima maxime id ducimus sint, alias vero dolores pariatur soluta illo atque quo, laborum esse! Consectetur dolorem totam illo aspernatur laudantium maxime provident quisquam ea vel earum, deleniti blanditiis? Molestias unde cumque numquam iure delectus adipisci asperiores! Asperiores dolores laborum deserunt placeat, debitis pariatur numquam sunt esse in libero consectetur vitae soluta, odio fuga quo ipsa quaerat aliquid distinctio harum! Eius dignissimos impedit nulla ex facere odit quidem! Nulla qui inventore quod, rem in eos ea maxime voluptate autem facilis incidunt repudiandae tempore, quam consequuntur rerum reprehenderit sunt quo error quibusdam amet! Earum incidunt ut expedita aperiam perspiciatis numquam inventore corporis nam, dignissimos doloribus culpa. Quod, deserunt expedita!
                        </p>
                    </div>
                </div>

                <hr class="pt-1 my-12 border-t border-b">

                <div class="flex flex-col items-center mb-24 space-y-4">
                    <h2 class="font-serif font-bold capitalize">Share this post</h2>
                    <div class="flex flex-wrap gap-3">
                        <x-buttons.social>
                            <x-fab-facebook-f class="w-5 h-5" />
                        </x-buttons.social>
                        <x-buttons.social>
                            <x-fab-twitter class="w-5 h-5" />
                        </x-buttons.social>
                        <x-buttons.social>
                            <x-fab-whatsapp class="w-5 h-5" />
                        </x-buttons.social>
                        <x-buttons.social>
                            <x-fab-telegram-plane class="w-5 h-5" />
                        </x-buttons.social>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="border-b-2 border-theme-blue-100">
                        <h2 class="inline-block p-2 text-sm text-white uppercase rounded-t bg-theme-blue-100">
                            Post a comment
                        </h2>
                    </div>
                    <span class="block">10 Comments</span>

                    <div class="pb-16">
                        <x-form action="">
                            <x-textarea name="about" class="w-full border-gray-200 rounded focus:border-theme-blue-100 focus:ring focus:ring-theme-blue-100 focus:ring-opacity-50">
                                Enter your comment
                            </x-textarea>
                        </x-form>
                    </div>
                </div>

            </article>

            {{-- Side nav --}}
            <x-sidenav.post />

        </div>
    </section>
</x-guest-layout>

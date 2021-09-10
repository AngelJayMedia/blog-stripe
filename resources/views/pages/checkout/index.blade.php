<x-guest-layout>

    <section class="container pt-16 mx-auto mb-32">

        {{-- Header --}}
        <header class="flex flex-col py-8 mt-8 mb-12 space-y-6 text-center">
            <h2 class="font-serif text-5xl font-bold">Checkout</h2>
            <hr class="self-center w-40 border-b-4 border-theme-blue-200">
        </header>

        <div class="flex flex-col items-center max-w-4xl mx-auto">
            <div class="w-full p-10 m-4 leading-loose border border-gray-200 shadow-lg bg-gray-50">
                <form class="space-y-8">
                    <h2 class="relative font-serif text-xl font-bold">
                        <span class="side-title">
                            Customer information
                        </span>
                    </h2>


                    <div class="space-y-2">
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="space-y-2">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block w-full mt-1" type="text" name="email" :value="old('email')" required autofocus autocomplete="email" />
                    </div>

                    <div class="space-y-2">
                        <x-jet-label for="address" value="{{ __('Address') }}" />
                        <x-jet-input id="address" class="block w-full mt-1" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
                    </div>

                    <div class="space-y-2">
                        <x-jet-label for="city" value="{{ __('City') }}" />
                        <x-jet-input id="city" class="block w-full mt-1" type="text" name="city" :value="old('city')" required autofocus autocomplete="city" />
                    </div>

                    <div class="inline-block w-1/2 pr-2 ">
                        <x-jet-label for="country" value="{{ __('Country') }}" />
                        <x-jet-input id="country" class="block w-full mt-1" type="text" name="country" :value="old('country')" required autofocus autocomplete="country" />
                    </div>

                    <div class="inline-block w-1/2 pl-2 -mx-1">
                        <x-jet-label for="zip" value="{{ __('Zip') }}" />
                        <x-jet-input id="zip" class="block w-full mt-1" type="text" name="zip" :value="old('zip')" required autofocus autocomplete="zip" />
                    </div>

                    <h2 class="relative font-serif text-xl font-bold">
                        <span class="side-title">
                            Payment information
                        </span>
                    </h2>

                    <div class="space-y-2">
                        <x-jet-label for="card_no" value="{{ __('Card Number') }}" />
                        <x-jet-input id="card_no" class="block w-full mt-1" type="text" name="card_no" :value="old('card_no')" required autofocus autocomplete="card_no" />
                    </div>

                    <div class="inline-block w-1/2 pr-2 ">
                        <x-jet-label for="expire_date" value="{{ __('Expire Date') }}" />
                        <x-jet-input id="expire_date" class="block w-full mt-1" type="text" name="expire_date" :value="old('expire_date')" required autofocus autocomplete="expire_date" />
                    </div>

                    <div class="inline-block w-1/2 pl-2 -mx-1">
                        <x-jet-label for="ccv" value="{{ __('CCV') }}" />
                        <x-jet-input id="ccv" class="block w-full mt-1" type="text" name="ccv" :value="old('ccv')" required autofocus autocomplete="ccv" />
                    </div>

                    <div class="space-y-2">
                        <button class="px-4 py-1 font-light tracking-wider text-white bg-gray-900 rounded" type="submit">
                            Pay Now
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</x-guest-layout>

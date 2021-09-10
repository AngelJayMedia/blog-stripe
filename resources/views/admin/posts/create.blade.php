<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-white">
            {{ __('Posts: Create') }}
        </h2>
    </x-slot>

    <section class="mx-6">
        <div class="p-8">
            <x-form action="#">
                <div class="space-y-8">
                    {{-- Name --}}
                    <div>
                        <x-form.label for="name" value="{{ __('Name') }}" />
                        <x-form.input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus />
                        <x-form.error for="name" />
                    </div>

                    {{-- Button --}}
                    <x-buttons.primary>
                        {{ __('Create') }}
                    </x-buttons.primary>
            </x-form>
        </div>
    </section>
</x-app-layout>

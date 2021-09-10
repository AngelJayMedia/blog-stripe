@props(['active'])

@php
$classes = ($active ?? false)
? 'cursor-pointer inline-flex items-center px-1 pt-1 border-b-2 border-theme-blue-100 font-medium leading-5 text-gray-900 focus:outline-none focus:border-theme-blue-300 transition'
: 'cursor-pointer inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-medium leading-5 text-gray-600 hover:text-theme-blue-100 hover:border-theme-blue-100 focus:outline-none focus:text-theme-blue-100 focus:border-theme-blue-100 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

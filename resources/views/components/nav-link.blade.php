@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-red-400 light:border-indigo-600 text-sm font-medium leading-5 text-blue-1000 light:text-blue-100 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-blue-900 light:text-blue-400 hover:text-red-700 light:hover:text-red-300 hover:border-red-300 light:hover:border-red-700 focus:outline-none focus:text-red-700 light:focus:text-red-300 focus:border-red-300 light:focus:border-blue-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

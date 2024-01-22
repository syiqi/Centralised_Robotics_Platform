@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full pl-3 pr-4 py-2 border-l-4 border-blue-400 light:border-blue-600 text-left text-base font-medium text-blue-700 light:text-blue-300 bg-blue-50 light:bg-blue-900/50 focus:outline-none focus:text-blue-800 light:focus:text-blue-200 focus:bg-blue-100 light:focus:bg-blue-900 focus:border-blue-700 light:focus:border-blue-300 transition duration-150 ease-in-out'
            : 'block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-blue-600 light:text-gray-400 hover:text-gray-800 light:hover:text-blue-200 hover:bg-blue-50 light:hover:bg-blue-700 hover:border-blue-300 light:hover:border-blue-600 focus:outline-none focus:text-blue-800 light:focus:text-blue-200 focus:bg-blue-50 light:focus:bg-blue-700 focus:border-blue-300 light:focus:border-blue-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

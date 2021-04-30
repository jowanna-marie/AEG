@props(['active'])

@php
$classes = $active ?? false ? 'inline-flex items-center px-1 pt-1 hover:border-b-2 hover:border-indigo-700 text-xl font-bold leading-5 text-white hover:text-yellow-400 focus:outline-none focus:border-red-600 transition' : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-xl font-bold leading-5 text-white hover:text-yellow-400 hover:border-yellow-400 focus:outline-none focus:text-yellow-600 focus:border-red-600 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

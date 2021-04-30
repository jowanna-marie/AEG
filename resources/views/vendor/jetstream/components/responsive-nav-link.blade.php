@props(['active'])

@php
$classes = $active ?? false ? 'block pl-3 pr-4 py-2 border-l-4 border-yellow-400 text-base font-medium text-white bg-red-600 focus:outline-none focus:text-yellow-600 focus:bg-red-600 focus:border-yellow-400 transition' : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-white hover:text-yellow-400 focus:outline-none focus:text-yellow-600 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

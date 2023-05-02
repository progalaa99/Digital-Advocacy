@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1  border-indigo-400 text-sm font-bold leading-5 text-white   transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1  border-transparent text-sm font-bold leading-5 text-white     transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

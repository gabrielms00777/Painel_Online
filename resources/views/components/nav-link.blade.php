{{-- @props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a> --}}

<a wire:navigare href="{{ $route }}"
    class="{{ $isActive() ? 'active-nav-link' : '' }} flex items-center text-white py-3 pl-6 nav-item">
    <x-ts-icon name="{{ $icon }}" class="h-5 w-5 mr-2" />
    {{ $label }}
</a>

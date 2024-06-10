@php
    $classes =
        'text-sm text-gray-500 dark:text-gray-500 hover:text-gray-900 dark:hover:text-gray-900 rounded-md focus:outline-none dark:focus:ring-offset-gray-800';
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

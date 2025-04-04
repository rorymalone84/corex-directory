@props(['href'])

<a href="{{ $href }}"
    {{ $attributes->merge(['class' => 'font-medium text-blue-600 dark:text-blue-500 hover:underline']) }}>
    {{ $slot }}
</a>

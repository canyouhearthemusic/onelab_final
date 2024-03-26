@props(['for'])

<label
    for="{{ $for }}"
    class="block text-sm font-medium leading-0 text-gray-900"
>
    {{ $slot }}
</label>
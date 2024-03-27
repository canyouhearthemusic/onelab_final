@props(['name', 'id'])

<x-form.field>
    <select
        id="{{ $id }}"
        name="{{ $name }}"
        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-sm"
    >
        {{ $slot }}
    </select>

    <x-form.error name="{{ $name }}"></x-form.error>
</x-form.field>
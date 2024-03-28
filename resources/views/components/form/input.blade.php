@props(['name', 'type' => 'text', 'value', 'disabled' => false])

<x-form.field>
    <div class="mb-6">
        <input
            @if ($disabled)
            disabled
            @endif
            required
            id="{{ $name }}"
            name="{{ $name}}"
            type="{{ $type }}"
            value="{{ $value ?? '' }}"
            class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-0"
        >
    </div>

    <x-form.error name="{{ $name }}"></x-form.error>
</x-form.field>
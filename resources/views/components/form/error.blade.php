@props(['name'])

@error($name)
    <p class="absolute -bottom-5 mt-3 text-xs text-red-500"> {{ $message }}</p>
@enderror

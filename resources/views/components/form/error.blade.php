@props(['error'])

@error($error)
    <p class="text-sm text-red-500 px-3">{{ $message }}</p>
@enderror

@props(['disable' => false])

<button type="submit" class="w-full px-5 py-3 border rounded-full text-white
{{ $disable ? 'bg-gray-400 cursor-not-allowed' : 'bg-blue-700 hover:bg-blue-600 ' }}" {{ $disable ? 'disabled' : '' }}>
    {{ $slot }}
</button>

@props(['name','type' => 'text'])

<input {{ $attributes->merge(['class' => "input-field rounded-full w-full py-2 px-3 focus:outline-none"]) }} type="{{ $type }}"
placeholder="{{ $name }}" name="{{ $name }}" autocomplete="off">


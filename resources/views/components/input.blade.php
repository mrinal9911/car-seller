@props(['name', 'label', 'type' => 'text'])

<label for="{{ $name }}" class="block font-medium">{{ $label }}</label>
<input 
    type="{{ $type }}" 
    name="{{ $name }}" 
    id="{{ $name }}" 
    {{ $attributes->merge(['class' => 'w-full border px-3 py-2 rounded']) }} 
/>
@error($name)
    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
@enderror
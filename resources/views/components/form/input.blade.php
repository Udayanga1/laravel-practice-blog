@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>
    <input 
        name="{{ $name }}" 
        id="{{ $name }}" 
        class="border border-gray-200 rounded p-2 w-full" 
        value="{{ old($name) }}"
        required
        {{ $attributes }}
        >
    <x-form.error name="{{ $name }}"/>
</x-form.field>

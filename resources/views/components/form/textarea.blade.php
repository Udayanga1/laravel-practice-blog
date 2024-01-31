@props(['name', 'type' => 'text'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>
    <textarea type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" class="border border-gray-200 rounded p-2 w-full" value="{{ old($name) }}" required></textarea>
    <x-form.error name="{{ $name }}" />
</x-form.field>

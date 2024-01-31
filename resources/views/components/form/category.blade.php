@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>
    {{-- <textarea type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" class="border border-gray-400 p-2 w-full" value="{{ old($name) }}"></textarea> --}}
    <select name="category_id" id="category_id">
      @foreach (App\Models\Category::all() as $category)
        <option 
        value="{{ $category->id }}" 
        {{ old('category_id') == $category->id ? 'selected' : '' }}
        >{{ ucwords($category->name) }}</option>
      @endforeach
    </select> 

    <x-form.error name="{{ $name }}" />
</x-form.field>

{{-- <div class="mb-6">
  <label for="category" class="block mb-2 uppercase font-bold text-xs text-gray-700">
    Category
  </label>
  <select name="category_id" id="category_id">
  
    @foreach (App\Models\Category::all() as $category)
      <option 
      value="{{ $category->id }}" 
      {{ old('category_id') == $category->id ? 'selected' : '' }}
      >{{ ucwords($category->name) }}</option>
    @endforeach
  </select>
  
  @error('category_id')
    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
  @enderror
</div> --}}
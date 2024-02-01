@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>
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

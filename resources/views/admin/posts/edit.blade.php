<x-layout>
  <x-setting :heading="'Edit Post: ' . $post->title">
    <form action="/admin/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <x-form.input name="title" :value="old('title', $post->title)" />
      <x-form.input name="slug" :value="old('slug', $post->slug)"/>
      
      <div class="flex mt-6">
        <div class="flex-1">
          <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
        </div>

        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-6" width="100">
      </div>

      <x-form.textarea name="excerpt" :value="old('excerpt', $post->excerpt)">{{ old('title', $post->excerpt) }}</x-form.textarea>
      <x-form.textarea name="body" >{{ old('title', $post->body) }}</x-form.textarea>
      {{-- <x-form.category name="category_id" :value="old('category_id', $post->category_id)"/> --}}
      <select name="category_id" id="category_id">
        @foreach (App\Models\Category::all() as $category)
          <option 
          value="{{ $category->id }}" 
          {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}
          >{{ ucwords($category->name) }}</option>
        @endforeach
      </select> 

      <x-form.button>Update</x-form.button>

    </form>
  </x-setting>


</x-layout>
<x-layout>
  <section class="max-w-md mx-auto py-8">
    <h1 class="text-lg font-bold mb-4">
      Publish New Post
    </h1>
    <x-panel>
      <form action="/admin/posts" method="POST" enctype="multipart/form-data">
        @csrf
        <x-form.input name="title"/>
        <x-form.input name="slug"/>
        <x-form.input name="thumbnail" type="file"/>
        <x-form.textarea name="excerpt"/>
        <x-form.textarea name="body"/>
        <x-form.category name="category_id"/>

        <x-form.button>Publish</x-form.button>
  
      </form>
    </x-panel>
  </section>
</x-layout>
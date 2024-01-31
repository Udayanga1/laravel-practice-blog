<x-layout>
  <x-setting heading="Publish New Post">
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
  </x-setting>


</x-layout>
<x-layout>
  <x-setting heading="Manage Posts">

    <!-- component -->

    <div class="container mx-auto px-4 sm:px-8">
      <div class="py-8">
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
          <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">
              <tbody>
                @foreach ($posts as $post)
                  <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 whitespace-no-wrap">Edit</a>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <form action="/admin/posts/{{ $post->id }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="text-xs text-gray-400">Delete</button>
                        </form>
                    </td>
                  </tr>                    
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


  </x-setting>


</x-layout>
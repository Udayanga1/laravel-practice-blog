@auth
  <x-panel>
    <form action="/posts/{{ $post->slug }}/comments" method="POST">
      @csrf

      <header class="flex items-center">
        <img src="https://i.pravatar.cc/40?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">
        <h2 class="ml-4">Want to participate?</h2>

      </header>
      <div class="mt-6">
          <textarea name="body" id="body" class="w-full text-sm focus:outline-none focus:ring p-1" rows="5" placeholder="Quick, thing of something to say!" required></textarea>

          @error('body')
            <span class="text-xs text-red-500">{{ $message }}</span>
          @enderror
      </div>
      <div class="flex justify-end mt-10 border-t border-gray-200">
        <x-form.button>
          Post
        </x-form.button>
      </div>

    </form>
  </x-panel>

@else
  <p>
    <a href="/register" class="font-semibold text-blue-500 hover:underline">Register</a> or <a href="/login" class="font-semibold text-blue-500 hover:underline">Log in</a> to leave a comments
  </p>

@endauth
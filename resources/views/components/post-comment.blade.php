@props(['comment'])


<article class="flex space-x-4 border border-gray-200 rounded-xl bg-gray-100 p-6">
  <div class="flex-shrink-0">
    <img src="https://i.pravatar.cc/60?u={{ $comment->id }}" alt="" width="60" height="60" class="rounded-xl">
  </div>
  <div>
    <header class="mb-4">
      <h3 class="font-bold">{{ $comment->author->username }}</h3>
      <p class="text-xs">
        Posted
        <time>{{ $comment->created_at }}</time>
      </p>
      <p>
        {{ $comment->body }}
      </p>
    </header>
  </div>
</article>
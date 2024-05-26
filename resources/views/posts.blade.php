<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  
  @foreach ($posts as $post)
  <article class="py-8 max-w-screen-md border-b border-gray-500">
    <a href="/post/{{ $post['id'] }}" class="hover:underline">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{  $post['title'] }}</h2>
    </a>
    <div> 
      <a href="#">{{  $post['author'] }}</a> | 25 May 2024
    </div class="textbase text-green-500">
    <p class="my-4 font-light"> {{ Str::limit($post['body'], 150) }} </p>
    <a href="posts/{{ $post['id']}}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
  </article>
  @endforeach

</x-layout>
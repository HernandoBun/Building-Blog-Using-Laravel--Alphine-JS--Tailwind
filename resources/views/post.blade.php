<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  
  <article class="py-8 max-w-screen-md"> 
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{  $post['title'] }}</h2>
    <div> 
      <a href="#">{{  $post['author'] }}</a> | 25 May 2024
    </div class="textbase text-green-500">
    <p class="my-4 font-light"> {{ $post['body'] }} </p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to Posts</a>
  </article>


</x-layout>
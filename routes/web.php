<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Hernando Bun', 'title' => 'Contact']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'Hernando Bun',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Officia voluptates asperiores quis sequi. Iure ut tempora facere deserunt? 
            Assumenda eligendi temporibus harum incidunt tempore consectetur saepe minus deserunt dolorum consequatur!'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'Hernando Bun',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Officia voluptates asperiores quis sequi. Iure ut tempora facere deserunt? 
            Assumenda eligendi temporibus harum incidunt tempore consectetur saepe minus deserunt dolorum consequatur!'
        ]
    ]]);
});

Route::get('/posts/{id}', function($id) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'Hernando Bun',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Officia voluptates asperiores quis sequi. Iure ut tempora facere deserunt? 
            Assumenda eligendi temporibus harum incidunt tempore consectetur saepe minus deserunt dolorum consequatur!'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'Hernando Bun',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Officia voluptates asperiores quis sequi. Iure ut tempora facere deserunt? 
            Assumenda eligendi temporibus harum incidunt tempore consectetur saepe minus deserunt dolorum consequatur!'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($id){
        return $post['id'] == $id;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

<?php

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
            'title' => 'Judul Artikel 1',
            'author' => 'Hernando Bun',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Officia voluptates asperiores quis sequi. Iure ut tempora facere deserunt? 
            Assumenda eligendi temporibus harum incidunt tempore consectetur saepe minus deserunt dolorum consequatur!'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Hernando Bun',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Officia voluptates asperiores quis sequi. Iure ut tempora facere deserunt? 
            Assumenda eligendi temporibus harum incidunt tempore consectetur saepe minus deserunt dolorum consequatur!'
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

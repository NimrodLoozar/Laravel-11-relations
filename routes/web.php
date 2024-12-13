<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $user = App\Models\User::first();

    $post = $user->posts()->create([
        'title' => 'My first post',
        'content' => 'This is my first post content.',
        'user_id' => $user->id
    ]);

    $post->tags()->attach(1);

    return view('welcome');
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home')); //Min: PHP 7.4+
Route::view('contact', 'contact');
Route::view('about', 'about');
// Route::view('profile', 'profile');


// Option 1:
// Route::get('profile', function(Request $request) {
//     $name = $request->nami; // baseURL/profile?nami=Sayib
//     return view('profile', ['name' => $name]);
// });

// Option 2:
Route::get('profile/{username}', function($username) {
    return view('profile', ['name' => $username]); // baseURL/profile/Sayib
});

// Option 2.1: More binding
// Route::get('profile/{username}/{posts}', function($username, $posts) {
//     return view('profile', ['name' => $username, 'posts' => $posts]); // baseURL/profile/Sayib/posts
// });

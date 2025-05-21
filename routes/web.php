<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/downloads', function () {
    return view('downloadpage');
});

Route::get('/about', function () {
    return view('aboutus');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/wiki', function () {
    return view('wiki.installingESlauncher');
});

Route::get('/wiki/instances', function () {
    return view('wiki.instances');
});

Route::get('/wiki/java', function () {
    return view('wiki.java');
});

Route::get('/privacypolicy', function () {
    return view('privacy');
});

Route::get('/sponser', function () {
    return view('sponser');
});

Route::get('/successful-login', function () {
    return view('successfullogin');
});

Route::get('/feed/feed.xml', function () {
    $filePath = public_path('feed.xml');
    
    if (!file_exists($filePath)) {
        abort(404);
    }

    return response()->file($filePath, [
        'Content-Type' => 'application/xml'
    ]);
});

Route::get('/discord', function () {
    return redirect('https://discord.gg/MNXGnmnZaZ');
});
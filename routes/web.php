<?php

use Illuminate\Support\Facades\Route;
use LaraZeus\Sky\Http\Livewire\Page;
use LaraZeus\Sky\Http\Livewire\Post;
use LaraZeus\Sky\Http\Livewire\Posts;
use LaraZeus\Sky\Http\Livewire\Tags;

Route::prefix(config('zeus-sky.path'))
    ->middleware(config('zeus-sky.middleware'))
    ->group(function () {
        Route::get('/', Posts::class)->name('blogs');
        Route::get(config('zeus-sky.post_uri_prefix').'/{post:slug}', Post::class)->name('post');
        Route::get(config('zeus-sky.page_uri_prefix').'/{slug}', Page::class)->name('page');
        Route::get('{type}/{slug}', Tags::class)->name('tags');

        Route::get('passConf', function () {
            session()->put(request('postID').'-'.request('password'), request('password'));

            return redirect()->back()->with('status', 'sorry, password incorrect!');
        });
    });

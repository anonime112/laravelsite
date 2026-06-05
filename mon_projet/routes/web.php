<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::view('/menu', 'pages.menu')->name('menu');
Route::view('/reservation', 'pages.reservation')->name('reservation');
Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::view('/about', 'pages.about')->name('about');
Route::view('/blog', 'pages.blog')->name('blog');
Route::view('/blog-detail', 'pages.blog-detail')->name('blog.detail');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/cart', 'pages.cart')->name('cart');

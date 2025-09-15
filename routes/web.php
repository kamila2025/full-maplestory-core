<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Pages\Home::class)->name('home');
Route::get('/cases', \App\Livewire\Pages\Cases::class)->name('cases');
Route::get('/plans', \App\Livewire\Pages\Plans::class)->name('plans');
Route::get('/faqs', \App\Livewire\Pages\Faqs::class)->name('faqs');
Route::get('/contact', \App\Livewire\Pages\Contact::class)->name('contact');

Route::get('/users', \App\Livewire\Pages\Users::class)->name('users');

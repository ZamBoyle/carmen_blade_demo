<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/galerie', function () {
    return view('galerie');
})->name('galery');

Route::get('/histoire', function () {
    return view('histoire');
})->name('history');

Route::get('/soutenir', function () {
    return view('soutenir');
})->name('support');

Route::get('/organigramme', function () {
    return view('organigramme');
})->name('organigram');

Route::get('/objectifs', function () {
    return view('objectifs');
})->name('goals');
<?php

Route::group([
    'namespace' => 'App\Livewire'
],
function () {
    Route::get('/',  Home::class)->name('home');
});
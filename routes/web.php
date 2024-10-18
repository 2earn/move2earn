<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Waiting::class)->name('waiting');

<?php

use App\Livewire\Pages\Docs\Main;
use App\Livewire\Pages\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/docs', Main::class);


<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Cursos;
use App\Livewire\CreateCurso;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cursos',Cursos::class)->name('cursos');

Route::get('/curso/create', CreateCurso::class)->name('curso.create');
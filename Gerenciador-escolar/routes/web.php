<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', ['title' => 'EDU STATION']);
});

Route::group(['prefix' => 'login'], function(){
	Route::get('/direcao', function(){
		return view('forms.login', ['title' => 'DIREÇÃO WORKSTATION', 'direcao' => 'true']);
	})->name('login_direcao');

	Route::get('/docente', function(){
		return view('forms.login', ['title' => 'DOCENTE WORKSTATION']);
	})->name('login_docente');

	Route::get('/aluno', function(){
		return view('forms.login', ['title' => 'ALUNO(A) WORKSTATION']);
	})->name('login_aluno');
});



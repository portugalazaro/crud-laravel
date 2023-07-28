<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
    CRUD -> web api

    CREATE -> CRIAR DADOS ( X  )
    READ  -> LER DADOS ( x )
    UPDATE -> ATUALIZAR DADOS ( x )
    DELETE -> DELETAR DADOS ( x )
*/ 


Route::get('/post/create', [PostController::class, 'create']);
Route::get('/post/read/{id}', [PostController::class, 'read']);
Route::get('/post/all', [PostController::class, 'all']);
Route::get('/post/update/{id?}', [PostController::class, 'update']);
Route::get('/post/delete/all', [PostController::class, 'deleteAll']);
Route::get('/post/delete/{id?}', [PostController::class, 'delete']);

// o parametro {id?} ponto de interrogação na frente, torna o parametro opcional


Route::get('/teste', [PostController::class, 'index']);


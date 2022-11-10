<?php

use Illuminate\Support\Facades\Route;




Route::get('/posts',[Secando\Posts\Http\Controllers\PostController::class , 'index']);

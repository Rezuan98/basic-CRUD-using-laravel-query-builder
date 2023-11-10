<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\crud;


// show data and input data 

Route::get('/',[crud::class,'ShowData']);

// insert route
Route::post('/insert',[crud::class,'insert']);
// for delete
Route::get('/delete/{id}',[crud::class,'delete']);
// for edit
Route::get('/edit/{id}',[crud::class,'edit']);

// for update
Route::post('/update/{id}',[crud::class,'update']);
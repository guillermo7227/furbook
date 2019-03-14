<?php

Route::get('/', function() {
    return redirect('cats');
});

Route::get('cats', 'CatController@index');

Route::get('cats/create', ['as' => 'cats.create', 'uses' => 'CatController@create']);

Route::post('cats', 'CatController@store');

Route::get('cats/{cat}', 'CatController@show')
    ->name('cats._cat');
    // ->where('cat', '[0-9]+');

Route::get('cats/{cat}/edit', 'CatController@edit');

Route::put('cats/{cat}', 'CatController@update');

Route::delete('cats/{cat}', 'CatController@destroy');

Route::get('cats/breeds/{name}', 'CatController@showByBreed');


Route::get('about', 'AboutController@index');

<?php

Route::group(['middleware' => 'auth'], function () {
  Route::get('/', 'SnippetsController@index')->name('home');
  Route::get('/snippets/create', 'SnippetsController@create')->name('snippets.create');
  Route::get('/snippets/{snippet}', 'SnippetsController@show');
  Route::post('/snippets', 'SnippetsController@store');
  Route::get('/snippets/{snippet}/fork', 'SnippetsController@create');
});
Auth::routes();


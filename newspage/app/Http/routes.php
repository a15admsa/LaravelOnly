<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', 'PostController@index');

Route::get('/search', function () {
    return view('search');
});

Route::group(['middleware' => ['web']],  function(){

});
?>

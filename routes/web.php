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
    return view('welcome');
});

Route::get('/sermons', function () {
    return view('sermons');
});

Route::get('/getLatestSermons', function () {
    $return = array();
    $s = new stdClass();
    $s->title = 'test';
    $s->speaker = 'speaker';
    $s->date = 'date';
    $return[] = $s;
    $s = new stdClass();
    $s->title = 'test2';
    $s->speaker = 'speaker2';
    $s->date = 'date2';
    $return[] = $s;
    return $return;
});

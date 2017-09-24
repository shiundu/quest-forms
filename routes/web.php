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
// Route::resource('assessment', 'AssessmentController');
 // (index, edit, update, create, etc.)
//Route::get('/', 'QuestionnaireController');

Route::get('/prod', function () {
    return view('form');
});

Route::get('/', 'QuestionnaireController@index');

Route::resource('/questionnaire', 'QuestionnaireController');

Route::resource('/fill', 'FillController');

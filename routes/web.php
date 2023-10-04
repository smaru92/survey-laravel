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
use App\Mail\WelcomeMail;

Route::get('/email', function(){
    Mail::to('보낼 이메일 주소')->senc(new WelcomeMail());
    return new WelcomeMail();
});

//Route::group(array('before' => 'auth'), function() {

//Route::get('/', function () { return view('welcome'); });
Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout'); //로그아웃 route 선언해줘야함

//basic/product
Route::get('/basic/product', 'Basic\ProductController@index');
Route::get('/basic/product/create', 'Basic\ProductController@create');
Route::post('/basic/product', 'Basic\ProductController@store');

///////////////////////////////////////////////////////////////////////////////
// laravel 6 강의 예제 구현 목록
// 참고 영상 (Larave 6 Beginner)
// https://www.youtube.com/watch?v=eD4yMI-IR8g&list=PLpzy7FIRqpGC8Jk6gyWdSVdxCVXZAsenQ

//test
Route::get('/hello', 'HelloController@index');
Route::get('/about', 'HelloController@about');

//service
Route::get('/service', 'ServiceController@index');
Route::post('/service', 'ServiceController@store');

//customer
Route::get('/customer', 'CustomerController@index');
Route::get('/customer/create', 'CustomerController@create');
Route::post('/customer', 'CustomerController@store');
Route::get('/customer/{customer}', 'CustomerController@show');
Route::get('/customer/{customer}/edit', 'CustomerController@edit');
Route::patch('/customer/{customer}', 'CustomerController@update');
Route::delete('/customer/{customer}', 'CustomerController@destroy');
Auth::routes();

//home
Route::get('/home', 'HomeController@index')->name('home');

//questionnaire
Route::get('/questionnaire/create', 'QuestionnaireController@create');
Route::post('/questionnaire', 'QuestionnaireController@store');
Route::get('/questionnaire/{questionnaire}', 'QuestionnaireController@show');

//question
Route::get('/questionnaire/{questionnaire}/question/create', 'QuestionController@create');
Route::post('/questionnaire/{questionnaire}/question', 'QuestionController@store');
Route::delete('/questionnaire/{questionnaire}/question/{question}', 'QuestionController@destroy');

//survey
Route::get('/survey/{questionnaire}-{slug}', 'SurveyController@show');
Route::post('/survey/{questionnaire}-{slug}', 'SurveyController@store');
//////////////////////////////////////////////////////////////////////////////////////////////////
//});

// Here Routes that don't need Auth.
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

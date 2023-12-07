<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('index'); });
Route::get('/index', function () { return view('index'); });
Route::get('/services', function () { return view('services'); });
Route::get('/services/web-design', function () { return view('services.web-design'); });
Route::get('/services/seo', function () { return view('services.seo'); });
Route::get('/services/data', function () { return view('services.data'); });
Route::get('/services/content', function () { return view('services.content'); });
Route::get('/services/formation', function () { return view('services.formation'); });
Route::get('/services/design', function () { return view('services.design'); });
Route::get('/services/media', function () { return view('services.media'); });
Route::get('/services/social', function () { return view('services.social'); });
Route::get('/about', function () { return view('about'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/faq', function () { return view('faq'); });

//for testing purposes
Route::get('/test', function () { return view('test'); });

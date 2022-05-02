<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;

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
    return view('wel');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    $id = Auth::user()->admin;

    if ($id == 1) {
      $ex = DB::table('exams')->count();
      $us = DB::table('users')->count();
      return view('admin.index',compact('ex','us'));
    }else {
      return view('home');
    }

})->name('dashboard');


Route::Resource('exam','ExamController');
Route::Resource('quze','QuzeController');
Route::Resource('image','ImageController');
Route::Resource('adminv','AdminvController');

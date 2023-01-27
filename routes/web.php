<?php

use App\Http\Controllers\courses;
use App\Http\Controllers\questionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Route as RoutingRoute;

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
    return view('admin.dashboard');
});
Route::get('index',function(){
    return view('index');
});
Route::get('createcourse',function(){
    return view('admin.createcourse');
});
Route::get('/coursemanagement', [courses::class, 'getcourses']);
Route::get('profile',function(){
    return view('admin.profile');
});
Route::get('password',function(){
    return view('admin.changepassword');
});
Route::get('editcourse',function(){
    return view('admin.editcourse');
});
Route::get('viewvideo',function(){
    return view('admin.viewvideos');
});
Route::get('addquestion',function(){
    return view('admin.addquestion');
});
Route::get('singlequestion',function(){
    return view('admin.singlequestion');
});
Route::get('addvideo',function(){
    return view('admin.addvideo');
});
Route::get('viewquestion',function(){
    return view('admin.viewquestion');
});
Route::view('taketest', 'client.takeTest');
Route::view('correct', 'client.correction');
Route::view('index', 'client.index');

Route::get('/practice/{id}', [questionController::class, 'test']);
Route::get('/test', [questionController::class, 'test2']);

Route::get('/exam', [questionController::class, 'takeExam']);

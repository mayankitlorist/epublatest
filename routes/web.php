<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagController;

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

Route::get('/', [LoginController::class, 'indexpage']);
Route::get('loginpage', [LoginController::class, 'loginpage']);
Route::post('getschool', [LoginController::class, 'getschoolname']);
Route::post('adduser', [LoginController::class, 'adduser']);
Route::post('adduserbook', [LoginController::class, 'adduserbook']);
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout']);



Route::get('Home', [DashboardController::class, 'dashshow'])->middleware('AdminLogin');
Route::post('addbookreader', [DashboardController::class, 'addbookreader']);
Route::get('Upcoming_Books', [DashboardController::class, 'dashexp'])->middleware('AdminLogin');
Route::get('History', [DashboardController::class, 'dashnew'])->middleware('AdminLogin');
Route::get('Setting', [DashboardController::class, 'dashsoon'])->middleware('AdminLogin');
Route::post('categoryUpdate', [DashboardController::class, 'categoryUpdate']);


Route::post('import', [DashboardController::class, 'import']);
Route::post('schoolimport', [DashboardController::class, 'schoolimport']);




Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::get('/', [UserController::class, 'dashboard'])->middleware('AdminLogin');
    
    Route::get('bookCategory', [BookCategoryController::class, 'index'])->middleware('AdminLogin');
    Route::get('addCategory', [BookCategoryController::class, 'addcategory'])->middleware('AdminLogin');
    Route::post('addbookcategory', [BookCategoryController::class, 'addbookcategory']);
    Route::get('updatebook/{id}', [BookCategoryController::class, 'updatebook'])->middleware('AdminLogin');
    Route::post('updatebookcategory', [BookCategoryController::class, 'updatebookcategory']);
    Route::get('deletebook/{id}', [BookCategoryController::class, 'deletebook'])->middleware('AdminLogin');

    Route::get('school', [SchoolController::class, 'index'])->middleware('AdminLogin');
    Route::get('addSchool', [SchoolController::class, 'addSchool'])->middleware('AdminLogin');
    Route::post('addallschool', [SchoolController::class, 'addallschool']);
    Route::get('updateschool/{id}', [SchoolController::class, 'updateschool'])->middleware('AdminLogin');
    Route::post('updateallschool', [SchoolController::class, 'updateallschool']);
    Route::get('deleteschool/{id}', [SchoolController::class, 'deleteschool'])->middleware('AdminLogin');

    Route::get('book', [BookController::class, 'index'])->middleware('AdminLogin');
    Route::get('addBook', [BookController::class, 'addBook'])->middleware('AdminLogin');
    Route::post('addallbook', [BookController::class, 'addallbook']);
    Route::get('updatesinglebook/{id}', [BookController::class, 'updatesinglebook'])->middleware('AdminLogin');
    Route::post('updateallbook', [BookController::class, 'updateallbook']);
    Route::get('deletesinglebook/{id}', [BookController::class, 'deletesinglebook'])->middleware('AdminLogin');

    Route::get('teachers', [UserController::class, 'teachers'])->middleware('AdminLogin');
    Route::post('getteacher', [UserController::class, 'getteacher']);
    Route::post('deleteteacher', [UserController::class, 'deleteteacher']);
    Route::get('students', [UserController::class, 'students'])->middleware('AdminLogin');
    Route::post('getstudent', [UserController::class, 'getstudent']);

    Route::get('Tag', [TagController::class, 'index'])->middleware('AdminLogin');
    Route::get('addTag', [TagController::class, 'addTag'])->middleware('AdminLogin');
    Route::post('addtagdata', [TagController::class, 'addtagdata']);
    Route::get('updatetag/{id}', [TagController::class, 'updatetag'])->middleware('AdminLogin');
    Route::post('updatetagdata', [TagController::class, 'updatetagdata']);
    Route::get('deletetag/{id}', [TagController::class, 'deletetag'])->middleware('AdminLogin');

    
});

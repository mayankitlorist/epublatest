<?php

use App\Http\Controllers\API\ApiTokenController;
use App\Http\Controllers\API\CarBrandController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use App\Http\Controllers\API\ProfileController;
use App\Http\Controllers\API\SignUpController;
use App\Http\Controllers\Userlistcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/sanctum/login', [ApiTokenController::class, 'login']);
Route::post('/sanctum/signup', [SignUpController::class, 'signup']);
// Route::post('/forgot_password',[ProfileController::class, 'forgot_password']);
Route::post('/forgot_password', [ProfileController::class, 'forgot_password']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => 'auth:sanctum'], function () {
    //Profile
    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::post('/update', [ProfileController::class, 'update']);
        Route::post('/change_password', [ProfileController::class, 'change_password']);
        Route::post('/logout', [ProfileController::class, 'logout']);
        Route::post('/change_email', [ProfileController::class, 'change_email']);
        Route::get('/userprofile', [ProfileController::class, 'userprofile']);
        Route::post('/updateprofile', [ProfileController::class, 'updateprofile']);
    });

    Route::post('/addcar', [CarBrandController::class, 'addcar']);
    // Route::post('/addcar', [CarBrandController::class, 'addcar']);
    Route::get('/allCars', [CarBrandController::class, 'allCars']);
    Route::post('/filterCars', [CarBrandController::class, 'filterCars']);
    Route::get('/favoriteCar', [CarBrandController::class, 'favoriteCar']);
    Route::post('/favoriteMark', [CarBrandController::class, 'favoriteMark']);
    Route::get('/usercardetail', [CarBrandController::class, 'usercardetail']);
    Route::post('/editusercar', [CarBrandController::class, 'editusercar']);
    Route::post('/markassold', [CarBrandController::class, 'markassold']);
    Route::post('/carDetails', [CarBrandController::class, 'carDetails']);
    Route::post('/usersearchcar', [CarBrandController::class, 'usersearchcar']);
    Route::post('/usersearch', [CarBrandController::class, 'usersearch']);
    Route::post('/unfavoriteMark', [CarBrandController::class, 'unfavoriteMark']);
    Route::post('/sort_by', [CarBrandController::class, 'sortBy']);
    Route::get('/search_api', [CarBrandController::class, 'search_api']);
    Route::get('/searchhistory', [CarBrandController::class, 'searchhistory']);
    Route::post('/searchHistoryClear', [CarBrandController::class, 'searchHistoryClear']);
    Route::post('/reportIssue', [ProfileController::class, 'reportIssue']);

    Route::post('/compare_cars', [CarBrandController::class, 'comparecars']);
    Route::post('/deleteusercar', [CarBrandController::class, 'deleteusercar']);

    Route::get('search', [CarBrandController::class, 'search']);
    Route::post('publishStatus', [CarBrandController::class, 'publishStatus']);

    Route::post('favouritecriteria', [CarBrandController::class, 'favouritecriteria']);

    Route::post('update_token', [ApiTokenController::class, 'updatetoken']);

    Route::get('/allSubscribePlans', [ApiTokenController::class, 'allSubscribePlans']);
    Route::post('/paynow', [ApiTokenController::class, 'paynow']);
    Route::get('/checkSubscription', [SignUpController::class, 'checkSubscription']);
    Route::get('/userAllcards', [ApiTokenController::class, 'userAllcards']);
    Route::post('/removeCard', [SignUpController::class, 'removeCard']);

    Route::get('/all-notification', [CarBrandController::class, 'usernotification']);

    Route::post('/active-plan', [ApiTokenController::class, 'activeplan']);

    

});
Route::get('/pushNotification', [ApiTokenController::class, 'pushNotification']);

Route::get('/carbrand', [CarBrandController::class, 'getAllCarBrand']);
Route::post('/carModels', [CarBrandController::class, 'getCarModels']);
Route::post('/carSpecifications', [CarBrandController::class, 'carSpecifications']);

Route::get('payment',[Userlistcontroller::class,'payment']);

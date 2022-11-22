<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\HomeController;

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
Route::get('logout', function (){
    auth()->logout();
    Session()->flush(); return Redirect::to('/');
})->name('logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    //dashboard routes
    Route::get('/dashboard',[HomeController::class, 'index'] )->name('dashboard');
    Route::get('/dashboard/community', function () {return view('pages/community-page');})->name('community.page');

    //community routes
    Route::get('/community/{community_id}',[CommunityController::class, 'viewCommunity'] );
    Route::get('/community/create',[CommunityController::class, 'createCommunity'] );
    Route::post('/community/create',[CommunityController::class, 'postCreateCommunity'] );
    Route::get('/community/edit/{community_id}',[CommunityController::class, 'editCommunity'] );
    Route::post('/community/edit/{community_id}',[CommunityController::class, 'postEditCommunity'] );
});

//routes for google auth
Route::get('/google',[AuthController::class, 'redirectToGoogle'] );
Route::get('/google/callback',[AuthController::class, 'handdleGoogleCallBack'] );

// test route
Route::get('/test', function () {return view('pages/test');})->name('test');

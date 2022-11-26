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

    //community routes
    Route::get('/community/view/{community_id}',[CommunityController::class, 'viewCommunity'] )->name('community.page');
    Route::get('/community/create',[CommunityController::class, 'createCommunity'] )->name('create.community');
    Route::post('/community/create',[CommunityController::class, 'postCreateCommunity'] )->name('post.create.community');
    
});
Route::group(['middleware' => ['protectedEdit','auth']], function () {
    //COMMUNITY EDIT ACCDESS PAGES
    Route::get('/community/edit/{community_id}',[CommunityController::class, 'editCommunity'] )->name('edit.community');
    Route::post('/community/edit/{community_id}',[CommunityController::class, 'postEditCommunity'] )->name('community.page')->name('edit.community');
});

//routes for google auth
Route::get('/google',[AuthController::class, 'redirectToGoogle'] );
Route::get('/google/callback',[AuthController::class, 'handdleGoogleCallBack'] );

// test route
Route::get('/test', function () {return view('pages/test');})->name('test');

//contact us route
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contact-us');
Route::post('/contactus', [HomeController::class, 'contactusPost'])->name('contact-us');

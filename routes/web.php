<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;

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
})->name('welcome');
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
    Route::get('/community/team/view/{community_id}',[CommunityController::class, 'viewTeamCommunity'] )->name('view.team.community');

    //profile Routes
    Route::get('/user/{user_id}',[ProfileController::class, 'viewUser'] )->name('user.page');
    Route::get('/user/edit',[ProfileController::class, 'editUser'] )->name('user.edit');
    Route::post('/user/edit',[ProfileController::class, 'editUserPost'] )->name('user.edit');
    Route::get('/user/settings',[ProfileController::class, 'settingsUser'] )->name('user.settings');
    
});
Route::group(['middleware' => ['protectedEdit','auth']], function () {
    //COMMUNITY EDIT ACCDESS PAGES
    Route::get('/community/edit/{community_id}',[CommunityController::class, 'editCommunity'] )->name('edit.community');
    Route::post('/community/edit/{community_id}',[CommunityController::class, 'postEditCommunity'] )->name('edit.community');
    //community create and update team
    Route::get('/community/team/create/{community_id}',[CommunityController::class, 'createTeamCommunity'] )->name('create.team.community');
    Route::post('/community/team/create/{community_id}',[CommunityController::class, 'createTeamCommunityPost'] )->name('create.team.community');
    Route::get('/community/team/edit/{community_id}',[CommunityController::class, 'editTeamCommunity'] )->name('edit.team.community');
    Route::post('/community/team/edit/{community_id}',[CommunityController::class, 'editTeamCommunityPost'] )->name('edit.team.community');
});

//routes for google auth
Route::get('/google',[AuthController::class, 'redirectToGoogle'] );
Route::get('/google/callback',[AuthController::class, 'handdleGoogleCallBack'] );

// test route
Route::get('/test', function () {return view('pages/test');})->name('test');

//contact us route
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contact-us');
Route::post('/contactus', [HomeController::class, 'contactusPost'])->name('contact-us');


//blog routes
Route::get('/blog/create', [BlogController::class, 'contactus'])->name('blog.create');
Route::post('/blog/create', [BlogController::class, 'contactusPost'])->name('blog.create');
Route::get('/blog/edit/{blog_slug}', [BlogController::class, 'contactus'])->name('blog.edit');
Route::post('/blog/edit/{blog_slug}', [BlogController::class, 'contactusPost'])->name('blog.edit');

Route::get('/blog', [BlogController::class, 'contactus'])->name('blog');
Route::get('/blog/view/{blog_slug}', [BlogController::class, 'contactus'])->name('blog.view');



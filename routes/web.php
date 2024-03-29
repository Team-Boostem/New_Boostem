<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TeamCommunityController;


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
    Route::get('/community/create',[CommunityController::class, 'createCommunity'] )->name('create.community');
    Route::post('/community/create',[CommunityController::class, 'postCreateCommunity'] )->name('post.create.community');
    Route::get('/community/team/{username}',[CommunityController::class, 'viewTeamCommunity'] )->name('view.team.community');
    Route::get('/community/{username}',[CommunityController::class, 'viewCommunity'] )->name('community.page');

    //profile Routes
    Route::get('/profile/{username}',[ProfileController::class, 'viewProfile'] )->name('profile');
    Route::post('/profile/update/img', [ProfileController::class, 'updateProfileImg'])->name('profile.update.img');
    Route::post('/profile/update/banner', [ProfileController::class, 'updateProfileBanner'])->name('banner.update.img');
    Route::post('/profile/update/socials', [ProfileController::class, 'updateProfileSocials'])->name('profile.add.socials');
    Route::post('/profile/update/intrest', [ProfileController::class, 'updateProfileIntrest'])->name('profile.add.intrest');
    Route::post('/profile/update/skills', [ProfileController::class, 'updateProfileSkills'])->name('profile.add.skills');
    Route::post('/profile/update/edit', [ProfileController::class, 'updateProfileEdit'])->name('profile.edit');

    //blog routes
    Route::post('/blog/add_comment/{blog_slug}', [CommentController::class, 'addComment'])->name('comment.add');
    Route::get('/blog/remove_comment/{comment_id}', [CommentController::class, 'removeComment'])->name('comment.remove');
    Route::post('/blog/save', [SaveController::class, 'saveblog'])->name('blog.save');
    
});
Route::group(['middleware' => ['protectedEdit','auth']], function () {

    //COMMUNITY EDIT ACCDESS PAGES
    Route::get('/community/edit/{username}',[CommunityController::class, 'editCommunity'] )->name('edit.community');
    Route::post('/community/edit/{username}',[CommunityController::class, 'postEditCommunity'] )->name('edit.community');

    //community create and update team
    Route::get('/community/team/list/{username}',[TeamCommunityController::class, 'listTeamCommunity'] )->name('list.team.community');
    Route::get('/community/team/add/{username}',[TeamCommunityController::class, 'addTeamCommunity'] )->name('add.team.community');
    Route::post('/community/team/add/{username}',[TeamCommunityController::class, 'addTeamCommunityPost'] )->name('add.team.community');
    Route::get('/community/team/edit/{username}/{user}',[TeamCommunityController::class, 'editTeamCommunity'] )->name('edit.team.community');
    Route::post('/community/team/edit/{username}/{user}',[TeamCommunityController::class, 'editTeamCommunityPost'] )->name('edit.team.community');
    Route::post('/community/team/delete/{username}/{user}',[TeamCommunityController::class, 'deleteTeamCommunityPost'] )->name('delete.team.community');

    //blog routes
    Route::get('/blog/create/{username}', [BlogController::class, 'blogCreate'])->name('blog.create');
    Route::post('/blog/create/{username}', [BlogController::class, 'blogCreatePost'])->name('blog.create');
    Route::get('/blog/edit/{username}/{blog_slug}', [BlogController::class, 'blogEdit'])->name('blog.edit');
    Route::post('/blog/edit/{username}/{blog_slug}', [BlogController::class, 'blogEditPost'])->name('blog.edit');
    Route::get('/blog/delete/{username}/{blog_slug}', [BlogController::class, 'blogDelete'])->name('blog.delete');
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
Route::get('/blog', [BlogController::class, 'blogList'])->name('blog');
Route::get('/blog/view/{blog_slug}', [BlogController::class, 'blogView'])->name('blog.view');

//create event route
Route::get('/event/create/{username}', [EventController::class, 'eventCreate'])->name('event.create');
Route::post('/event/create/{username}', [EventController::class, 'eventCreatePost'])->name('event.create');
Route::get('/event/view/{event_slug}', [EventController::class, 'event'])->name('event');
Route::post('/event/view/{event_slug}', [EventController::class, 'eventPost'])->name('event');
//EVEN table route
Route::get('/event/table/{event_slug}', [EventController::class, 'eventTable'])->name('event.table');

//neawsletter route
Route::post('/newsletter/save', [NotificationController::class, 'saveNewsletter'])->name('newsletter.save');

//search route
Route::post('/search', [SearchController::class, 'search'])->name('search');

//image route

//subscribe route
Route::get('/subscribe/{username}', [CommunityController::class, 'subscribe'])->name('subscribe');









<?php
use App\Http\Controllers\BioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;



Route::get('about', function () {
    return view('pages.about');
});

Route::get('contact', function () {
    return view('pages.contact');
});



Route::get('post', [HomeController::class, 'postIndex']);
Route::get('post/{artistName}', [HomeController::class, 'postPage']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/supporting', [HomeController::class, 'supporting']);
Route::get('gao-videos', [VideoController::class, 'youtube']);
Route::get('album',[AlbumController::class, 'albumDetail']);
Route::get('artist-list',[AlbumController::class, 'artistList']);
Route::get('album-list/{artistName}',[AlbumController::class, 'albumList']);
Route::get('biography/{bioforArstist}', [BioController::class, 'bioDetails']);
Route::get('bio-list', [BioController::class, 'bioList']);
Route::post('add-comment', [BioController::class, 'makeComments']);
Route::post('add-post-comment', [HomeController::class, 'makeComments']);
Route::get('gao-gallery', [GalleryController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
Auth::routes();
Route::get('bio-remove/{artistName}', [AdminController::class, 'bioDelete']);
Route::get('create-account', [AdminController::class, 'createAccount']);
Route::post('add-user', [AdminController::class, 'addUser']);
Route::get('gao-post-form', [AdminController::class, 'postForm']);
Route::post('add-post', [AdminController::class, 'addPost']);
Route::get('/home', 'App\Http\Controllers\AdminController@index')->name('home')->middleware('auth');
Auth::routes();
Route::get('/update-bio', [AdminController::class , 'updateBio']);
Route::post('/add-youtube-link', [AdminController::class , 'addYoutubeLink']);
Route::get('/youtube-post', [AdminController::class , 'youtubePost']);
Route::get('/bio-post', [AdminController::class , 'bioPost']);
Route::post('/add-bio', [AdminController::class , 'addBio']);
Route::get('/gallery-post', [AdminController::class , 'galleryPost']);
Route::post('/add-gallery', [AdminController::class , 'addGallery']);
Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});



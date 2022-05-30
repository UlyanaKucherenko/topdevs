<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/posts', 'PostApiController@index')->name('api_posts');
Route::get('/three_random_posts', 'PostApiController@getThreeRandomPosts')->name('three_random_posts');
Route::get('/three_latest_posts', 'PostApiController@getThreeRandomPostsByDate')->name('three_latest_posts');
Route::get('/random_posts', 'PostApiController@getThreeRandomPostsForIndustry')->name('random_posts');
Route::get('/countries', 'CountryController')->name('countries');
#########################################  ADMIN  PANEL  #########################################
Route::post('/admin/login', 'Admin\AuthController@login')->name('login');
Route::post('/admin/logout', 'Admin\AuthController@logout')->name('logout')->middleware('auth:jwt');
Route::post('/admin/refresh', 'Admin\AuthController@refresh')->name('refresh')->middleware('auth:jwt');

Route::name('admin.')->prefix('/admin')->namespace('Admin')->middleware('auth:jwt')->group(function () {
    Route::name('posts.')->group(function () {
        Route::delete('/posts/{post}/delete', 'PostController@destroyForce')->name('destroyForce');
        Route::resource('posts', 'PostController')->except(['create','edit']);
    });
    Route::get('post_filters', 'PostController@filters')->name('post_filters');
    Route::get('portfolio_filters', 'PortfolioController@filters')->name('portfolio_filters');
    Route::resource('medias', 'MediaController')->except(['create','edit','update']);
    Route::resource('reviews', 'ReviewController')->except(['create','edit']);
    Route::resource('portfolio', 'PortfolioController')->except(['create','edit']);
    Route::resource('contacts', 'ContactsController')->only(['index','show', 'destroy']);
    Route::resource('tags', 'TagController')->only(['index', 'store', 'update', 'destroy']);
    Route::resource('category', 'CategoryController')->except(['create', 'edit', 'show']);
    Route::resource('technology', 'TechnologyController')->except(['create', 'edit', 'show']);

    Route::get('/countOfUnreadLetters', 'ContactsController@countOfUnreadLetters')->name('countOfUnreadLetters');
    Route::post('/readLetters/{contact}', 'ContactsController@readLetters')->name('readLetters');
    Route::post('/portfolio_order', 'PortfolioController@order')->name('portfolio_order');
});

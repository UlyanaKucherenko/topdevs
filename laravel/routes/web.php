<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('homePage');
Route::get('/company', 'HomeController@company')->name('company');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');

Route::view('/policy/cookies', 'policy.cookies');
Route::view('/policy/privacy', 'policy.privacy');
Route::view('/thank', 'thank');
Route::view('/conf', 'conf');
Route::view('/conf-thank', 'conf-thank');
Route::view('/resume', 'resume');

Route::get('sitemap.xml', 'HomeController@sitemap');

Route::post('/contactUs', 'HomeController@contactUs')->name('contactUs');
Route::post('/resume-send', 'HomeController@resumeSend')->name('resume-send');

Route::name('industries')->prefix('/industries')->group(function () {
    Route::get('/', 'IndustriesController@index')->name('index');
    Route::get('/dating-app-development', 'IndustriesController@indexDating')->name('dating');
    Route::get('/elearning-software-development', 'IndustriesController@indexEducationLearning')->name('education-e-learning');
    Route::get('/healthcare-software-development', 'IndustriesController@indexHealthcare')->name('healthcare');
    Route::get('/logistics-tracking-app-development', 'IndustriesController@indexLogisticsTracking')->name('logistics-tracking');
    Route::get('/media-entertainment-software-development', 'IndustriesController@indexMediaEntertainment')->name('media-entertainment');
    Route::get('/real-estate-app-development', 'IndustriesController@indexRealEstate')->name('real-estate');
    Route::get('/retail-ecommerce-software-development', 'IndustriesController@indexRetailEcommerce')->name('retail-e-commerce');
    Route::get('/sports-fitness-app-development', 'IndustriesController@indexSportsFitness')->name('sports-fitness');
});

Route::name('services.')->prefix('/services')->group(function () {
    Route::get('/', 'ServicesController@index')->name('index');
    Route::get('/it-outsourcing', 'ServicesController@indexOutsourcing')->name('it-outsourcing');
    Route::get('/it-outstaffing', 'ServicesController@indexOutstaffing')->name('it-outstaffing');
    Route::get('/full-cycle-development', 'ServicesController@indexFullCycle')->name('full-cycle-development');
    Route::get('/web-development', 'ServicesController@indexWeb')->name('web-development');
    Route::get('/mobile-app-development', 'ServicesController@indexMobile')->name('mobile-app-development');
    Route::get('/ui-ux-design', 'ServicesController@indexDesign')->name('uxui-design');
    Route::get('/mvp-development', 'ServicesController@indexMvp')->name('mvp');
});

Route::resource('/blog', 'PostController')->only(['index', 'show']);
Route::resource('/reviews', 'ReviewController')->only(['index', 'show']);

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/portfolio_list', 'PortfolioController@portfolioList')->name('portfolio_list');
Route::get('/portfolio_all', 'PortfolioController@portfolioAll')->name('portfolio_all');

Route::view('/portfolio/solocator-app', 'portfolio.solocator');
Route::view('/portfolio/beauty-streaming-service', 'portfolio.beauty');
Route::view('/portfolio/qliq-app', 'portfolio.qliq');
Route::view('/portfolio/realpage-app', 'portfolio.real');
Route::view('/portfolio/calibre-app', 'portfolio.calibre');
Route::view('/portfolio/meld-app', 'portfolio.meld');
Route::view('/portfolio/pet-monitoring-system', 'portfolio.pet');
Route::view('/portfolio/gerasyanov', 'portfolio.gera');
Route::view('/portfolio/gog-app', 'portfolio.gog');
Route::view('/portfolio/artv', 'portfolio.artv');
Route::view('/portfolio/autodeal-app', 'portfolio.deal');
Route::view('/portfolio/babelbark-app', 'portfolio.bark');
Route::view('/portfolio/helpy-app', 'portfolio.helpy');
Route::view('/portfolio/event-app', 'portfolio.event');
Route::view('/portfolio/dancebug', 'portfolio.dancebug');
Route::view('/portfolio/clothes-fit-app-case-study', 'portfolio.quick');
Route::view('/portfolio/easyphone-app-case-study', 'portfolio.easy');
Route::view('/portfolio/golf-training-app-case-study', 'portfolio.golf');
Route::get('/portfolio/24-7-billing-system-case-study', 'PortfolioController@indexAroundClock')->name('around-the-clock');

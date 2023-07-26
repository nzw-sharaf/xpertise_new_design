<?php

use Illuminate\Support\Facades\Artisan;
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

// clear chache route
Route::get('/clear-cache', function() {
    $exitCode    = Artisan::call('cache:clear');
    $config      = Artisan::call('config:cache');
    $view        = Artisan::call('view:clear');
    $optimize        = Artisan::call('optimize:clear');
    return "Cache is cleared";
 });

 /*******************
 * FRONTEND ROUTES  *
 *******************/

Route::namespace('App\Http\Controllers\Frontend')->group(function(){
    Route::any('/', 'HomeController@home')->name('home');
    Route::any('about-us', 'HomeController@aboutUs')->name('about-us');
    Route::any('contact-us', 'HomeController@contact')->name('contact-us');
    Route::any('privacy-policy', 'HomeController@privacyPolicy')->name('privacy-policy');
    Route::any('terms-conditions', 'HomeController@termsConditions')->name('terms-conditions');
    Route::any('thank-you', 'HomeController@thankYou')->name('thank-you');
    
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');

Route::group(['namespace' => 'App\Http\Controllers\Dashboard', 'prefix' => 'dashboard', 'middleware' => 'auth'], function() {
    Route::resource('roles', RoleController::class, ['as' => 'dashboard']);
    Route::resource('tags', TagController::class, ['as' => 'dashboard']);

    Route::get('careers/allApplicants', 'CareerController@allApplicants')->name('dashboard.careers.allApplicants');
    Route::get('careers/applicants/{applicant}', 'CareerController@singleApplicant')->name('dashboard.careers.singleApplicant');
    Route::delete('careers/applicants/{applicant}', 'CareerController@deleteApplicant')->name('dashboard.careers.applicant.destroy');


    Route::resource('careers', CareerController::class, ['as' => 'dashboard']);
    Route::get('careers/{career}/applicants', 'CareerController@applicants')->name('dashboard.careers.applicants');
    Route::get('careers/{career}/applicants/{applicant}', 'CareerController@singleCareerApplicant')->name('dashboard.careers.applicant');



    Route::resource('testimonials', TestimonialController::class, ['as' => 'dashboard']);
    Route::resource('services', ServiceController::class, ['as' => 'dashboard']);
    Route::resource('articles', ArticleController::class, ['as' => 'dashboard']);
    Route::resource('video-gallery', VideoGalleryController::class, ['as' => 'dashboard']);
    Route::resource('users', UserController::class, ['as' => 'dashboard']);

    Route::resource('leads', LeadController::class, ['as' => 'dashboard']);
    Route::get('profileSettings', 'ProfileSettingController@get')->name('dashboard.profileSettings');
    Route::put('profileSettings', 'ProfileSettingController@update')->name('dashboard.profileSettings.update');
    Route::get('bulk-sms', 'WebsiteSettingController@getSmsBulk')->name('dashboard.bulk-sms');
    Route::put('bulk-sms', 'WebsiteSettingController@updateSmsBulk')->name('dashboard.bulk-sms.update');
    Route::get('recaptcha-site-key', 'WebsiteSettingController@getRecaptchaSiteKey')->name('dashboard.recaptcha-site-key');
    Route::put('recaptcha-site-key', 'WebsiteSettingController@updateRecaptchaSiteKey')->name('dashboard.recaptcha-site-key.update');
    Route::get('social-info', 'WebsiteSettingController@getSocialInfo')->name('dashboard.social-info');
    Route::put('social-info', 'WebsiteSettingController@updateSocialInfo')->name('dashboard.social-info.update');
    Route::get('basic-info', 'WebsiteSettingController@getBasicInfo')->name('dashboard.basic-info');
    Route::put('basic-info', 'WebsiteSettingController@updateBasicInfo')->name('dashboard.basic-info.update');
    Route::resource('page-tags', PageTagController::class, ['as' => 'dashboard']);
});


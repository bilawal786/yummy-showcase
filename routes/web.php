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

Route::get('/', 'FrontendController@index')->name('front.index');
Route::get('/comm', 'FrontendController@comm')->name('front.comm');
Route::get('/terms', 'FrontendController@terms')->name('front.terms');
Route::get('/privacy', 'FrontendController@privacy')->name('front.policy');
Route::get('/advantage', 'FrontendController@advantage')->name('front.advantage');
Route::get('/contact', 'FrontendController@contact')->name('front.contact');
Route::get('/parrainage', 'FrontendController@parrainage')->name('front.parrainage');
Route::get('/ambass', 'FrontendController@ambass')->name('front.ambass');
Route::get('/coin', 'FrontendController@coin')->name('front.coin');
Route::get('/front/blog', 'FrontendController@blog')->name('front.blog');
Route::get('/single/post/{id}', 'FrontendController@singlePost')->name('single.post');
Route::get('/ambition', 'FrontendController@ambition')->name('front.ambition');
Route::get('/objective', 'FrontendController@objective')->name('front.objective');
Route::post('/contact/submit', 'FrontendController@contactSubmit')->name('contact.submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/blog', 'HomeController@blog')->name('admin.blog');
Route::get('/admin/pages', 'HomeController@pages')->name('admin.pages');
Route::get('/admin/privacy', 'HomeController@privacy')->name('admin.privacy');
Route::get('/admin/terms', 'HomeController@terms')->name('admin.terms');
Route::get('/admin/blog/delete/{id}', 'HomeController@blogdelete')->name('blog.delete');
Route::get('/blog/create', 'HomeController@blogcreate')->name('blog.create');
Route::get('/admin/contact', 'HomeController@contact')->name('admin.contact');
Route::get('/admin/advantage', 'HomeController@advantage')->name('admin.advantage');
Route::get('/admin/home', 'HomeController@home')->name('admin.home');
Route::get('/admin/settings', 'HomeController@settings')->name('admin.settings');
Route::get('/admin/objectifs', 'HomeController@objectifs')->name('admin.objectifs');
Route::get('/admin/ambitions', 'HomeController@ambitions')->name('admin.ambitions');
Route::post('/home/store', 'HomeController@homeStore')->name('home.store');
Route::post('/settings/store', 'HomeController@settingsStore')->name('settings.store');
Route::post('/advantage/store', 'HomeController@advantageStore')->name('advantage.store');
Route::post('/ambitions/store', 'HomeController@ambitionsStore')->name('ambitions.store');
Route::post('/objectifs/store', 'HomeController@objectifsStore')->name('objectifs.store');
Route::post('/blog/store', 'HomeController@blogStore')->name('blog.store');
Route::post('/terms/store', 'HomeController@termsStore')->name('terms.store');
Route::post('/privacy/store', 'HomeController@privacyStore')->name('privacy.store');
Route::post('/pages/store', 'HomeController@pagesStore')->name('pages.store');

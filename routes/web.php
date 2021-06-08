<?php

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
use Illuminate\Support\Facades\Route;


Route::get('/verify/{token}', 'Auth\RegisterController@verify')->name('register.verify');

Route::get('/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');

Route::group(['prefix' =>'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::get('/articleView/{id}', 'DashboardController@article')->name('admin.articleView');
    Route::resource('/article', 'ArticleController', ['as' => 'admin']);
    Route::resource('/user', 'UserController', ['as' => 'admin']);
});
//Route::delete('admin/article/destroy/{id}', 'Admin\ArticleController@destroy')->name('admin.article.destroy');



Route::group(['prefix' =>'editor', 'namespace' => 'Editor', 'middleware' => ['auth', 'editor']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('editor.index');
    Route::resource('/article', 'ArticleController', ['as' => 'editor']);
});

Route::group(['prefix' =>'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('user.index');
    Route::get('/articleView/{id}', 'DashboardController@article')->name('user.articleView');
    Route::resource('/article', 'ArticleController', ['as' => 'user']);
});

Route::group(['prefix' =>'userEditor', 'namespace' => 'UserEditor', 'middleware' => ['auth', 'userEditor']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('userEditor.index');
    Route::get('/articleView/{id}', 'DashboardController@article')->name('userEditor.articleView');
    Route::resource('/article', 'ArticleController', ['as' => 'userEditor']);
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

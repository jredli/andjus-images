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

use App\Mail\MyMail;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Mail;

Route::get('/', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('image/upload','HomeController@fileCreate')->name('image_create');
Route::post('image/upload/store','HomeController@fileStore')->name('image_store');
Route::post('image/delete','HomeController@fileDestroy')->name('image_destroy');
Route::get('image/list','HomeController@listImages')->name('image_list');


Route::get('image/delete_specific/{id}', ['uses' => 'HomeController@deleteImage'])->name('image_delete');
Route::get('image/edit/{id}', ['uses' => 'HomeController@editImage'])->name('image_edit');
Route::patch('image/update/{id}', ['uses' => 'HomeController@updateImage'])->name('image_update');


Route::get('email/form', 'HomeController@emailForm')->name('email.form');
Route::post('email/send', function(Request $request, Mailer $mailer) {
	$mailer->to($request->input('email'))->send(new MyMail($request->input('msg'), $request->input('name'), $request->input('email')));
	return redirect()->back();
})->name('email.send');
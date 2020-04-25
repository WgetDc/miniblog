<?php

// App\User::create([
//     'name'=>'mono',
//     'email'=>'mono@mono.cl',
//     'password'=>bcrypt('123'),
    
// ]);


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

Route::view('/', 'home')->name('home');

//Route::get('/b', 'BController@index')->name('b.index');

Route::resource('b', 'BController')->names('random')->parameters(['b'=>'hilo']);

    // Route::get('/b/crear', 'BController@create')->name('random.create');
    // Route::get('/b/{hilo}/editar', 'BController@edit')->name('random.edit');
    // Route::patch('/b/{hilo}', 'BController@update')->name('random.update');
    // Route::post('/b', 'BController@store')->name('random.store');
    // Route::get('/b/{hilo}', 'BController@show')->name('random.show');
    // Route::delete('/b/{hilo}', 'BController@destroy')->name('random.destroy');

Route::view('/fee', 'fee')->name('fee');
Route::view('/reglas', 'reglas')->name('reglas');
Route::view('/tra', 'tra')->name('tra');
Route::view('/contact', 'contact')->name('contact');

Route::get('/usuarios', 'UsersController@index')->name('users.index');

Route::post('contact', 'MessagesController@store');
Auth::routes();



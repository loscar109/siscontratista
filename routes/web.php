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

//Como no tengo home definido que me dirija al login
Route::get('/', function () {
    return view('auth/login');
});

//necesito por ahora hasta terminar los middleware
Route::get('configuracion/pais','PaisController@index');



Auth::routes();

//como no tengo home y quiero dirigir a una categoria o algo asi no ocupo
//Route::get('/home', 'HomeController@index')->name('home');

//necesario para que salga de la sesión
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

/*Routes
Route::middleware(['auth'])->group(function(){
    //Roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
        ->middleware('permission:roles.index');
        
    Route::get('roles/create', 'RoleController@create')->name('roles.create')
        ->middleware('permission:roles.create');

    Route::get('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
        ->middleware('permission:roles.show');
    
    Route::get('roles/{role}/edit', 'RoleController@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');
    
    Route::get('roles', 'RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');

    //Paises
    Route::post('paises/store', 'PaisController@store')->name('paises.store')
        ->middleware('permission:paises.create');

    Route::get('paises', 'PaisController@index')->name('paises.index')
        ->middleware('permission:paises.index');
        
    Route::get('paises/create', 'PaisController@create')->name('paises.create')
        ->middleware('permission:paises.create');

    Route::get('paises/{pais}', 'PaisController@update')->name('paises.update')
        ->middleware('permission:paises.edit');

    Route::get('paises/{pais}', 'PaisController@show')->name('paises.show')
        ->middleware('permission:paises.show');
    
    Route::get('paises/{pais}/edit', 'PaisController@destroy')->name('paises.destroy')
        ->middleware('permission:paises.destroy');
    
    Route::get('paises', 'PaisController@edit')->name('paises.edit')
        ->middleware('permission:paises.edit');

    //Users
    Route::post('users/store', 'UserController@store')->name('users.store')
        ->middleware('permission:users.create');

    Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('permission:users.index');
        
    Route::get('users/create', 'UserController@create')->name('users.create')
        ->middleware('permission:users.create');

    Route::get('users/{user}', 'UserController@update')->name('users.update')
        ->middleware('permission:users.edit');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
        ->middleware('permission:users.show');
    
    Route::get('users/{user}/edit', 'UserController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');
    
    Route::get('users', 'UserController@edit')->name('users.edit')
        ->middleware('permission:users.edit');
});*/

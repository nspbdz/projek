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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    //return view('welcome');
     return view('barang','barangController@index')->middleware('auth');
});
Route::get('excelinbarang','barangController@excel')->middleware('auth');
Route::get('pdfinbarang','barangController@pdf')->middleware('auth');
Route::get('/barang','barangController@index')->middleware('auth');
Route::delete('/barang','barangController@destroy')->middleware('auth');
route::resource('barang','barangController')->middleware('auth');  
// route::resource('pinjam','pinjamController');

route::get('/asrama','barangController@asrama')->middleware('auth');
route::get('/kelas','barangController@kelas')->middleware('auth');
route::get('/kantor','barangController@kantor')->middleware('auth');
route::get('/masjid','barangController@masjid')->middleware('auth');
route::get('/toilet','barangController@toilet')->middleware('auth');
route::get('/gudang','barangController@gudang')->middleware('auth');



// jenis controller
route::get('/jenis','jenisController@index')->middleware('auth');

route::resource('jenis','jenisController')->middleware('auth');;  


// lokasi controller
route::get('/lokasi','lokasiController@index')->middleware('auth');

route::resource('lokasi','lokasiController')->middleware('auth');  

// pengguna controller

route::get('/pengguna','penggunaController@index')->middleware('auth');

route::resource('pengguna','penggunaController')->middleware('auth');  

// pengguna Users

route::get('/users','usersController@index')->middleware('auth');

route::resource('users','usersController')->middleware('auth');  


// Route::get('/', function () {
//     //return view('welcome');
//      return view('layouts.home');
// });
Route::get('/home', function () {
    return view('home');
})->middleware('auth');
Route::get('/cara', function () {
    return view('cara');
})->middleware('auth');
Route::get('/', function () {
    return view('pinjam.index');
 })->middleware('auth');

Route::get('/', function () {
    return view('layouts.index');
 })->middleware('auth');


Route::get('/about', function () {
    return view('about');
})->middleware('auth');
Route::get('/profil', function () {
    return view('profil');
})->middleware('auth');
Route::get('/pembuat', function () {
    return view('pembuat');
})->middleware('auth');

Route::get('/kontak', function () {
    return view('kontak');
})->middleware('auth');

Route::get('/kontakt', function () {
    return view('kontakt');
})->middleware('auth');
Route::get('/index', function () {
    return view('layouts.index');
})->middleware('auth');

Auth::routes();





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

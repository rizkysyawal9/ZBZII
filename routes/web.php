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

Auth::routes();

//Route untuk view halaman Utama
Route::get('/', 'PageController@home')->name('home');
Route::post('/', 'CheckoutController@store')->name('checkout.store');

//Route untuk View Kategori Produk
Route::get('/Daily', 'DailyController@category')->name('daily.index');
//Route untuk view satuan produk dari kategori
Route::get('/Daily/{slug}', 'DailyController@show');
Route::get('/Casual', 'CasualController@category');
Route::get('/Casual/{slug}', 'CasualController@show');
Route::get('/Party', 'PartyController@category');
Route::get('/Party/{slug}', 'PartyController@show');


//Route untuk ke view Cart
Route::get('/cart', 'CartController@show')->name('cart.index');
Route::post('/cart/{product}', 'CartController@store')->name('cart.store');
Route::delete('/cart/{slug}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{slug}', 'CartController@update')->name('cart.update');
Route::get('/empty', function(){
    Cart::destroy();
    return redirect('/cart');
});



//Route For Admin 
Route::get('/zeener','Zeeners@index');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::get('/confirmation', 'PageController@confirmation')->name('confirmation');
Route::get('/about', 'PageController@about')->name('about');

Route::group(['middleware'=>'admin'], function(){
    Route::get('/admin', 'Zeeners@index')->name('admin.home');
    Route::get('/admin/create', 'Zeeners@create')->name('admin.create');
    Route::get('/admin/{id}/edit', 'Zeeners@edit')->name('admin.edit');
    Route::post('/admin','Zeeners@store')->name('admin.store');
    Route::put('/admin/{id}', 'Zeeners@update')->name('admin.update');
    Route::delete('/admin/{id}','Zeeners@destroy')->name('admin.delete');
    Route::put('/admin/{id}/update1', 'Zeeners@destroyImg2')->name('admin.del2');
    Route::put('/admin/{id}/update2', 'Zeeners@destroyImg3')->name('admin.del3');
    Route::put('/admin/{id}/update3', 'Zeeners@destroyImg4')->name('admin.del4');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/image', 'imageController@index');
Route::post('image-submit', 'imageController@store');
/*Route::get('/zeener/create', 'Zeeners@create')->name('admin.create');
Route::get('/zeener/{id}/edit', 'Zeeners@edit')->name('admin.edit');
Route::post('/zeener','Zeeners@store')->name('admin.store');
Route::put('/zeener/{id}', 'Zeeners@update')->name('admin.update');
Route::delete('/zeener/{id}','Zeeners@destroy')->name('admin.delete');*/

//Route::get('/single-product', 'PageController@single_product');
/*Route::get('/cart', 'PageController@cart')->name('cart');*/
// admin functionality
/*Route::GET('admin/dashboard', 'AdminController@dashboard');
Route::GET('admin/logout', 'Admin\LoginController@logout');
Route::GET('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin', 'Admin\LoginController@login');*/


//Route::get('/ProductType', 'PageController@ProductType')->name('ProductType');
//Route::get('/{type}', 'PageController@category');


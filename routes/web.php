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
Route::get('/mail', function(){
    $to_name="rizky syawal";
    $to_email="rizky.syawal9@gmail.com";
    $data=array("name"=>"Joseph Joestar", "body"=>"Test Mail");
    Mail::send('mail', $data, function($message) use ($to_name, $to_email){
        $message->to($to_email)->subject('Lara Mail Subject');
    });
});
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
Route::get('/guestCheckout', 'CheckoutController@index')->name('guestCheckout.index');
Route::get('/confirmation', 'PageController@confirmation')->name('confirmation');
Route::get('/about', 'PageController@about')->name('about');

Route::group(['middleware'=>'admin'], function(){
    Route::get('/admin', 'Zeeners@index')->name('admin.index');
    Route::get('/admin/create', 'Zeeners@create')->name('admin.create');
    Route::get('/admin/{id}/edit', 'Zeeners@edit')->name('admin.edit');
    Route::post('/admin','Zeeners@store')->name('admin.store');
    Route::put('/admin/{id}', 'Zeeners@update')->name('admin.update');
    Route::delete('/admin/{id}','Zeeners@destroy')->name('admin.delete');
    Route::put('/admin/{id}/update1', 'Zeeners@destroyImg2')->name('admin.del2');
    Route::put('/admin/{id}/update2', 'Zeeners@destroyImg3')->name('admin.del3');
    Route::put('/admin/{id}/update3', 'Zeeners@destroyImg4')->name('admin.del4');
    Route::get('/admin/orders', 'Zeeners@showOrders')->name('admin.orders');
    Route::get('/admin/orders/{id}', 'Zeeners@showSingleOrders')->name('admin.details');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/image', 'imageController@index');
Route::post('image-submit', 'imageController@store');

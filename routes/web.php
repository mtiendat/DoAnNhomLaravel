<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['prefix' => 'panel', 'namespace' => 'admin'], function() {

	Route::get('login','LoginController@getLogin')->name('getLogin');
	Route::post('login','LoginController@postLogin')->name('postLogin');
	Route::get('logout','LoginController@getLogout')->name('getLogout');
});

Route::group(['middleware' => 'CheckAdminLogin','prefix' => 'panel'], function() {
    Route::get('/', function() {return view('admin.layoutadmin');});
});

Route::group(['middleware' => 'CheckAdminLogin','prefix' => 'panel/user', 'namespace' => 'admin'], function() {
	Route::get('/', 'UserController@index')->name('user.index');
	Route::get('index','UserController@index')->name('user.index');
	Route::get('add','UserController@getadd')->name('user.getadd');
	Route::post('add','UserController@postadd')->name('user.postadd');
	Route::get('edit/{id}','UserController@getedit')->name('user.getedit');
	Route::post('edit/{id}','UserController@postedit')->name('user.postedit');
	Route::get('delete/{id}','UserController@delete')->name('user.delete');
});

Route::resource('panel/home', admin\HomeController::class);
Route::resource('panel/nhacungcap',admin\NhaCungCapController::class);
Route::resource('panel/category',admin\CategoryController::class);
Route::resource('panel/loaisp',admin\LoaispController::class);
Route::resource('panel/sanpham',admin\SanPhamController::class);
Route::resource('panel/hoadon',admin\HoaDonController::class);
Route::resource('panel/chitiethoadon',admin\ChiTietHoaDonController::class);
Route::resource('panel/danhmuc',admin\DanhMucController::class);
Route::resource('panel/user',admin\UserController::class);
Route::resource('panel/binhluan',admin\BinhLuanController::class);

Route::get('panel/loaisp/splist/{id}', 'admin\LoaispController@splist')->name('loaisp.splist');
Route::get('panel/nhacungcap/loaisplist/{id}','admin\NhaCungCapController@loaisplist')->name('nhacungcap.loaisplist');
Route::get('panel/hoadon/chitiethoadonlist/{id}', 'admin\HoaDonController@chitiethoadonlist')->name('hoadon.chitiethoadonlist');

Route::group(['prefix' => 'user', 'namespace' => 'user'], function() {
	Route::get('index','PageController@index')->name('user.index');
	Route::get('index_single','PageController@index_single')->name('user.index_single');
    Route::get('about','PageController@about')->name('user.about');
    Route::get('checkout','PageController@checkout')->name('user.checkout');
    Route::get('contact','PageController@contact')->name('user.contact');
	Route::get('smartphone/{id}','PageController@smartphone')->name('user.smartphone');
	Route::get('register','PageController@register')->name('user.register');
	Route::get('login','PageController@login')->name('user.login');
	Route::get('laptop','PageController@laptop')->name('user.laptop');
	Route::get('single/{id}','PageController@single')->name('user.single');

});


/*
GET	    /product	        		index	product.index
GET	    /product/create	    		create	product.create
POST	/product					store	product.store
GET		/product/{product}			show	product.show
GET		/product/{product}/edit		edit	product.edit
PUT/PATCH	/product/{product}		update	product.update
DELETE	/ product/{product}			destroy	product.destroy
*/

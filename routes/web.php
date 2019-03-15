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

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => ['isAdmin']], function() {
   
    //Anggota
    Route::get('/anggota/add','anggotacontrol@add');
    Route::post('/anggota/save','anggotacontrol@save');
    Route::get('/anggota/delete/{kd_anggota}','anggotacontrol@delete');
    Route::get('/anggota/edit/{kd_anggota}','anggotacontrol@edit');

    //penerbit
    Route::get('/penerbit/add','penerbitcontrol@add');
    Route::post('/penerbit/save','penerbitcontrol@save');
    Route::get('/penerbit/delete/{kd_penerbit}','penerbitcontrol@delete');
    Route::get('/penerbit/edit/{kd_penerbit}','penerbitcontrol@edit');

    //Buku
    Route::get('/buku/add','bukucontrol@add');
    Route::post('/buku/save','bukucontrol@save');
    Route::get('/buku/delete/{kd_anggota}','bukucontrol@delete');
    Route::get('/buku/edit/{kd_anggota}','bukucontrol@edit');

    //Koleksi

    Route::get('/koleksi/add','koleksicontrol@add');
    Route::post('/koleksi/save','koleksicontrol@save');
    Route::get('/koleksi/delete/{kd_anggota}','koleksicontrol@delete');
    Route::get('/koleksi/edit/{kd_anggota}','koleksicontrol@edit');


    //Transaksi
    Route::post('/trans/peminjaman','transaksicontroll@peminjaman');
    Route::get('/trans/peminjaman','transaksicontroll@peminjaman');
    Route::post('/trans/peminjaman/save','transaksicontroll@save');

    Route::get('/kategori','kategoricontrol@index');
    Route::get('/kategori/add','kategoricontrol@add');
    Route::post('/kategori/save','kategoricontrol@save');
    Route::get('/kategori/delete/{kd_kategori}','kategoricontrol@delete');
    Route::get('/kategori/edit/{kd_kategori}','kategoricontrol@edit');

    Route::get('/pengarang','pengarangcontrol@index');
    Route::get('/pengarang/add','pengarangcontrol@add');
    Route::post('/pengarang/save','pengarangcontrol@save');
    Route::get('/pengarang/delete/{kd_pengarang}','pengarangcontrol@delete');
    Route::get('/pengarang/edit/{kd_pengarang}','pengarangcontrol@edit');

    Route::get('/penerbit','penerbitcontrol@index');
    Route::get('/penerbit/add','penerbitcontrol@add');
    Route::post('/penerbit/save','penerbitcontrol@save');
    Route::get('/penerbit/delete/{kd_penerbit}','penerbitcontrol@delete');
    Route::get('/penerbit/edit/{kd_penerbit}','penerbitcontrol@edit');

    Route::get('/rak','rakcontrol@index');
    Route::get('/rak/add','rakcontrol@add');
    Route::post('/rak/save','rakcontrol@save');
    Route::get('/rak/delete/{kd_rak}','rakcontrol@delete');
    Route::get('/rak/edit/{kd_rak}','rakcontrol@edit');


    Route::get('/report/anggota','reportcontrol@rpt_anggota');
    Route::get('/report/qrcode_buku','reportcontrol@rpt_qrcode_buku');
    Route::get('/report/peminjaman','reportcontrol@rpt_peminjaman');

    Route::get('/dashboard','DashboardControl@jumlah_buku');

    Route::get('user','userscontrol@index');
    Route::get('user/add','userscontrol@add');
    Route::get('user/edit/{id}','userscontrol@edit');
    Route::post('user/save','userscontrol@save');
    Route::get('user/delete/{id}','userscontrol@delete');

});
Route::group(['middleware' => ['isOperator']], function() {

    Route::get('/anggota','anggotacontrol@index');

    //Buku
    Route::get('/buku','bukucontrol@index');
    Route::get('/koleksi','koleksicontrol@index');


    Route::post('/trans/peminjaman','transaksicontroll@peminjaman');
    Route::get('/trans/peminjaman','transaksicontroll@peminjaman');
    Route::post('/trans/peminjaman/save','transaksicontroll@save');

    //Transaksi
    Route::post('/trans/pengembalian','transaksicontroll@pengembalian');
    Route::get('/trans/pengembalian','transaksicontroll@pengembalian');
    Route::post('/trans/pengembalian/save','transaksicontroll@save_pengembalian');


    Route::get('/report/cetak','reportcontrol@cetak');
    Route::get('/report/cetak_anggota','reportcontrol@cetak_anggota');
   
});
Auth::routes();
Route::get('/logout','Auth\LoginController@logout');
Route::get('/profile','Auth\LoginController@profile');
Route::get('/dashboard','DashboardControl@jumlah_buku');
Route::get('/mobile/get_buku','MobileControl@get_Buku');
Route::get('/mobile/get_koleksi/{kd_buku}','MobileControl@get_Koleksi');
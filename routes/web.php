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
    return view('home');
})->name('home');
Route::get('/booklet',function () {
    return view('booklet');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/facility', function () {
    return view('fasilitas');
});

Route::get('/kreatif', function () {
    return view('team_kreatif');
});
Route::get('/profesi', function () {
    return view('team_profesi');
});

Route::get('/art', function () {
    return view('kreatif/art');
});
Route::get('/danus', function () {
    return view('kreatif/danus');
});
Route::get('/jurnal', function () {
    return view('kreatif/jurnal');
});
Route::get('/eo', function () {
    return view('kreatif/eo');
});

Route::get('/agro', function () {
    return view('profesi/agrokomplek');
});
Route::get('/bahasa', function () {
    return view('profesi/berbahasa');
});
Route::get('/komunikasi', function () {
    return view('profesi/komunikasi');
});

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
// Route::get('/add','RegisController@add')->name('add');
// Route::post('/add','RegisController@save');

// Route::get('/self2','SembakoController@self');
Route::get('/self','SembakoController@exportExcel');
Route::get('/terobosan','SembakoController@exportTerobosan');
Route::get('/se_ppm','SembakoController@exportSe_ppm');
Route::get('/bio','SembakoController@exportBiodata');

Route::group(['prefix'=>'admin','middleware'=>['auth']],function(){
    Route::get('/',function(){
        return view('admin.pages.dashboard');
    })->name('admin.home'); 

    Route::get('/jadwal',function(){
        return view('admin.pages.jadwal');
    })->name('admin.jadwal');

    Route::get('/home',function(){
        return view('home_first');
    })->name('admin.home_first')
    ;
    Route::get('/tertib', function () {
        return view('tatatertib');
    })->name('admin.tatatertib');
    
    /* User */
    Route::prefix('user')->group(function(){
        Route::get('/','UserController@daftar')->name('admin.user')->middleware('akses.admin');
        Route::get('/cari','UserController@cari_user')->name('admin.user.cari')->middleware('akses.admin');
        Route::delete('/','UserController@delete')->middleware('akses.admin');

        Route::get('/add','UserController@add')->name('admin.user.add')->middleware('akses.admin');
        Route::post('/add','UserController@save')->middleware('akses.admin');

        Route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')
                ->middleware('akses.admin');
        Route::post('/edit/{id}','UserController@update')
                ->middleware('akses.admin');

        Route::get('/setting','UserSettingController@form')->name('admin.user.setting');
        Route::post('/setting','UserSettingController@update');
    });
    /*Biodata*/
    Route::prefix('biodata')->group(function(){
        Route::get('/biodata','BiodataController@add')->name('admin.biodata')->middleware('akses.admin');
        Route::post('/biodata','BiodataController@save')->middleware('akses.admin');
        Route::get('/biodata/edit/{id}','BiodataController@edit')->name('admin.biodata.edit')
                ->middleware('akses.admin');
        Route::post('/biodata/edit/{id}','BiodataController@update')
                ->middleware('akses.admin');
        Route::get('/alldata','BiodataController@all_data')->name('admin.biodata.alldata')->middleware('akses.admin');
        Route::get('/datadiri','BiodataController@daftar')->name('admin.biodata.datadiri')->middleware('akses.admin');
        Route::get('/{id}','BiodataController@tampil_daftar')->name('admin.biodata.daftar')->middleware('akses.admin');
        Route::get('/{id}','BiodataController@tampil_daftar_uncomp')->name('admin.biodata.uncomp')->middleware('akses.admin');        
    });
    /*Booklet*/
    Route::prefix('booklet')->group(function(){
        Route::get('/','BookletController@daftar')->name('admin.booklet')->middleware('akses.admin');
        Route::get('/list','BookletController@list')->name('admin.booklet.list')->middleware('akses.admin');
        Route::get('/proses','BookletController@proses')->name('admin.booklet.proses')->middleware('akses.admin');
        Route::get('/edit/{id}','BookletController@edit')->name('admin.booklet.edit')
                ->middleware('akses.admin');
        Route::post('/edit/{id}','BookletController@update')
                ->middleware('akses.admin');
        Route::get('/acc/{id}','BookletController@acc_edit')->name('admin.booklet.acc')
                ->middleware('akses.admin');
        Route::post('/acc/{id}','BookletController@acc_update')
                ->middleware('akses.admin');
        Route::get('/add','BookletController@add')->name('admin.booklet.add')->middleware('akses.admin');
        Route::post('/add','BookletController@save')->middleware('akses.admin');
        Route::get('/facts','BookletController@facts')->name('admin.booklet.facts');
        Route::get('/tata_busana','BookletController@tata_busana')->name('admin.booklet.tata_busana');
        Route::get('/vmtt','BookletController@vmtt')->name('admin.booklet.vmtt');
        Route::get('/eval','BookletController@eval')->name('admin.booklet.eval')->middleware('akses.admin');
        Route::get('/{id}','BookletController@tampil_daftar')->name('admin.booklet.list_eval')->middleware('akses.admin');
    });
    /*Absen*/
    Route::group(['prefix'=>'absen','middleware'=>'akses.admin:sp_admin'],function(){
        Route::get('/','AbsenController@absen_user')->name('admin.absen');

        Route::get('/perminggu','AbsenController@perminggu')->name('admin.absen.perminggu');

        Route::get('/add','AbsenController@add');
        Route::get('/add/{id}','AbsenController@tambah_daftar')->name('admin.absen.add')->middleware('akses.admin');
        Route::post('/add/{id}','AbsenController@save');
        Route::get('/{id}','AbsenController@tampil_daftar')->name('admin.absen.daftar')->middleware('akses.admin');
        Route::delete('/','AbsenController@delete')->middleware('akses.admin');

        // Route::get('/absen', 'AbsenController@index')->name('admin.absen.export');
        Route::get('/absen/export_excel', 'AbsenController@export_excel')->name('admin.absen.export');
        Route::get('/sample/{id}','AbsenController@samplee')->name('admin.absen.sample');
        Route::get('/edit/{id}','AbsenController@edit')->name('admin.absen.edit')
                ->middleware('akses.admin');
        Route::post('/edit/{id}','AbsenController@update')
                ->middleware('akses.admin');

        Route::get('/cari','AbsenController@cari_absen')->name('admin.absen.cari')->middleware('akses.admin');
    });

    Route::group(['prefix'=>'target','middleware'=>'akses.admin:sp_admin'],function(){
        Route::get('/','TargetController@target_user')->name('admin.target');

        Route::get('/add','TargetController@add');
        Route::get('/add/{id}','TargetController@tambah_daftar')->name('admin.target.add')->middleware('akses.admin');
        // Route::post('/add/{id}','AbsenController@save');
        // Route::get('/{id}','AbsenController@tampil_daftar')->name('admin.absen.daftar')->middleware('akses.admin');
        // Route::post('/{id}','AbsenController@delete')->middleware('akses.admin');
    });
});


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::any('register',function(){
    return abort(404);
});

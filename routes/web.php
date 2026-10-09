<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get ('/hello',function (){
    return view ('pages.hello');

});

Route::get ('/profile',function (){
    return view ('pages.profile');

});

Route::get('/profil2', function () {
    return view('pages.profil2', [
        'nama'  => 'Arvin',
        'nim'   => '0000000000',
        'kelas' => 'TRM-00',
        'prodi' => 'Teknologi Rekayasa Multimedia',
    ]);
});

Route::get ('home',function (){
    return view ('pages.home');

});
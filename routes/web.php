<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/about',function() {
	return '<h1>Halo</h1>'
	.'Selamat datang di webapp saya<br>'
	.'Laravel, emang keren';
});
/*
Route::get('/kontak',function(){
	return view('kontak');
});


Route::get ('/about/1',function() {
	return '<h2>Halo</h2>'
	.'Selamat datang di webapp Kencana<br>'
	.'Laravel, emang keren';
});



Route::get ('/about/2',function() {
	return '<h3>Hai</h3>'
	.'Selamat datang di webapp Nenden<br>'
	.'Pakailah sesuai kebutuhan, ok';
});


Route::get ('/about/3',function() {
	return '<h4>Halo</h4>'
	.'Anda sedang mengunjungi webapp nenden<br>'
	.'Pakai sebaik mungkin';
});

Route::get ('/about/4',function() {
	return '<h5>Halo</h5>'
	.'Selamat datang di webapp saya<br>'
	.'Anda harus berhemat';
});


Route::get ('/about/5',function() {
	return '<h6>Halo</h6>'
	.'Selamat datang di webapp Astria<br>'
	.'Laravel, emang keren';
});


Route::get('/about/{id}', function($a){
	return 'Halo ini halaman <b>'.$a.'<b>';
});
*/

//Route parameter
Route::get('/kantin',function(){
	return view('user/kantin');
});


Route::get('/kantin/{nenden}/{astria}/{kencana}', function($a,$b,$c){
	return 'Saya pesan <b>'.$a.'</b> <br>'
	       .'Minumnya <b>' .$b.'</b> <br>'
	       .'Ditambah cemilan <b>' .$c.'</b>';
	     
});

//route optional parameter
Route::get('/user/{name?}', function($name = 'John'){
	return 'Nama saya <b>'.$name.'<b>';
});

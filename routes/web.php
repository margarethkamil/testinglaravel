<?php


Route::get('/', 'PagesController@inicio')->name('inicion');

Route::get('/detalle/{id}', 'PagesController@detalle')->name('notas.detalle');

Route::post('/', 'PagesController@crearnota')->name('crear.notan');

Route::get('fotos', 'PagesController@fotos')->name('foton');

Route::get('blog', 'PagesController@blog')->name('blogn');

Route::put('/editar/{id}', 'PagesController@update' )->name('notas.update');

Route::delete('eliminar/{id}','PagesController@eliminar')->name('notas.eliminar');

Route::get('nosotros/{nombre?}', 'PagesController@nosotros')-> name('nosotrosn');

Route::get('/editar/{id}', 'PagesController@editar')->name('notas.editar');

Route::get('/buscar', 'PagesController@buscar')->name('notas.buscar');


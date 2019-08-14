<?php 


Route::group(['namespace' => 'Cubet\Contact\Http\Controllers'],function(){
    Route::get('load','ContactController@index')->name('load');
    Route::post('send','ContactController@send')->name('send');
});

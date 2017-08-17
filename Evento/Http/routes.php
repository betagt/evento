<?php

Route::group(['middleware' => 'web', 'prefix' => 'evento', 'namespace' => 'Modules\Evento\Http\Controllers'], function()
{
    Route::get('/', 'EventoController@index');
});

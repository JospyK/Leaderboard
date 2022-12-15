<?php

Route::get('/race', 'Api\V1\Admin\CandidatApiController@race');

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Candidat
    Route::apiResource('candidats', 'CandidatApiController');
});

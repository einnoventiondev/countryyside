<?php

// Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
//     // Contact
//     Route::apiResource('contacts', 'ContactApiController');

//     // Request Form
//     Route::post('request-forms/media', 'RequestFormApiController@storeMedia')->name('request-forms.storeMedia');
//     Route::apiResource('request-forms', 'RequestFormApiController');
// });



    Route::resource('contacts', 'ApiContactController');
    Route::resource('requestform', 'ApiRequestFormController');

<?php

use Illuminate\Support\Facades\{Route, Auth};

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::group(["middleware" => "auth"], function()
{
    Route::get("/dashboard", ["as" => "dashboard", "uses" => "DashboardController@index"]);
    Route::post('/password/change', ['as' => 'password.change', 'uses' => 'UserController@password']);

    // Dashboard Settings
    Route::put('/dashboard/text/{parent_id}/{children_id}/update', ['as' => 'dashboard.text.update', 'uses' => 'DashboardController@update']);
    Route::put('/dashboard/img/{parent_id}/{children_id}/update', ['as' => 'dashboard.img.update', 'uses' => 'DashboardController@img']);
    Route::post('/dashboard/footer/update',['as' => 'footer.update', 'uses' => 'DashboardController@footer']);
});
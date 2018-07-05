<?php

Route::get('dashboard/settings', 'Admin\SettingsController@index');
Route::put('dashboard/settings', ['as' => 'dashboard.settings.update', 'uses' => 'Admin\SettingsController@update']);

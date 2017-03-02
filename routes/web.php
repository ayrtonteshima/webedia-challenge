<?php

Route::get('login', [
  'as' => 'login.form',
  'uses' => 'Auth\LoginController@login'
]);

Route::get('login/google', [
  'as' => 'login.google',
  'uses' => 'Auth\LoginController@redirectToProvider'
]);

Route::get('login/google/callback', [
  'as' => 'login.google.callback',
  'uses' => 'Auth\LoginController@handleProviderCallback'
]);

Route::get('logout', [
  'as' => 'admin.logout',
  'uses' => 'Auth\LoginController@logout'
]);

Route::group(['middleware' => 'auth'], function() {
  Route::get('admin', [
    'as' => 'admin.index',
    'uses' => 'Admin\AdminController@index'
  ]);
});
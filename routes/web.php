<?php

Auth::routes(['verify' => true]);
Route::get('/redirect-to', ['as' => 'redirect', 'uses' => 'Admin\UserController@redirectTo']);

// Social login
Route::get('/login/{social}','Auth\LoginController@socialLogin')->where('social','twitter|facebook|linkedin|google|github|bitbucket');
Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');

//Image resize & crop on view:  http://image.intervention.io/
Route::get('/resize/{w}/{h}',function($w=null, $h=null){
  $img = Illuminate\Support\Facades\Request::input("img");
  return \Image::make(public_path(urldecode($img)))->fit($w, $h, function ($constraint) {
      $constraint->upsize();
  })->response('jpg');
});

// Backend
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.',
    'middleware' => 'roles',
    'roles' => ['admin']
  ], function() {

    Route::get('/', ['uses' => 'PageController@index']);

    Route::resource('user', 'UserController');

    Route::resource('page', 'PageController');

    Route::get('block/{block}/setting', ['as' => 'block.setting', 'uses' => 'BlockController@setting']);
    Route::resource('block', 'BlockController');

});

// Frontend
Route::get('/', ['as' => 'front.index', 'uses' => 'FrontendController@index']);



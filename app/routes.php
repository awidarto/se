<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('pages.home');
});

Route::get('login',function(){

	return View::make('auth.login');

});

Route::get('signup',function(){

	Former::framework('TwitterBootstrap');

	return View::make('auth.signup');

});

Route::get('catalog',function(){

	Former::framework('TwitterBootstrap');

	return View::make('pages.catalog');

});

Route::get('testmongo',function(){

	$LMongo = LMongo::connection();

	$mongodb = $LMongo->getMongoDB();

	$collection_names = $mongodb->getCollectionNames();

	//var_dump($collection_names);

	//$users = LMongo::collection('users')->get();

	$user = new User();

	$users = $user->get();

	foreach ($users as $u)
	{
	    var_dump($u['fullname']);
	}

	$product = new Product();

	$products = $product->get();

	foreach ($products as $p)
	{
	    var_dump($p['name']);
	}

});
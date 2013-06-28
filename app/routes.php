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

Route::get('hashme/{mypass}',function($mypass){

    print Hash::make($mypass);
});


Route::get('login',function(){

	return View::make('auth.login');

});

Route::post('login',function(){

	$username = Input::get('username');
    $password = Input::get('password');

    if ( $userdata = Auth::attempt(array('username'=>$username, 'password'=>$password)) )
    {
        //print_r($userdata);
        // we are now logged in, go to home
        return Redirect::to('/');

    }
    else
    {
        // auth failure! lets go back to the login
        return Redirect::to('login')
            ->with('login_errors', true);
        // pass any error notification you want
        // i like to do it this way  
    }

});

Route::get('logout',function(){
    Auth::logout();
    return Redirect::to('/');
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
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//$setting = App\Http\Controllers\Settings::set();
define('ad', 'admin');
define('ADMIN', 'cpanel');
//define('tmp', 'theam.defulte');
define('ASSET',url('resources/views/admin/style'));
//define('THEAM',url('resources/views/theam/defulte'));
//define('SITENAME',$setting->sitename);

Route::group(['middleware'=>'MyAuth'],function(){


Route::group(['middleware'=>'IsAdmin'],function(){
	Route::get(ADMIN.'/settings','Settings@main');
	Route::post(ADMIN.'/settings','Settings@mainsave');
	Route::resource(ADMIN.'/catogres','Catogres');
	Route::resource(ADMIN.'/offices','Offices');
	Route::resource(ADMIN.'/users','Users');
	Route::resource(ADMIN.'/order_cat','Oreder_Cat');
	Route::resource(ADMIN.'/archives','Archives');
});

Route::get(ADMIN,'Admin@index');
Route::get(ADMIN.'/logout','Admin@logout');

Route::get('/','Home@Home');
Route::get(ADMIN.'/donations/{id}/del','Donations@getDelete');
Route::post(ADMIN.'/donations/{id}/del','Donations@postDelete');
Route::resource(ADMIN.'/donations','Donations');
Route::get(ADMIN.'/donations/{id}/voacher','Donations@printDomation');
Route::resource(ADMIN.'/order','OrderController');





});




//Route::get('login','Users@login_register');


Route::get(ADMIN.'/login','Admin@login');
Route::post(ADMIN.'/login','Admin@postlogin');


Route::group([ 'prefix' => 'api'], function ()
{
    Route::post('qlogin','MobileWebservice@Login');
	Route::get('qAllDonations','MobileWebservice@getDonations');
    Route::post('qNewDonation','MobileWebservice@createDonation');
});
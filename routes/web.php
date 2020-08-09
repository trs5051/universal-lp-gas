<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.index');
// });


// frontend
Route::get('/','IndexController@index')->name('frontend.index');
Route::get('/about','AboutController@index')->name('frontend.about');
Route::get('/mission-and-vission','MissionVisionController@index')->name('frontend.mission-and-vission');
Route::get('/universal-lp-gas','UniversalLPGasController@index')->name('frontend.universal-lp-gas');
Route::get('/board-of-directors','DirectorController@index')->name('frontend.board-of-directors');
Route::get('/management','ManagementController@index')->name('frontend.management');
Route::get('/universal-agency','UniversalAgencyController@index')->name('frontend.universal-agency');
Route::get('/ms-enterprise','MsEnterpriseController@index')->name('frontend.ms-enterprise');
Route::get('/universal-gas-cylinder','UniversalGasCylinderController@index')->name('frontend.universal-gas-cylinder');
Route::get('/amb-traders-pvt','AmbTradersPvtController@index')->name('frontend.amb-traders-pvt');
Route::get('/us-energy-power-pvt','UsEnergyPowerPvtController@index')->name('frontend.us-energy-power-pvt');
Route::get('/universal-cng-petrol-pump','UniversalCngPetrolPumpController@index')->name('frontend.universal-cng-petrol-pump');
Route::get('/universal-engineering-ltd','UniversalEngineeringLtdController@index')->name('frontend.universal-engineering-ltd');
Route::get('/product','ProductController@index')->name('frontend.product');
Route::get('/cylinder-safety','CylinderSafetyController@index')->name('frontend.cylinder-safety');
Route::get('/plants','PlantController@index')->name('frontend.plants');
Route::get('/compliance','ComplianceController@index')->name('frontend.compliance');
Route::get('/why-lpg','WhyLpgController@index')->name('frontend.why-lpg');
Route::get('/distribution','DistributionController@index')->name('frontend.distribution');
Route::get('/news-events','NewsEventController@index')->name('frontend.news-events');
Route::get('/contact','ContactController@index')->name('frontend.contact');



Route::get('/projects','ProductController@product')->name('frontend.products');
// frontend

// backend
Route::get('/profile','HomeController@getProfile');
Route::post('/change/password','HomeController@changePassword');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('backend-home');
Route::get('/settings','SettingController@settings')->name('backend-settings');
Route::get('/header-footer','SettingController@headerFooter')->name('backend-header-footer');
Route::post('/header-footer/update','SettingController@headerFooterUpdate')->name('update-hearder-footer');
// backend



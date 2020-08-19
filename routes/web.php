<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.index');
// });
//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    // $exitCode = Artisan::call('optimize');
    // $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('config:cache');
    return '<h1>cache route view cleared optimize</h1>';
});

// frontend
Route::get('/','IndexController@index')->name('frontend.index');
Route::get('/about','AboutController@index')->name('frontend.about');
Route::get('/mission-and-vision','MissionVisionController@index')->name('frontend.mission-and-vision');
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
// frontend end


// backend
Route::get('/profile','HomeController@getProfile');
Route::post('/change/password','HomeController@changePassword');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('backend-home');
Route::get('/settings','SettingController@settings')->name('backend-settings');
Route::get('/header-footer','SettingController@headerFooter')->name('backend.header-footer');
Route::post('/header-footer/update','SettingController@headerFooterUpdate')->name('update-hearder-footer');

// front slider
Route::get('/front-slider','FrontSliderController@index')->name('backend.front-slider');
Route::get('/front-slider-create','FrontSliderController@create')->name('front-slider.create');
Route::post('/front-slider-store','FrontSliderController@store')->name('front-slider.store');
Route::post('/front-slider-destroy','FrontSliderController@destroy')->name('front-slider.destroy');

// our proud
Route::get('/our-proud','OurProudController@index')->name('backend.our-proud');
Route::post('/our-proud-store','OurProudController@store')->name('ourproud.store');

// OUR BUSINESS CONCERN
Route::get('/our-business-concern','InformationController@businessConcern')->name('backend.our-business-concern');
Route::post('/our-business-concern-update','InformationController@businessConcernUpdate')->name('our-business-concern.update');

// sustainability
Route::get('/sustainability','OurProudController@sustainability')->name('backend.sustainability');
Route::post('/sustainability-store','OurProudController@sustainabilityStore')->name('sustainability.store');

// about us
Route::get('/about-us','InformationController@aboutUs')->name('backend.about-us');
Route::post('/about-us-update','InformationController@informationUpdate')->name('aboutUs.store');

// mission-vision
Route::get('/mission-vision','ConcernController@missionVission')->name('backend.mission-vision');
Route::post('/mission-vision-update','ConcernController@concernUpdate')->name('mission-vision.update');

// universal-lp-gas
Route::get('/universal/lp/gas','ConcernController@universalLpGas')->name('backend.universal-lp-gas');
Route::post('/universal/lp/gas/update','ConcernController@concernUpdate')->name('universal-lp-gas.update');

// directors
Route::get('/directors','InformationController@directors')->name('backend.directors');
Route::get('/directors/update','InformationController@informationUpdate')->name('directors.update');






// backend end





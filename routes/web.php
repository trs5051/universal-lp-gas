<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.index');
// });
//Clear Cache facade value:
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    // $exitCode = Artisan::call('optimize');
    // $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('config:cache');
    return '<h1>cache route view cleared optimize</h1>';
});

// frontend
Route::get('/', 'IndexController@index')->name('frontend.index');
Route::get('/about', 'AboutController@index')->name('frontend.about');
Route::get('/mission-and-vision', 'MissionVisionController@index')->name('frontend.mission-and-vision');
Route::get('/universal-lp-gas', 'UniversalLPGasController@index')->name('frontend.universal-lp-gas');
Route::get('/board-of-directors', 'DirectorController@index')->name('frontend.board-of-directors');
Route::get('/management', 'ManagementController@index')->name('frontend.management');
Route::get('/universal-agency', 'UniversalAgencyController@index')->name('frontend.universal-agency');
Route::get('/ms-enterprise', 'MsEnterpriseController@index')->name('frontend.ms-enterprise');
Route::get('/universal-gas-cylinder', 'UniversalGasCylinderController@index')->name('frontend.universal-gas-cylinder');
Route::get('/amb-traders-pvt', 'AmbTradersPvtController@index')->name('frontend.amb-traders-pvt');
Route::get('/us-energy-power-pvt', 'UsEnergyPowerPvtController@index')->name('frontend.us-energy-power-pvt');
Route::get('/universal-cng-petrol-pump', 'UniversalCngPetrolPumpController@index')->name('frontend.universal-cng-petrol-pump');
Route::get('/universal-engineering-ltd', 'UniversalEngineeringLtdController@index')->name('frontend.universal-engineering-ltd');
Route::get('/product', 'ProductController@index')->name('frontend.product');
Route::get('/cylinder-safety', 'CylinderSafetyController@index')->name('frontend.cylinder-safety');
Route::get('/plants', 'PlantController@index')->name('frontend.plants');
Route::get('/compliance', 'ComplianceController@index')->name('frontend.compliance');
Route::get('/why-lpg', 'WhyLpgController@index')->name('frontend.why-lpg');
Route::get('/distribution', 'DistributionController@index')->name('frontend.distribution');
Route::get('/news-events', 'NewsEventController@index')->name('frontend.news-events');
Route::get('/contact', 'ContactController@index')->name('frontend.contact');
Route::get('/projects', 'ProductController@product')->name('frontend.products');
// frontend end

Auth::routes();

Route::group(['middleware' => ['web','auth']], function () {

// backend

    Route::get('/profile', 'HomeController@getProfile');
    Route::post('/change/password', 'HomeController@changePassword');

    Route::get('/home', 'HomeController@index')->name('backend-home');
    Route::get('/settings', 'SettingController@settings')->name('backend-settings');
    Route::get('/header-footer', 'SettingController@headerFooter')->name('backend.header-footer');
    Route::post('/header-footer/update', 'SettingController@headerFooterUpdate')->name('update-hearder-footer');

    // front slider
    Route::get('/backend/home/front-slider', 'FrontSliderController@index')->name('backend.front-slider');
    Route::get('/backend/home/front-slider-create', 'FrontSliderController@create')->name('front-slider.create');
    Route::post('/front-slider-store', 'FrontSliderController@store')->name('front-slider.store');
    Route::post('/front-slider-destroy', 'FrontSliderController@destroy')->name('front-slider.destroy');

    // our proud
    Route::get('/backend/home/our-proud', 'OurProudController@index')->name('backend.our-proud');
    Route::post('/our-proud-store', 'OurProudController@store')->name('ourproud.store');

    // OUR BUSINESS CONCERN
    Route::get('/backend/home/our-business-concern', 'InformationController@businessConcern')->name('backend.our-business-concern');
    Route::post('/our-business-concern-update', 'InformationController@informationUpdate')->name('our-business-concern.update');

    // sustainability
    Route::get('/backend/home/sustainability', 'OurProudController@sustainability')->name('backend.sustainability');
    Route::post('/sustainability-store', 'OurProudController@sustainabilityStore')->name('sustainability.store');

    // about us
    Route::get('/backend/about/about-us', 'InformationController@aboutUs')->name('backend.about-us');
    Route::post('/about-us-update', 'InformationController@informationUpdate')->name('aboutUs.store');

    // mission-vision
    Route::get('/backend/about/mission-vision', 'ConcernController@missionVission')->name('backend.mission-vision');
    Route::post('/mission-vision-update', 'ConcernController@concernUpdate')->name('mission-vision.update');

    // universal-lp-gas
    Route::get('/backend/about/universal/lp/gas', 'ConcernController@universalLpGas')->name('backend.universal-lp-gas');
    Route::post('/universal/lp/gas/update', 'ConcernController@concernUpdate')->name('universal-lp-gas.update');

    // directors
    Route::get('/backend/about/directors', 'InformationController@directors')->name('backend.directors');
    Route::post('/directors/update', 'InformationController@informationUpdate')->name('directors.update');

    // backend.universal-Agency
    Route::get('/backend/concern/universal/agency', 'ConcernController@universalAgency')->name('backend.universal-Agency');
    Route::post('/universal/agency/update', 'ConcernController@concernUpdate')->name('universal-Agency.update');

    // backend.ms-Enterprise
    Route::get('/backend/concern/ms/enterprise', 'ConcernController@msEnterprise')->name('backend.ms-Enterprise');
    Route::post('/ms/enterprise/update', 'ConcernController@concernUpdate')->name('ms-Enterprise.update');

    // backend.universal-gas-cylinder-ltd
    Route::get('/backend/concern/universal/gas/cylinder/ltd', 'ConcernController@universalGasCylinderLtd')->name('backend.universal-gas-cylinder-ltd');
    Route::post('/universal/gas/cylinder/ltd/update', 'ConcernController@concernUpdate')->name('universal-gas-cylinder-ltd.update');

    // backend.amb-traders
    Route::get('/backend/concern/amb/traders', 'ConcernController@ambTraders')->name('backend.amb-traders');
    Route::post('/amb/traders/update', 'ConcernController@concernUpdate')->name('amb-traders.update');

    // backend.us-energy-power
    Route::get('/backend/concern/us/energy/power', 'ConcernController@usEnergyPower')->name('backend.us-energy-power');
    Route::post('us/energy/power/update', 'ConcernController@concernUpdate')->name('us-energy-power.update');

    // backend.universal-cng-petrol-pump
    Route::get('/backend/concern/universal/cng/petrol/pump', 'ConcernController@universalCngPetrolPump')->name('backend.universal-cng-petrol-pump');
    Route::post('/universal/cng/petrol/pump/update', 'ConcernController@concernUpdate')->name('universal-cng-petrol-pump.update');

    // backend.universal-engineering-ltd
    Route::get('/backend/concern/universal/engineering/ltd', 'ConcernController@universalEngineeringLtd')->name('backend.universal-engineering-ltd');
    Route::post('/universal/engineering/ltd/update', 'ConcernController@concernUpdate')->name('universal-engineering-ltd.update');

    // backend.plants
    Route::get('/backend/plant-process/plants', 'PlantController@plants')->name('backend.plants');
    Route::get('/backend/plants/create', 'PlantController@create')->name('plants.create');
    Route::post('/backend/plants/store', 'PlantController@store')->name('plants.store');
    Route::get('/backend/plants/findOne', 'PlantController@findOne')->name('plantfindOne');
    Route::post('/backend/plants/update', 'PlantController@update')->name('plants.update');
    Route::post('/backend/plants/destroy', 'PlantController@destroy')->name('plant.destroy');

    // backend.compliance
    Route::get('/backend/plant-process/backend/compliance', 'InformationController@compliance')->name('backend.compliance');
    Route::post('/backend/compliance/update', 'InformationController@informationUpdate')->name('compliance.update');

    // backend.whyLPG
    Route::get('/backend/plant-process/backend/whyLPG', 'InformationController@whyLPG')->name('backend.whyLPG');
    Route::post('/backend/whyLPG/update', 'InformationController@informationUpdate')->name('whyLPG.update');

    // backend.contact
    Route::get('/backend/contact', 'ContactController@contact')->name('backend.contact');
    Route::post('/backend/contact/update', 'ContactController@contactUpdate')->name('contact.update');

    // backend.cylinderSafety
    Route::get('/backend/plant-process/backend/cylinderSafety', 'CylinderSafetyController@cylinderSafety')->name('backend.cylinderSafety');
    Route::post('/backend/cylinderSafety/update', 'CylinderSafetyController@cylinderSafetyUpdate')->name('cylinderSafety.update');

    // backend.product
    Route::get('/backend/product', 'ProductController@product')->name('backend.product');
    Route::post('/backend/product/store', 'ProductController@store')->name('product.store');
    Route::get('/backend/product/findOne', 'ProductController@findOne')->name('findOne.Product');
    Route::post('/backend/product/update', 'ProductController@update')->name('product.update');
    Route::post('/backend/product/destroy', 'ProductController@destroy')->name('product.destroy');

    // backend.product.category
    Route::get('/backend/product/category', 'ProductCategoryController@productCategory')->name('backend.product.category');
    Route::post('/product/category/store', 'ProductCategoryController@store')->name('productCategory.store');
    Route::get('/product/category/findOne', 'ProductCategoryController@findOne')->name('findOne.productCategory');
    Route::post('/product/category/update', 'ProductCategoryController@update')->name('productCategory.update');
    Route::post('/product/category/destroy', 'ProductCategoryController@destroy')->name('productCategory.destroy');

    // backend.management.category
    Route::get('/backend/management/category', 'ManagementCategoryController@managementCategory')->name('backend.management.category');
    Route::post('/management/category/store', 'ManagementCategoryController@store')->name('managementCategory.store');
    Route::get('/management/category/findOne', 'ManagementCategoryController@findOne')->name('findOne.managementCategory');
    Route::post('/management/category/update', 'ManagementCategoryController@update')->name('managementCategory.update');
    Route::post('/management/category/destroy', 'ManagementCategoryController@destroy')->name('managementCategory.destroy');

    // backend.management
    Route::get('/backend/management', 'ManagementController@management')->name('backend.management');
    Route::post('/backend/management/store', 'ManagementController@store')->name('management.store');
    Route::get('/backend/management/findOne', 'ManagementController@findOne')->name('findOne.management');
    Route::post('/backend/management/update', 'ManagementController@update')->name('management.update');
    Route::post('/backend/management/destroy', 'ManagementController@destroy')->name('management.destroy');

    // backend.event
    Route::get('/backend/event', 'NewsEventController@event')->name('backend.event');
    Route::get('/backend/event/create', 'NewsEventController@create')->name('event.create');
    Route::get('/backend/event/edit/{id}', 'NewsEventController@edit')->name('event.edit');
    Route::post('/backend/event/store', 'NewsEventController@store')->name('event.store');
    Route::get('/backend/event/findOne', 'NewsEventController@findOne')->name('findOne.event');
    Route::post('/backend/event/update', 'NewsEventController@update')->name('event.update');
    Route::post('/backend/event/destroy', 'NewsEventController@destroy')->name('event.destroy');

    // Store image
Route::post('/image-upload', 'NewsEventController@fileUpload')->name('imageUpload');


// backend end

});

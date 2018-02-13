<?php
//Home Page
Route::get('','SiteController@index')->name('home');

//About Us Page
Route::get('about','SiteController@about')->name('about');

//Packages
Route::prefix('packages')->group(function(){
    Route::get('business-development-solutions','SiteController@sbds')->name('sbds');
    Route::get('launch-it','SiteController@launch_it')->name('launch_it');
    Route::get('app-d','SiteController@app_d')->name('app_d');
});

//Services
Route::prefix('services')->group(function(){
    Route::get('strategic-marketing','ServiceController@strategic_marketing')->name('strategic_marketing');
    Route::get('branding-and-design','ServiceController@branding_design')->name('branding_design');
    Route::get('websites-and-applications','ServiceController@websites_applications')->name('websites_applications');
    Route::get('social-media-management','ServiceController@social_media_management')->name('social_media_management');
    Route::get('tools-and-integrations','ServiceController@tools_integrations')->name('tools_integrations');

});

//Portfolio
Route::get('our-work','SiteController@works')->name('works');

//Route::prefix('news')

Auth::routes();

Route::prefix('dashboard')->group(function(){
    Route::get('', 'DashboardController@index')->name('dashboard.index');
    Route::resource('blog','BackendBlogController');
});

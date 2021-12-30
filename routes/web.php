<?php

namespace App\Http\Controllers;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard.index');

    // Fontend Controller Routes
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('subscribe', [FrontendController::class, 'subscribe'])->name('subscribe');
    Route::get('business/scope', [FrontendController::class, 'business_scope'])->name('business.scope');
    Route::get('features/capabilities', [FrontendController::class, 'features_capabilities'])->name('features.capabilities');
    Route::get('our/partner', [FrontendController::class, 'ourpartner'])->name('our.partner');
    Route::get('qualification/training', [FrontendController::class, 'qualification_training'])->name('qualification.training');
    Route::get('our/services', [FrontendController::class, 'service'])->name('service');
    Route::get('contactus', [FrontendController::class, 'contactus'])->name('contactus');
    Route::get('contact/message', [FrontendController::class, 'contactmessage'])->name('contact.message');

    // Dashboard Routes
    Route::group(
        ['namespace' => 'User', 'middleware' => 'auth'],
        function () {
            Route::get('dashboard', 'UserDashboardController@index')->name('dashboard.index');
            Route::get('user/logout', 'UserDashboardController@logout')->name('user.logout');
            Route::resources([

            ]);

            Route::get('user/profile', 'UserProfileController@index')->name('user.profile');
            Route::get('user/profile/edit', 'UserProfileController@edit')->name('user.profile.edit');
            Route::post('user/profile/update', 'UserProfileController@update')->name('user.profile.update');
            Route::get('user/setting', 'UserProfileController@setting')->name('user.setting');
            Route::post('user/setting/update', 'UserProfileController@changepassword')->name('user.setting.update');
        }
    );


    // Admin panel Routes
    Route::group(['namespace' => 'Admin', 'middleware' => 'admin'], function () {

        Route::get('admin/dashboard', 'DashboardController@index')->name('admin.index');

        Route::resources([
            'users' => 'UserController',
            'blogcategories' => 'BlogCategoryController',
            'blogs' => 'BlogController',
            'admin/subscriber' => 'SubscribeController',
            'admin/visitor/querstion' => 'VisitorQueryController',
        ]);

        Route::get('admin/profile', 'ProfileController@index')->name('admin.user.profile');
        Route::get('admin/profile/edit', 'ProfileController@edit')->name('admin.user.profile.edit');
        Route::post('admin/profile/update', 'ProfileController@update')->name('admin.user.profile.update');
        Route::get('admin/setting', 'ProfileController@setting')->name('admin.user.setting');
        Route::post('admin/setting/update', 'ProfileController@changepassword')->name('admin.user.setting.update');
    });





require __DIR__.'/auth.php';

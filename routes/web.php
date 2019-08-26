<?php
Route::get('/admin', function () { return redirect('/admin/home'); });

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

// Log Activity...
$this->get('logActivity', 'Admin\LogActivityController@logActivity')->name('logActivity');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('managehome', 'Admin\ManagehomeController');
    Route::put('/newcar/{id}', 'Admin\ManagehomeController@update_newcar')->name('managehome.update_newcar');
    Route::put('/promotion/{id}', 'Admin\ManagehomeController@update_promotion')->name('managehome.update_promotion');
    Route::put('/imagehome/{id}', 'Admin\ManagehomeController@update_imagehome')->name('managehome.update_imagehome');
    Route::put('/client/{id}', 'Admin\ManagehomeController@update_client')->name('managehome.update_client');
    Route::put('/review/{id}', 'Admin\ManagehomeController@update_review')->name('managehome.update_review');
    Route::put('/service/{id}', 'Admin\ManagehomeController@update_service')->name('managehome.update_service');
    Route::put('/package/{id}', 'Admin\ManagehomeController@update_package')->name('managehome.update_package');
    Route::delete('/newcar/{id}', 'Admin\ManagehomeController@destroy_newcar')->name('managehome.destroy_newcar');
    Route::delete('/promotion/{id}', 'Admin\ManagehomeController@destroy_promotion')->name('managehome.destroy_promotion');
    Route::delete('/imagehome/{id}', 'Admin\ManagehomeController@destroy_imagehome')->name('managehome.destroy_imagehome');
    Route::delete('/client/{id}', 'Admin\ManagehomeController@destroy_client')->name('managehome.destroy_client');
    Route::delete('/review/{id}', 'Admin\ManagehomeController@destroy_review')->name('managehome.destroy_review');
    Route::delete('/service/{id}', 'Admin\ManagehomeController@destroy_service')->name('managehome.destroy_service');
    Route::delete('/package/{id}', 'Admin\ManagehomeController@destroy_package')->name('managehome.destroy_package');
    Route::post('newcar_mass_destroy', ['uses' => 'Admin\ManagehomeController@massDestroy_newcar', 'as' => 'managehome.mass_newcar_destroy']);
    Route::post('promotion_mass_destroy', ['uses' => 'Admin\ManagehomeController@massDestroy_promotion', 'as' => 'managehome.mass_promotion_destroy']);
    Route::post('imagehome_mass_destroy', ['uses' => 'Admin\ManagehomeController@massDestroy_imagehome', 'as' => 'managehome.mass_imagehome_destroy']);
    Route::post('client_mass_destroy', ['uses' => 'Admin\ManagehomeController@massDestroy_client', 'as' => 'managehome.mass_client_destroy']);
    Route::post('review_mass_destroy', ['uses' => 'Admin\ManagehomeController@massDestroy_review', 'as' => 'managehome.mass_review_destroy']);
    Route::post('package_mass_destroy', ['uses' => 'Admin\ManagehomeController@massDestroy_package', 'as' => 'managehome.mass_package_destroy']);
    Route::post('service_mass_destroy', ['uses' => 'Admin\ManagehomeController@massDestroy_service', 'as' => 'managehome.mass_service_destroy']);
    Route::get('/newcar', 'Admin\ManagehomeController@index_newcar')->name('managehome.index_newcar');
    Route::get('/promotion', 'Admin\ManagehomeController@index_promotion')->name('managehome.index_promotion');
    Route::get('/imagehome', 'Admin\ManagehomeController@index_image')->name('managehome.index_image');
    Route::get('/client', 'Admin\ManagehomeController@index_client')->name('managehome.index_client');
    Route::get('/review', 'Admin\ManagehomeController@index_review')->name('managehome.index_review');
    Route::get('/service', 'Admin\ManagehomeController@index_service')->name('managehome.index_service');
    Route::get('/package', 'Admin\ManagehomeController@index_package')->name('managehome.index_package');
    Route::get('/create_newcar', 'Admin\ManagehomeController@create_newcar')->name('managehome.create_newcar');
    Route::get('/create_promotion', 'Admin\ManagehomeController@create_promotion')->name('managehome.create_promotion');
    Route::get('/create_imagehome', 'Admin\ManagehomeController@create_imagehome')->name('managehome.create_imagehome');
    Route::get('/create_client', 'Admin\ManagehomeController@create_client')->name('managehome.create_client');
    Route::get('/create_review', 'Admin\ManagehomeController@create_review')->name('managehome.create_review');
    Route::get('/create_service', 'Admin\ManagehomeController@create_service')->name('managehome.create_service');
    Route::get('/create_package', 'Admin\ManagehomeController@create_package')->name('managehome.create_package');
    Route::get('/newcar/{id}/edit', 'Admin\ManagehomeController@edit_newcar')->name('managehome.edit_newcar');
    Route::get('/promotion/{id}/edit', 'Admin\ManagehomeController@edit_promotion')->name('managehome.edit_promotion');
    Route::get('/imagehome/{id}/edit', 'Admin\ManagehomeController@edit_imagehome')->name('managehome.edit_imagehome');
    Route::get('/client/{id}/edit', 'Admin\ManagehomeController@edit_client')->name('managehome.edit_client');
    Route::get('/review/{id}/edit', 'Admin\ManagehomeController@edit_review')->name('managehome.edit_review');
    Route::get('/service/{id}/edit', 'Admin\ManagehomeController@edit_service')->name('managehome.edit_service');
    Route::get('/package/{id}/edit', 'Admin\ManagehomeController@edit_package')->name('managehome.edit_package');
    Route::get('/work/{id}/edit', 'Admin\ManagehomeController@view_work')->name('managehome.view_work');
    Route::get('/contactmessage/{id}/edit', 'Admin\ManagehomeController@view_contactmessage')->name('managehome.view_contactmessage');
    Route::post('/store_newcar', 'Admin\ManagehomeController@store_newcar')->name('managehome.store_newcar');
    Route::post('/store_promotion', 'Admin\ManagehomeController@store_promotion')->name('managehome.store_promotion');
    Route::post('/store_imagehome', 'Admin\ManagehomeController@store_imagehome')->name('managehome.store_imagehome');
    Route::post('/store_client', 'Admin\ManagehomeController@store_client')->name('managehome.store_client');
    Route::post('/store_review', 'Admin\ManagehomeController@store_review')->name('managehome.store_review');
    Route::post('/store_service', 'Admin\ManagehomeController@store_service')->name('managehome.store_service');
    Route::post('/store_package', 'Admin\ManagehomeController@store_package')->name('managehome.store_package');
    Route::get('/getImgNewcar', 'Admin\ManagehomeController@getImgNewcar');
    Route::post('destroyImageNewcar', ['uses' => 'Admin\ManagehomeController@destroyImage', 'as' => 'managehome.destroyImage']);
    Route::resource('managecontact', 'Admin\ManagecontactController');
    Route::resource('manageblog', 'Admin\ManageblogController');
    Route::post('destroyImageBlog', ['uses' => 'Admin\ManageblogController@destroyImage', 'as' => 'manageblog.destroyImage']);
    Route::post('countImgBlog', ['uses' => 'Admin\ManageblogController@countImgBlog', 'as' => 'manageblog.countImgBlog']);
    Route::post('blog_mass_destroy', ['uses' => 'Admin\ManageblogController@massDestroy', 'as' => 'manageblog.mass_destroy']);
    Route::resource('managegallery', 'Admin\ManagegalleryController');
    Route::post('destroyImageGallery', ['uses' => 'Admin\ManagegalleryController@destroyImage', 'as' => 'managegallery.destroyImage']);
    Route::post('countImgGallery', ['uses' => 'Admin\ManagegalleryController@countImgGallery', 'as' => 'managegallery.countImgGallery']);
    Route::post('gallery_mass_destroy', ['uses' => 'Admin\ManagegalleryController@massDestroy', 'as' => 'managegallery.mass_destroy']);

    Route::get('getAnalyticRealtime', 'HomeController@getAnalyticRealtime');
    
 });

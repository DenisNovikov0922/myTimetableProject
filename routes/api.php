<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    Route::post('change-password', 'ChangePasswordController@changePassword')->name('auth.change_password');
    Route::apiResource('roles', 'RolesController');
    Route::apiResource('users', 'UsersController');
    Route::apiResource('companies', 'CompaniesController');
    Route::apiResource('teachers', 'TeachersController');
    Route::apiResource('session', 'SessionController');
    Route::apiResource('courses', 'CoursesController');
    Route::apiResource('subjects', 'SubjectsController');
    Route::apiResource('institution', 'InstitutionController');
    Route::apiResource('employees', 'EmployeesController');
    Route::apiResource('generate', 'GenerateController');
});

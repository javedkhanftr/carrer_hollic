<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CareePageController;
use App\Http\Controllers\User_RolesController;
use App\Http\Controllers\JobSettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('user_list',[UserController::class,'index']);
Route::get('user_create',[UserController::class,'create']);
Route::post('user_create',[UserController::class,'save']);
Route::get('user_edit/{id}',[UserController::class,'edit']);
Route::post('user_edit/{id}',[UserController::class,'update']);
Route::get('delete/{id}',[UserController::class,'delete']);


//candidates data start
Route::get('candidates',[CandidateController::class,'candidates_list']);
// Route::post('condidate_data',[CandidateController::class,'condidate_data']);
Route::get('condidate_data/{id}',[CandidateController::class,'condidate_data']);
Route::get('candidates/create',[CandidateController::class,'candidates_show']);
Route::post('candidates/create',[CandidateController::class,'candidates_create']);
Route::get('candidates/edit/{id}',[CandidateController::class,'candidates_edit']);
Route::post('candidates/edit/{id}',[CandidateController::class,'candidates_save']);
Route::get('candidates/delete/{id}',[CandidateController::class,'candidates_delete']);


//career Page 
Route::get('career_page',[CareePageController::class, 'index']);
Route::post('career_page/update',[CareePageController::class, 'update']);

// user Roles
Route::get('users-and-roles',[User_RolesController::class,'index']);
Route::post('user-roleedit',[User_RolesController::class,'userEdit']);
Route::post('user_edit',[User_RolesController::class,'user_edit']);
Route::get('user/delete/{id}',[User_RolesController::class,'delete']);
Route::get('user/status_change/{id}',[User_RolesController::class,'status_change']);


//job setting 
Route::get('job-setting',[JobSettingController::class,'index']);

    // location Company
    Route::post('job-setting/add_location',[JobSettingController::class,'add_location']);
    Route::post('job-setting/edit_location',[JobSettingController::class,'edit_location']);
    Route::post('job-setting/get_location',[JobSettingController::class,'get_location']);
    Route::get('job-setting/delete_location/{id}',[JobSettingController::class,'delete_location']);

    // department 
    Route::post('job-setting/add_department',[JobSettingController::class,'add_department']);
    Route::post('job-setting/edit_department',[JobSettingController::class,'edit_department']);
    Route::post('job-setting/get_department',[JobSettingController::class,'get_department']);
    Route::get('job-setting/delete_department/{id}',[JobSettingController::class,'delete_department']);

    // Job Type 
    Route::post('job-setting/add_jobtype',[JobSettingController::class,'add_jobtype']);
    Route::post('job-setting/edit_jobtype',[JobSettingController::class,'edit_jobtype']);
    Route::post('job-setting/get_jobtype',[JobSettingController::class,'get_jobtype']);
    Route::get('job-setting/delete_jobtype/{id}',[JobSettingController::class,'delete_jobtype']);

    // Event Type 
    Route::post('job-setting/add_eventtype',[JobSettingController::class,'add_eventtype']);
    Route::post('job-setting/edit_eventtype',[JobSettingController::class,'edit_eventtype']);
    Route::post('job-setting/get_eventtype',[JobSettingController::class,'get_eventtype']);
    Route::get('job-setting/delete_eventtype/{id}',[JobSettingController::class,'delete_eventtype']);

     // Stage 
    Route::post('job-setting/add_stage',[JobSettingController::class,'add_stage']);
    Route::post('job-setting/edit_stage',[JobSettingController::class,'edit_stage']);
    Route::post('job-setting/get_stage',[JobSettingController::class,'get_stage']);
    Route::get('job-setting/delete_stage/{id}',[JobSettingController::class,'delete_stage']);

    // application
    Route::post('job-setting/get_application/',[JobSettingController::class,'get_application']);


    Route::group(['prefix'=>'dashboard'],function(){
        Route::get('job_post/create',[JobPostController::class,'jobPost_show']);
        Route::post('job_post/create',[JobPostController::class,'jobPostCreate']);
        Route::get('preview/{id}',[JobPostController::class,'preview']);
        Route::get('job_post/edit/{id}',[JobPostController::class,'edit']);
        Route::post('job_post/update/{id}',[JobPostController::class,'update']);
        Route::get('job_post/edit_data/{id}',[JobPostController::class,'edit_data']);
        Route::get('job_post/overview/{id}',[JobPostController::class,'overview']);


        // attendace

        Route::post('attendace/store',[CustomAuthController::class,'attendance'])->name('attendance');


    });
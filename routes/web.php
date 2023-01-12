<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CareePageController;
use App\Http\Controllers\User_RolesController;
use App\Http\Controllers\JobSettingController;
use App\Http\Controllers\WfhController;
use App\Http\Controllers\CalenderController;
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

Route::get('admin/dashboard', [CustomAuthController::class, 'dashboard']); 
Route::post('admin/best_employee', [CustomAuthController::class, 'best_employee']); 
Route::get('admin/jobPost', [CustomAuthController::class, 'jobPost']); 
Route::get('admin/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('admin/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('admin/registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('admin/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('admin/signout', [CustomAuthController::class, 'signOut'])->name('signout');

// Route::get('user_list',[UserController::class,'index']);
// Route::get('user_create',[UserController::class,'create']);
// Route::post('user_create',[UserController::class,'save']);
// Route::get('user_edit/{id}',[UserController::class,'edit']);
// Route::post('user_edit/{id}',[UserController::class,'update']);
// Route::get('delete/{id}',[UserController::class,'delete']);


//candidates data start
Route::get('admin/candidates',[CandidateController::class,'candidates_list']);
// Route::post('condidate_data',[CandidateController::class,'condidate_data']);
Route::get('admin/condidate_data/{id}',[CandidateController::class,'condidate_data']);
Route::get('admin/candidates/create',[CandidateController::class,'candidates_show']);
Route::post('admin/candidates/create',[CandidateController::class,'candidates_create']);
Route::get('admin/candidates/edit/{id}',[CandidateController::class,'candidates_edit']);
Route::post('admin/candidates/edit/{id}',[CandidateController::class,'candidates_save']);
Route::get('admin/candidates/delete/{id}',[CandidateController::class,'candidates_delete']);


//career Page 
Route::get('admin/career_page',[CareePageController::class, 'index']);
Route::post('career_page/update',[CareePageController::class, 'update']);

// user Roles
Route::get('admin/users-and-roles',[User_RolesController::class,'index']);
Route::post('admin/user-roleedit',[User_RolesController::class,'userEdit']);
Route::get('admin/user_edit/{id}',[User_RolesController::class,'user_edit']);
Route::post('admin/user_edit/{id}',[User_RolesController::class,'user_update']);
Route::get('admin/user/delete/{id}',[User_RolesController::class,'delete']);
Route::get('admin/user/status_change/{id}',[User_RolesController::class,'status_change']);
Route::post('admin/user-role/create',[User_RolesController::class,'create']);
Route::get('admin/user-role/deleteData/{id}',[User_RolesController::class,'deleteData']);
Route::post('admin/user-role/mange-user',[User_RolesController::class,'mangeuser']);



//job setting 
   


    Route::group(['prefix'=>'admin/dashboard'],function(){
        Route::get('job_post/create',[JobPostController::class,'jobPost_show']);
        Route::post('job_post/create',[JobPostController::class,'jobPostCreate']);
        Route::get('preview/{slug}/display',[JobPostController::class,'preview']);
        Route::get('job_post/edit/{id}',[JobPostController::class,'edit']);
        Route::post('job_post/update/{id}',[JobPostController::class,'update']);
        Route::get('job_post/edit_data/{id}',[JobPostController::class,'edit_data']);
        Route::get('job_post/overview/{id}',[JobPostController::class,'overview']);
        Route::post('job_post/slugdata/',[JobPostController::class,'slugdata']);
        Route::get('job_post/status/{id}',[JobPostController::class,'status']);
        Route::get('job_post/delete/{id}',[JobPostController::class,'delete']);
        Route::get('job_post/{slug}/applyjob',[JobPostController::class,'applyjob']);
        Route::post('job_post/applyData',[JobPostController::class,'applyData']);


        // attendace

        Route::post('attendace/store',[CustomAuthController::class,'attendance'])->name('attendance');


    });
    Route::group(['prefix'=>'user'],function(){

        Route::get('home',[UserController::class,'index']);
        Route::get('career',[UserController::class,'career']);
        Route::get('readMore',[UserController::class,'readMore']);
        
    });
    Route::group(['prefix'=>'admin/wfh'],function(){

        // wfhModule
        Route::get('/list',[WfhController::class,'wfhlist'])->name('wfh.list');
        Route::get('/add',[WfhController::class,'create'])->name('wfh.create');
        Route::post('/store',[WfhController::class,'store'])->name('wfh.store');
        Route::get('/delete/{id}',[WfhController::class,'delete'])->name('wfh.delete');
        Route::get('/edit/{id}',[WfhController::class,'edit'])->name('wfh.edit');
        Route::post('/edit/{id}',[WfhController::class,'update'])->name('wfh.update');
            
    });
    Route::group(['prefix'=>'admin/'],function(){
        Route::get('calendar-event', [CalenderController::class, 'index']);
        Route::get('event/delete/{id}', [CalenderController::class, 'delete']);
        Route::get('event/edit/{id}', [CalenderController::class, 'edit']);
        Route::post('event/edit/{id}', [CalenderController::class, 'update']);
        Route::post('event/assign/', [CalenderController::class, 'assign']);


        Route::get('job-setting',[JobSettingController::class,'index']);

        // location Company
        Route::get('job-setting/add_location',[JobSettingController::class,'add_location']);
        Route::post('job-setting/add_location',[JobSettingController::class,'save_location']);
        Route::get('job-setting/edit_location/{id}',[JobSettingController::class,'edit_location']);
        Route::post('job-setting/edit_location/{id}',[JobSettingController::class,'update_location']);
        Route::post('job-setting/get_location',[JobSettingController::class,'get_location']);
        Route::get('job-setting/delete_location/{id}',[JobSettingController::class,'delete_location']);
    
        // department 
        Route::get('job-setting/add_department',[JobSettingController::class,'add_department']);
        Route::post('job-setting/add_department',[JobSettingController::class,'save_department']);
        Route::get('job-setting/edit_department/{id}',[JobSettingController::class,'edit_department']);
        Route::post('job-setting/edit_department/{id}',[JobSettingController::class,'update_department']);
        Route::post('job-setting/get_department',[JobSettingController::class,'get_department']);
        Route::get('job-setting/delete_department/{id}',[JobSettingController::class,'delete_department']);
    
        // Job Type 
        
        Route::get('job-setting/add_jobtype',[JobSettingController::class,'add_jobtype']);
        Route::post('job-setting/add_jobtype',[JobSettingController::class,'save_jobtype']);
        Route::get('job-setting/edit_jobtype/{id}',[JobSettingController::class,'edit_jobtype']);
        Route::post('job-setting/edit_jobtype/{id}',[JobSettingController::class,'update_jobtype']);
        Route::post('job-setting/get_jobtype',[JobSettingController::class,'get_jobtype']);
        Route::get('job-setting/delete_jobtype/{id}',[JobSettingController::class,'delete_jobtype']);
    
        // Event Type 
        Route::get('job-setting/add_event',[JobSettingController::class,'add_event']);
        Route::post('job-setting/add_eventtype',[JobSettingController::class,'add_eventtype']);
        Route::get('job-setting/edit_event/{id}',[JobSettingController::class,'edit_event']);
        Route::post('job-setting/edit_eventtype/{id}',[JobSettingController::class,'edit_eventtype']);
        Route::post('job-setting/get_eventtype',[JobSettingController::class,'get_eventtype']);
        Route::get('job-setting/delete_eventtype/{id}',[JobSettingController::class,'delete_eventtype']);
    
         // Stage 
        Route::get('job-setting/add_hiring_stage',[JobSettingController::class,'add_hiring_stage']);
        Route::post('job-setting/add_stage',[JobSettingController::class,'add_stage']);
        Route::get('job-setting/edit_hiring_stage/{id}',[JobSettingController::class,'edit_hiring_stage']);
        Route::post('job-setting/edit_stage/{id}',[JobSettingController::class,'edit_stage']);
        Route::post('job-setting/get_stage',[JobSettingController::class,'get_stage']);
        Route::get('job-setting/delete_stage/{id}',[JobSettingController::class,'delete_stage']);
    
        // application
        Route::get('job-setting/application_form/',[JobSettingController::class,'application_form']);
        Route::get('job-setting/get_application/{key}',[JobSettingController::class,'get_application']);
    });

Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);
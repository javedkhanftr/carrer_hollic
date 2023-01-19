<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPost;
use App\Models\Department;
use App\Models\CompanyLocation;
use App\Models\JobType;
use App\Models\Setting;
use App\Models\JobStage;
use App\Models\JobApplicant;
use Auth;
use App\Models\Applicant;


class JobPostController extends Controller
{
    public function jobPostCreate(Request $request){
        $job_posts= new JobPost();
        $job_posts->name=$request->name;
        $job_posts->job_type_id=$request->job_type_id;
        $job_posts->department_id=$request->department_id;
        $job_posts->featured_job=$request->featured_job;
        $job_posts->company_location_id=$request->company_location_id;
        $job_posts->vacancy_count=$request->vacancy_count;
        $job_posts->salary=$request->salary;
        $job_posts->last_submission_date=$request->last_submission_date;
        $job_posts->description=$request->description;
        $job_posts->job_post_settings='';
        $job_posts->apply_form_settings='';
        $job_posts->slug='a17372e2-c92a-43d4-8dcd-31d9917983ac';
        $job_posts->save();
        return redirect('admin/jobPost');
    }
    public function jobPost_show(){
            $Job_type=JobType::all();
            $department=Department::all();
            $Company_location=CompanyLocation::all();
            // return $Company_location;
        return view('admin/dashboard/jobPost_show',\compact('Job_type','department','Company_location'));
    }
    public function preview($slug){
        $data=JobPost::where('slug',$slug)->get();
         $jobpost=$data[0];
        //  return $jobpost;
       return view('admin/dashboard/preview',\compact('jobpost'));
       
    }
    public function edit($id){
        $jobpost=JobPost::find($id);
        $Job_type=JobType::all();
        $department=Department::all();
        $Company_location=CompanyLocation::all();
        return view('admin/dashboard/jobPost_edit',compact('jobpost','Job_type','department','Company_location'));
    }
    public function update(Request $request,$id){
        $job_posts=JobPost::find($id);
        $job_posts->name=$request->name;
        $job_posts->job_type_id=$request->job_type_id;
        $job_posts->department_id=$request->department_id;
        $job_posts->featured_job=$request->featured_job;
        $job_posts->company_location_id=$request->company_location_id;
        $job_posts->vacancy_count=$request->vacancy_count;
        $job_posts->salary=$request->salary;
        $job_posts->last_submission_date=$request->last_submission_date;
        $job_posts->description=$request->description;
        $job_posts->update();
        return redirect('admin/jobPost');
    }
    public function edit_data($id){
        $jobpost=JobPost::find($id);
        $setting=Setting::where('name','career_page')->get();
        $data= $jobpost->job_post_settings;
        // return $data;
        return view('admin/dashboard/edit_job_post',\compact('jobpost','data'));
    }
    public function overview($id){
        $condidate_data =JobPost::find($id);
        $overview =JobStage::where('job_post_id',$id)->get();
        $email = Auth::user()->email;
        // return $overview;
        return view('admin/dashboard/overview',compact('condidate_data','overview','email'));
    }
    public function status($id){
        $condidate_data =JobPost::find($id);
        $id=$condidate_data->status_id;
        if (intval($id) == 1) {
            $condidate_data->status_id='2';
        }else{
            $condidate_data->status_id='1';

        }
        $condidate_data->update();
     
        return redirect('admin/jobPost');
    }
    public function delete($id){
        $condidate_data =JobPost::find($id);
        $condidate_data->delete();
        return redirect('admin/jobPost');
    }
    public function applyjob($slug){
        $condidate_data =JobPost::where('slug',$slug)->get();
        $data= $condidate_data[0];
        return view('admin/dashboard/apply',compact('data'));
    }
    public function applyData(Request $request){
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $str1= substr(str_shuffle($str_result),0, 10);
        $str2= substr(str_shuffle($str_result),0, 10);
        $str3= substr(str_shuffle($str_result),0, 10);
        $str4= substr(str_shuffle($str_result),0, 10);
        $str=$str1.'-'.$str2.'-'.$str3.'-'.$str4;
        $applicant=new Applicant();
        $applicant->first_name=$request->first_name;
        $applicant->last_name=$request->last_name;
        $applicant->email=$request->email;
        $applicant->mobile_number=$request->number;
        $applicant->gender=$request->gender;
        $applicant->added_by='Career Hollic';
        $applicant->date_of_birth=$request->dob;
        $applicant->save();
        $applicant_id=$applicant->id;
            $jobApplicant = new JobApplicant();
            $jobApplicant->applicant_id=$applicant_id;
            $jobApplicant->job_post_id =$request->id;
            $jobApplicant->status_id =4;
            $jobApplicant->current_stage_id =80;
            $jobApplicant->slug=$str;
            $jobApplicant->save();
            session()->put('message', 'Job  Application Submited Successfuly');   
        return $jobApplicant;
    }
    
}
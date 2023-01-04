<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPost;
use App\Models\Department;
use App\Models\CompanyLocation;
use App\Models\JobType;
use App\Models\Setting;
use App\Models\JobStage;
use Auth;


class JobPostController extends Controller
{
    public function jobPostCreate(Request $request){
        $job_posts= new JobPost();
        $job_posts->name=$request->name;
        $job_posts->job_type_id=$request->job_type_id;
        $job_posts->department_id=$request->department_id;
        $job_posts->company_location_id=$request->company_location_id;
        $job_posts->vacancy_count=$request->vacancy_count;
        $job_posts->salary=$request->salary;
        $job_posts->last_submission_date=$request->last_submission_date;
        $job_posts->description=$request->description;
        $job_posts->job_post_settings='';
        $job_posts->apply_form_settings='';
        $job_posts->slug='a17372e2-c92a-43d4-8dcd-31d9917983ac';
        $job_posts->save();
        return redirect('dashboard');
    }
    public function jobPost_show(){
            $Job_type=JobType::all();
            $department=Department::all();
            $Company_location=CompanyLocation::all();
            // return $Company_location;
        return view('dashboard/jobPost_show',\compact('Job_type','department','Company_location'));
    }
    public function preview($slug){
        $data=JobPost::where('slug',$slug)->get();
         $jobpost=$data[0];
       return view('dashboard/preview',\compact('jobpost'));
       
    }
    public function edit($id){
        $jobpost=JobPost::find($id);
        $Job_type=JobType::all();
        $department=Department::all();
        $Company_location=CompanyLocation::all();
        return view('dashboard/jobPost_edit',compact('jobpost','Job_type','department','Company_location'));
    }
    public function update(Request $request,$id){
        $job_posts=JobPost::find($id);
        $job_posts->name=$request->name;
        $job_posts->job_type_id=$request->job_type_id;
        $job_posts->department_id=$request->department_id;
        $job_posts->company_location_id=$request->company_location_id;
        $job_posts->vacancy_count=$request->vacancy_count;
        $job_posts->salary=$request->salary;
        $job_posts->last_submission_date=$request->last_submission_date;
        $job_posts->description=$request->description;
        $job_posts->update();
        return redirect('dashboard');
    }
    public function edit_data($id){
        $jobpost=JobPost::find($id);
        $setting=Setting::where('name','career_page')->get();
        $carrer_page_data= \json_decode($setting[0]['value']);
        $data= $carrer_page_data->job_post_settings;
        // return $data;
        return view('dashboard/edit_job_post',\compact('jobpost','data'));
    }
    public function overview($id){
        $condidate_data =JobPost::find($id);
        $overview =JobStage::where('job_post_id',$id)->get();
        $email = Auth::user()->email;
        // return $overview;
        return view('dashboard/overview',compact('condidate_data','overview','email'));
    }
    public function status($id){
        $condidate_data =JobPost::find($id);
        if ($condidate_data == '1') {
            $condidate_data->status_id=2;
        } else {
            $condidate_data->status_id=1;
            
        }
        $condidate_data->update();
        
        return redirect('dashboard');
    }
    public function delete($id){
        $condidate_data =JobPost::find($id);
        $condidate_data->delete();
        return redirect('dashboard');
    }
    public function applyjob(){
        return view('dashboard/apply');
    }
    
}

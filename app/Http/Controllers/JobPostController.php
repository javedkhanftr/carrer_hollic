<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPost;
use App\Models\Department;
use App\Models\CompanyLocation;
use App\Models\JobType;

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
        return view('jobPost_show',\compact('Job_type','department','Company_location'));
    }
}

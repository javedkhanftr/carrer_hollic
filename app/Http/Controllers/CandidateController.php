<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\JobApplicant;
use App\Models\App\Recruitment\JobStage;
use Illuminate\Support\Facades\DB;
use App\Models\JobPost;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    public function candidates_list(){
        if(Auth::check()){
            $candidates_list = DB::table('applicants')
            ->join('job_applicants', 'applicants.id', '=', 'job_applicants.applicant_id')
            ->select('applicants.*', 'job_applicants.*')
            ->where('status_id','!=','7')
            ->orderBy('applicants.id', 'DESC')
            ->get();
            $email = Auth::user()->email;
            // return $candidates_list;
             return view('admin/candidate/index',compact('candidates_list','email'));
            
        }    
        return Redirect('admin/login');
    }
    public function candidates_show(){
        $email = Auth::user()->email;
        return view('admin/candidate/info',\compact('email'));
    }
    public function candidates_create(Request $request){
           $applicant=new Applicant();
           $applicant->first_name=$request->first_name;
           $applicant->last_name=$request->last_name;
           $applicant->email=$request->email;
           $applicant->gender=$request->gender;
           $applicant->date_of_birth=$request->last_submission_date;
            $applicant->save();
            $jobApplicant = new JobApplicant();
            $jobApplicant->applicant_id=$applicant->id;
            $jobApplicant->job_post_id =$request->job_post_id;
            $jobApplicant->status_id =1;
            $jobApplicant->current_stage_id =80;
            $jobApplicant->slug='93adb1ec-8013-'.$request->first_name.'-a5a5-5d66f9079889';
            $jobApplicant->save();
            
            return redirect('admin/candidates');
    }
    public function candidates_edit(Request $request,$id){
        $applicant= Applicant::find($id);
        $candidate = DB::table('applicants')
        ->join('job_applicants', 'applicants.id', '=', 'job_applicants.applicant_id')
        ->select('applicants.*', 'job_applicants.*')
        // ->where('status_id','!=','7')
        ->where('job_applicants.applicant_id','=',$id)
        ->get();
        $data= $candidate[0];
        //  return $data;
         return view('admin/candidate/edit',\compact('data'));
 }
    public function candidates_save(Request $request,$id){
        $applicant= Applicant::find($id);
        $applicant->first_name=$request->first_name;
        $applicant->last_name=$request->last_name;
        $applicant->email=$request->email;
        $applicant->gender=$request->gender;
        $applicant->date_of_birth=$request->last_submission_date;
         $applicant->update();

         $jobApplicant =JobApplicant::find($request->job_applicatins_id);
         $jobApplicant->applicant_id=$id;
         $jobApplicant->job_post_id =$request->job_post_id;
         $jobApplicant->update();
         
         return redirect('admin/candidates');
    }

    public function candidates_delete($id){
        $applicant= Applicant::find($id);
        $applicant->delete();
        $jobApplicant =  JobApplicant::where('applicant_id',$id)->delete();
        return redirect('admin/candidates');
    }
    public function condidate_data(Request $request,$id){
        $candidates_list = DB::table('applicants')
        ->join('job_applicants', 'applicants.id', '=', 'job_applicants.applicant_id')
        ->select('applicants.*', 'job_applicants.*')
        ->where('status_id','!=','7')
        ->where('job_applicants.id',$id)
        ->get();
        $data= $candidates_list[0];
        $item=json_decode($data->apply_form_setting);
        // return $data;
        return view('admin/candidate/condidate_data',\compact('data'));
      
    }
    public function assign_job($id){
        $data=Applicant::find($id);
        $jobpost=JobPost::all();
       
        return view('admin/candidate/assign_job',compact('data','jobpost'));

    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyLocation;
use App\Models\JobType;
use App\Models\JobStage;
use App\Models\JobPost;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Department;
use DB;
use Carbon\Carbon;

class MasterController extends Controller
{
  public static function getLoation($id){
        $com_loc=CompanyLocation::find($id);
        return $com_loc->address;
    }
    public static function getJobType($id){
        $job_type=JobType::find($id);
        return $job_type->name;
    }
    public static function JobType(){
        $job_type=JobType::all();
        return $job_type;
    }
    public static function getDepartment($id){
        $department=Department::find($id);
        return $department->name;
    }
    public static function getname(){
       
        if(Auth::check()){
          
            $first_name = Auth::user()->first_name;
            $last_name = Auth::user()->last_name;
            $name=$first_name.' '.$last_name;
            return $name;
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public static function getimage(){
       
        if(Auth::check()){
          
            $image = Auth::user()->image;
           
            return $image;
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public static function getcurrenttime(){
        date_default_timezone_set("Asia/Kolkata");
         $time= date("H");
        //  return $time;
         
         if ('01'<= $time && $time < '12') {
            return "Good Morning";
         }
         elseif ('12'<= $time && $time <'16') {
            return "Good Afternoon";
         }
         elseif ('16'<= $time && $time < '19') {
            return "Good Evening";
         }
         else  {
            return "Good Night";
         }
    }
    public static function getstage($id){
        $job_stage=JobStage::find($id);
        $data=$job_stage->name;
        return $data;
    }
    public static function getnamejobpost($id){
        $job_post=JobPost::find($id);
        $data=$job_post->name;
        return $data;
    }

    public static function getapplydate($id){
        $job_post=JobPost::find($id);
        $data=$job_post->last_submission_date->format('d-m-Y');
        return $data;
    }
    public static function getuserrole($id){
        
        $allData=DB::table('roles')
        ->join('role_user', 'role_user.role_id', '=', 'roles.id')
        ->join('users', 'role_user.user_id', '=', 'users.id')
        ->select('users.*', 'roles.*','role_user.*')
        ->where('role_user.role_id',$id)
        ->get();
        return $allData;
    }
    public static function getaddedby($id){
        $job_post=JobPost::find($id);
        $user_id=$job_post->posted_by;
        $user=User::find($user_id);
        return $user->first_name.' '.$user->last_name;

    }
    public static function getdate($date){
        $date1= date('Y-m-d');
        $datetime1 = date_create($date);
        $datetime2 = date_create($date1);
        $interval = date_diff($datetime1, $datetime2);
        return $interval->format('%y years %m months');
    }
    public static function getusername($id){
        
        $user=User::find($id);
        $fname=$user->first_name;
        // return $fname;
        $lname=$user->last_name;
        $name=$fname.' '.$lname;
        return $name;
    }

}

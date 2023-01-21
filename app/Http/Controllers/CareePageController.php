<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPost;
use App\Models\Setting;


class CareePageController extends Controller
{
    public function index(Request $request){
        // return $request->all();
        $search=$request->search;
        $setting=Setting::where('name','career_page')->get();
        $carrer_page_data= \json_decode($setting[0]['value']);
        $data= $carrer_page_data->job_post_settings;
        if ($search == '') {
            $jobpost=JobPost::paginate(12);
        }else{
            $jobpost=JobPost::where('name','Like',$search)->paginate(5);
        }
       
       
        // return $jobpost;
        return view('admin/career_page/index',\compact('jobpost','data','search'));
    }
    public function update(Request $request){
        $data=$request->all();
        // return $request->vacancy;
       $jobpost=JobPost::find($request->id);    
       $jobpost->vacancy_count=$request->vacancy;
       $jobpost->job_post_settings=$request->data[0];
        $jobpost->update();
        return response()->json(['success'=>'update succesfully','data'=>$jobpost]);
    }
}

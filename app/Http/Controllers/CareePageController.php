<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPost;
use App\Models\Setting;


class CareePageController extends Controller
{
    public function index(){
        $jobpost=JobPost::all();
        $setting=Setting::where('name','career_page')->get();
        $carrer_page_data= \json_decode($setting[0]['value']);
        $data= $carrer_page_data->job_post_settings;
        // return $data;
        return view('admin/career_page/index',\compact('jobpost','data'));
    }
    public function update(Request $request){
        $data=$request->all();
        $alldata=json_encode($data['data'][0]);
        $setting=Setting::find(17);
        $setting->value=$alldata;
        $setting->update();
        // return $request;
        return response()->json(['success'=>'update succesfully','data'=>$setting]);
    }
}

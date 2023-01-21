<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\JobPost;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $jobpost=JobPost::all();
        $jobpost1=JobPost::where('featured_job','no')->paginate(4);
        return view('user/index',compact('jobpost','jobpost1'));   
    }
    public function career(Request $request){
        $search=$request->search;
        if ($search == '') {
            $jobpost=JobPost::paginate(6);
        }else{
            $jobpost=JobPost::where('name', 'LIKE','%'.$search.'%')->paginate(6);

        }
        

        $setting=Setting::where('name','career_page')->get();
        $data_basic= \json_decode($setting[0]['value']);
        return view('user/career',compact('data_basic','jobpost','search'));
    }
    public function readMore(Request $request){
        // return $request->all();
        $search=$request->search;
        if ($search == '') {
            $jobpost=JobPost::paginate(6);
        }else{
            $jobpost=JobPost::where('name', 'LIKE','%'.$search.'%')->paginate(6);

        }
        // return $jobpost;
        return view('user/readMore',compact('jobpost','search'));   

    }
    public function serch_job(Request $request){
        $name= $request->name;
        $data = JobPost::where('name', 'LIKE','%'.$name.'%')->get();
        return response()->json($data); 

    }
  
}
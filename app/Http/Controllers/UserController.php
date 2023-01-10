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
    public function career(){
        $jobpost=JobPost::all();
        

        $setting=Setting::where('name','career_page')->get();
        $data_basic= \json_decode($setting[0]['value']);
        return view('user/career',compact('data_basic','jobpost'));
    }
    public function readMore(){
        $jobpost=JobPost::all();
        return view('user/readMore',compact('jobpost'));   

    }
  
}
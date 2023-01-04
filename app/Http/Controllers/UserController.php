<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\JobPost;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('user/index');
    }
    public function career(){
        $jobpost=JobPost::all();

        $setting=Setting::where('name','career_page')->get();
        $data_basic= \json_decode($setting[0]['value']);
// return $data_basic;
        return view('user/career',compact('data_basic','jobpost'));
    }
  
}
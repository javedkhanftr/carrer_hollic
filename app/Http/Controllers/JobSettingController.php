<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyLocation;
use App\Models\Department;
use App\Models\JobType;
use App\Models\EventType;
use App\Models\Stage;
use App\Models\JobApplicant;
use App\Models\Setting;


class JobSettingController extends Controller
{
    public function index(){
        $company_location=CompanyLocation::all();
        $department=Department::all();
        $jobtype=JobType::all();
        $eventtype=EventType::all();
        $stage=Stage::all();
        $setting=Setting::where('name','application_form')->get();
        $data_basic= \json_decode($setting[0]['value']);
        // return $data_basic[0];
        return view('admin/setting/index',compact('company_location','department','jobtype','eventtype','stage','data_basic'));
    }
    public function application_form(){
        return view('admin/setting/application_form');
    }
    public function add_location(){
        return view('admin/setting/add_location');
    }
    public function save_location(Request $request){
        $company_location=new CompanyLocation();
        $company_location->address=$request->address;
        $company_location->save();
        session()->put('message', 'Company Location Created Successfuly');   
        return redirect('admin/job-setting');

    }
    public function edit_location($id){
        $company_location= CompanyLocation::find($id);
        return view('admin/setting/edit_location',compact('company_location'));

    }
    public function update_location(Request $request,$id){
  
        $company_location= CompanyLocation::find($id);
        $company_location->address=$request->address;
        $company_location->update();
        session()->put('message', 'Company Location Updated Successfuly');   
        return redirect('admin/job-setting');

    }
    public function delete_location(Request $request,$id){
        $company_location= CompanyLocation::find($id);
        $company_location->delete();
        session()->put('message', 'Company Location delete Successfuly');   
        return redirect('admin/job-setting');

    }
    public function get_location(Request $request){
        $id=$request->id;
        $company_location= CompanyLocation::find($id);
        return response()->json(["company_location"=>$company_location]);
    }

public function add_department(){
    return view('admin/setting/add_department');
}
    public function save_department(Request $request){
        $department=new Department();
        $department->name=$request->department_name;
        $department->save();
        session()->put('message', 'Department Created Successfuly');   
        return redirect('admin/job-setting');

    }
    public function edit_department(Request $request,$id){
        $department= Department::find($id);
            return view('admin/setting/edit_department',compact('department'));
    }
    public function update_department(Request $request,$id){
      
        $department= Department::find($id);
        $department->name=$request->department_name;
        $department->update();
        session()->put('message', 'Department Updated Successfuly');   
        return redirect('admin/job-setting');

    }
    public function delete_department(Request $request,$id){
        $department= Department::find($id);
        $department->delete();
        session()->put('message', 'Department delete Successfuly');   
        return redirect('admin/job-setting');

    }
    public function get_department(Request $request){
        $id=$request->id;
        $department= Department::find($id);
        return response()->json(["department"=>$department]);
    }
    public function add_jobtype(){
        
        return view('admin/setting/add_jobtype');

    }

    public function save_jobtype(Request $request){
        $jobtype=new JobType();
        $jobtype->name=$request->jobtype_name;
        $jobtype->brief=$request->jobtype_brief;
        $jobtype->save();
        session()->put('message', 'Jobtype Created Successfuly');   
        return redirect('admin/job-setting');

    }
    public function edit_jobtype($id){
        $jobtype=JobType::find($id);

        return view('admin/setting/edit_jobtype',compact('jobtype'));
    }
    public function update_jobtype(Request $request,$id){
        // $id=$request->jobtype_id;
        $jobtype= JobType::find($id);
        $jobtype->name=$request->jobtype_name;
        $jobtype->brief=$request->jobtype_brief;
        $jobtype->update();
        session()->put('message', 'Jobtype Updated Successfuly');   
        return redirect('admin/job-setting');

    }
    public function delete_jobtype(Request $request,$id){
        $jobtype= JobType::find($id);
        $jobtype->delete();
        session()->put('message', 'Jobtype delete Successfuly');   
        return redirect('admin/job-setting');

    }
    public function get_jobtype(Request $request){
        $id=$request->id;  
        $jobtype= JobType::find($id);
        return response()->json(["jobtype"=>$jobtype]);
    }

    public function add_eventtype(Request $request){
        $eventtype=new EventType();
        $eventtype->name=$request->eventtype_name;
        $eventtype->save();
        session()->put('message', 'Event Type Created Successfuly');   
        return redirect('admin/job-setting');

    }
    public function edit_eventtype(Request $request,$id){
        // $id=$request->eventtype_id;
        $eventtype= EventType::find($id);
        $eventtype->name=$request->eventtype_name;
        $eventtype->update();
        session()->put('message', 'Event Type Updated Successfuly');   
        return redirect('admin/job-setting');

    }
    public function delete_eventtype(Request $request,$id){
        $eventtype= EventType::find($id);
        $eventtype->delete();
        session()->put('message', 'Event Type delete Successfuly');   
        return redirect('admin/job-setting');

    }
    public function get_eventtype(Request $request){
        $id=$request->id;  
        $eventtype= EventType::find($id);
        return response()->json(["eventtype"=>$eventtype]);
    }



    public function add_stage(Request $request){
        $stage=new Stage();
        $stage->name=$request->stage_name;
        $stage->save();
        session()->put('message', 'Stage Created Successfuly');   
        return redirect('admin/job-setting');

    }
    public function edit_stage(Request $request,$id){
        // $id=$request->stage_id;
        $stage= Stage::find($id);
        $stage->name=$request->stage_name;
        $stage->update();
        session()->put('message', 'Stage Updated Successfuly');   
        return redirect('admin/job-setting');

    }
    public function delete_stage(Request $request,$id){
        $stage= Stage::find($id);
        $stage->delete();
        session()->put('message', 'Stage delete Successfuly');   
        return redirect('admin/job-setting');

    }
    public function get_stage(Request $request){
        $id=$request->id;  
        $stage= Stage::find($id);
        return response()->json(["stage"=>$stage]);
    }
    public function get_application($key){
        $setting=Setting::where('name','application_form')->get();
        $data_basic= \json_decode($setting[0]['value']);
        // return $data_basic;
        return view('admin/setting/application_details')->with(['key'=>$key,'data_basic'=>$data_basic]);
       
    }
    public function add_hiring_stage(){
        return view('admin/setting/add_hiring_stage');
    }
    public function edit_hiring_stage($id){
        $stage= Stage::find($id);
        return view('admin/setting/edit_hiring_stage',compact('stage'));

    }
    public function add_event(){
        return view('admin/setting/add_event');
    }
    public function edit_event($id){
        $eventtype= EventType::find($id);
        return view('admin/setting/edit_event',compact('eventtype'));
    }
}

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\JobType;
use App\Models\Applicant;
use App\Models\JobPost;
use App\Models\Department;
use App\Models\CompanyLocation;
use App\Models\Best_employee;
use Carbon\Carbon;
use App\Models\CrudEvents;
use DB;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("admin/login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("admin/dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        $job_posts=JobPost::all();
        $Job_type=JobType::all();
        $department=Department::all();
        $Company_location=CompanyLocation::all();
        $user=User::all();
        $applicant=Applicant::all();
        $events=CrudEvents::all();
        $date = date('Y-m-d ');
        $attendance = DB::table('attendance')
                         ->where('date',$date)
                        ->where('checkout',NULL)
                        ->select('checkout')
                        ->first();
        // dd($attendance);

        // return $job_posts;
        $best_employee=Best_employee::find(1);
        $id=$best_employee->user_id;
        $user_data=User::find($id);
        if(Auth::check()){
          
            return view('admin/dashboard',compact('applicant','events','job_posts','Job_type','department','Company_location','attendance','user','user_data'));
        }
  
        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }
    public function jobPost(){
        $job_posts=JobPost::all();
        $Job_type=JobType::all();
        $department=Department::all();
        $Company_location=CompanyLocation::all();


        $date = date('Y-m-d ');
        $attendance = DB::table('attendance')
                         ->where('date',$date)
                        ->where('checkout',NULL)
                        ->select('checkout')
                        ->first();
        // dd($attendance);

        // return $job_posts;
        if(Auth::check()){
          
            return view('admin/welcome',compact('job_posts','Job_type','department','Company_location','attendance'));
        }
  
        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }

    // public function attendance(Request $request){
        
    //     $id = Auth::user()->id;
    //     $checkinDate = date('Y-m-d H:i:s');
    //     $date = date('Y-m-d');

    //     if($request->checkin ==1){
    //         $user['user_id'] = $id;
    //         $user['checkin'] = $checkinDate;
    //         $user['date'] = $date;

    //     DB::table('attendance')->insert($user);
    //     return back();
        
    //     }

    //     if($request->checkout ==2){

    //         $user['checkout'] = $checkinDate;

    //         DB::table('attendance')
    //             ->where('user_id',$id)
    //             ->where('date',$date)
    //             ->update($user);
    //     return back();
        
    //     }
        

        
            

    
        
        
    // }
    public function attendance(Request $request){
        
        $id = Auth::user()->id;
        // date_default_timezone_set('Asia/Kolkata');

        $checkinDate = date('Y-m-d h:i:s');
        $date = date('Y-m-d');

        if($request->checkin ==1){
            $user['user_id'] = $id;
            $user['checkin'] = $checkinDate;
            $user['date'] = $date;

        DB::table('attendance')->insert($user);
        return back();
        }



        if($request->checkout ==2){
            // dd($checkinDate);
            $minute = DB::table('attendance')
                      ->where('date',$date)

                      ->select('checkin')
                      ->first();

            $GetMin = $minute->checkin;
            $to = Carbon::createFromFormat('Y-m-d h:i:s', $GetMin);
            $from = Carbon::createFromFormat('Y-m-d h:i:s', $checkinDate);
            $diff_in_hours = $to->diffInMinutes($from);
             // dd($diff_in_hours);
            $user['checkout'] = $checkinDate;
            $user['minute'] = $diff_in_hours;

            DB::table('attendance')
                ->where('user_id',$id)
                ->where('date',$date)
                ->update($user);
            return back();
        
        }
        

        
            

    
       }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('admin/login');
    }
    public function best_employee(Request $request){
        // return 'uuu';
        $best_employee=Best_employee::find(1);
        $best_employee->user_id=$request->user_id;
        $best_employee->update();
        return $best_employee;
    }
}
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\JobType;
use App\Models\JobPost;
use App\Models\Department;
use App\Models\CompanyLocation;
use Carbon\Carbon;
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
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
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
         
        return redirect("dashboard")->withSuccess('You have signed-in');
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
        $job_posts=JobPost::paginate(5);
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
          
            return view('welcome',compact('job_posts','Job_type','department','Company_location','attendance'));
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
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
  
        return Redirect('login');
    }
}
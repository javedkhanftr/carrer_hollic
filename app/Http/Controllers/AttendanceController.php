<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CrudEvents;
use App\Models\User;
use DB;
class AttendanceController extends Controller
{
    public function index(Request $request)
    {
      // return $request->all();
      $search = $request->search;


      if( $search == ""){
              $attendance = DB::table('attendance')
                            ->join('users','attendance.user_id','users.id')
                            ->select("attendance.*", DB::raw("CONCAT(users.first_name,' ',users.last_name) as full_name"))
                            ->paginate(10);
                }
                else{
                   $attendance = DB::table('attendance')
                            ->join('users','attendance.user_id','users.id')
                            ->where('users.first_name','Like',$search)
                            ->where('users.last_name','Like',$search)
                            ->select("attendance.*", DB::raw("CONCAT(users.first_name,' ',users.last_name) as full_name"))
                            ->paginate(10);

                }

        return view('admin/attendance/view',compact('attendance','search'));
    }
  
}
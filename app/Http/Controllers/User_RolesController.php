<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Role;
use App\Models\Role_user;
use Session;
class User_RolesController extends Controller
{
    public function index(){

        $userRole = DB::table('users')->get();

        $user_role=Role::all();
       
        return view('user_roles/index',compact('userRole','user_role'));


    }
    public function userEdit(Request $request){
        $idGet = $request->id;
        $user = User::find($idGet);
        return response()->json(["user"=>$user]);

    }
    public function user_edit(Request $request){
        // return $request->all();
        $id=$request->id;
        $user=User::find($id);
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->update();
        session()->put('message', 'User Updated Successfuly');   
        return \redirect('users-and-roles');
    }
    public function delete($id){
        $user=User::find($id);
        $user->delete();
        session()->put('message', 'User Delete Successfuly');   
        return \redirect('users-and-roles');
    }
    public function status_change($id){
        $user=User::find($id);
        $status=$user->status_id;
        if ( $status == 1) {
            $user->status_id=2;
        }else{
            $user->status_id=1;
        }
        $user->update();
        session()->put('message', 'User Staus Updated Successfuly');   
        return \redirect('users-and-roles');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Role;
use App\Models\Role_user;
use Auth;
use Session;
class User_RolesController extends Controller
{
    public function index(){

        $userRole = DB::table('users')->get();

        $user_role=Role::all();
       
        return view('admin/user_roles/index',compact('userRole','user_role'));


    }
    public function user_edit(Request $request ,$id){
        $user=User::find($id);
        return view('admin/user_roles/user_edit',compact('user'));

    }
    public function user_update(Request $request ,$id){
       
        $user=User::find($id);
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->update();
        session()->put('message', 'User Updated Successfuly');   
        return \redirect('admin/users-and-roles');
    }
    public function delete($id){
        $user=User::find($id);
        $user->delete();
        session()->put('message', 'User Delete Successfuly');   
        return \redirect('admin/users-and-roles');
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
        return \redirect('admin/users-and-roles');
    }
    public function create(Request $request){
        // return $request->all();
        $role=new Role();
        $role->name=$request->role;
        $role->is_admin=0;
        $role->is_default=0;
        $role->type_id=1;
        $role->created_by = Auth::user()->id;
        $role->save();
        session()->put('message', 'User Role Created Successfuly');   
        return redirect('admin/users-and-roles');


    }
    public function deleteData($id){
        $role= Role::find($id);
        $role->delete();
        session()->put('message', 'User Role deleted Successfuly');   
        return redirect('admin/users-and-roles');
    }
    public function mangeuser(Request $request){
        $id=$request->id;
        $allData=DB::table('roles')
        ->join('role_user', 'role_user.role_id', '=', 'roles.id')
        ->join('users', 'role_user.user_id', '=', 'users.id')
        ->select('users.*', 'roles.*','role_user.*')
        ->where('role_user.role_id',$id)
        ->get();
        return $allData;
    }
}

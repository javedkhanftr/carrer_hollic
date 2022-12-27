<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_data;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        if(Auth::check()){
            $user=User_data::all();
        return view('user.index')->with('user',$user);
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
       
    }
    public function create(){
        if(Auth::check()){
            return view('user.create');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
     
    }
    public function save(Request $request){
        
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'email' => 'required|email|max:255',
        ]);
        $user=new User_data();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->address=$request->address;
        $user->save();
        return redirect('user_list');
    }
    public function edit($id){
        if(Auth::check()){
            $user=User_data::find($id);
        return view('user.edit')->with('user',$user);
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
        
    }
    public function update(Request $request,$id){
        
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'email' => 'required|email|max:255',
        ]);
        $user=User_data::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->address=$request->address;
        $user->update();
        return redirect('user_list');
    }
    public function delete($id){
        $user=User_data::find($id);
        $user->delete();
        return redirect('user_list');
    }
}
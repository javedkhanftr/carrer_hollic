<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wfh;
use DB;
use Illuminate\Support\Facades\Redirect;
use Auth;


class WfhController extends Controller
{
    public function wfhlist(Request $request){
        $wfhDataGet = DB::table('wfh')->get();
        return view('admin/reports.wfh.list',compact('wfhDataGet'));
    }
    public function create(){

        return view('admin/reports.wfh.add');

    }
     public function store(Request $request){


             // dd($request->all());

              $product= new Wfh;
            $product->form_date = $request->form_date;
            $product->to_date= $request->to_date;
            $product->user_id= 1;
            $product->tl_id=1;
            $product->status_approval= "pending";
             $product->day = $request->day;
            $product->day_type= $request->day_type;
            $product->reason= $request->reason;
            $product->save();
          return redirect('admin/wfh/list');

    }
    public function delete($id){
        $wfh=Wfh::find($id);
        $wfh->delete();
        return redirect('admin/wfh/list');

    }
    public function edit($id){
        $wfh=Wfh::find($id);
        return view('admin/reports/wfh/edit',compact('wfh'));
    }
    public function update(Request $request,$id){
        $product=Wfh::find($id);
        $product= new Wfh;
        $product->form_date = $request->form_date;
        $product->to_date= $request->to_date;
        $product->user_id= 1;
        $product->tl_id=1;
        $product->status_approval= "pending";
         $product->day = $request->day;
        $product->day_type= $request->day_type;
        $product->reason= $request->reason;
        $product->update();
      return redirect('admin/wfh/list');
       
    }
    public function change_status(Request $request){
        // return $request->all();
        $product=Wfh::find($request->id);
        $product->status_approval=$request->status_approval;
        $product->update();
        return $product;
    }
}
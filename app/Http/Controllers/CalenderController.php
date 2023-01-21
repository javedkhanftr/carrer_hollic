<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CrudEvents;
use App\Models\User;
use App\Models\Role_user;
use App\Models\Best_employee;
use Illuminate\Support\Facades\Auth;
class CalenderController extends Controller
{
    public function index(Request $request)
    {
        $id=Auth::user()->id;
        $user_role=Role_user::where('user_id',$id)->get();
        $events=CrudEvents::all();
        $user=User::all();
    
        return view('admin/event/index',compact('events','user','user_role'));
    }
    public function delete($id){
        $data=CrudEvents::find($id);
        $data->delete();
        return redirect('admin/event');
    }
 
    public function calendarEvents(Request $request)
    {
 
        switch ($request->type) {
           case 'create':
              $event = CrudEvents::create([
                  'event_name' => $request->event_name,
                  'event_start' => $request->event_start,
                  'event_end' => $request->event_end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'edit':
              $event = CrudEvents::find($request->id)->update([
                  'event_name' => $request->event_name,
                  'event_start' => $request->event_start,
                  'event_end' => $request->event_end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'delete':
              $event = CrudEvents::find($request->id)->delete();
  
              return response()->json($event);
             break;
             
           default:
             # ...
             break;
        }
    }
    public function edit($id){
        $event=CrudEvents::find($id);
        $user=User::all();
        return view('admin/event/edit',compact('event','user'));
    }
    public function update(Request $request,$id){
        $event = CrudEvents::find($id);
        $event->user_id=$request->user_id;
        $event->event_name=$request->event_name;
        $event->event_start=$request->event_start;
        $event->event_end=$request->event_end;
        $event->update();
        return redirect('admin/event');
    }
    public function assign(Request $request){
        $id=$request->id;
        $event=CrudEvents::find($id);
        $event->user_id=$request->user_id;
        $event->update();
        return $event;


    }
    public function create(){
        $user=User::all();
        return view('admin/event/info',compact('user'));
    }
    public function save(Request $request){
        // return $request->all();
        $event=new CrudEvents();
        $event->user_id=$request->user_id;
        $event->event_name=$request->event_name;
        $event->event_start=$request->event_start;
        $event->event_end=$request->event_end;
        $event->status=0;
        $event->save();
        return redirect('admin/event');
    }
    public function change_status(Request $request){
        $id=$request->id;
        $event=CrudEvents::find($id);
        $event->status=$request->status;
        $event->update();
        return $event;
    }
    public function best_employee(Request $request){
        $best_employe=Best_employee::find(1);
        $best_employe->user_id=$request->user_id;
   
            $best_employe->update();
            return $best_employe;
       
    }
}
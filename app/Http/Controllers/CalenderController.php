<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CrudEvents;
use App\Models\User;
class CalenderController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {  
            $data = CrudEvents::whereDate('event_start', '>=', $request->start)
                ->whereDate('event_end',   '<=', $request->end)
                ->get(['id', 'event_name', 'event_start', 'event_end']);
            return response()->json($data);
        }
        $events=CrudEvents::all();
        $user=User::all();
        return view('admin/event/index',compact('events','user'));
    }
    public function delete($id){
        $data=CrudEvents::find($id);
        $data->delete();
        return redirect('admin/calendar-event');
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
        return view('admin/event/edit',compact('event'));
    }
    public function update(Request $request,$id){
        $event = CrudEvents::find($id)->update([
            'event_name' => $request->event_name,
            'event_start' => $request->event_start,
            'event_end' => $request->event_end,
        ]);
        return redirect('admin/calendar-event');
    }
    public function assign(Request $request){
        $id=$request->id;
        $event=CrudEvents::find($id);
        $event->user_id=$request->user_id;
        $event->update();
        return $event;


    }
}
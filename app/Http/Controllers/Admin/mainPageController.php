<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Event;

class mainPageController extends Controller
{
    public function event(){
        $eventDB = Event::get()->toArray();

        return view('admin.edit.eventPage')->with(compact('eventDB'));
    }

    public function addEditEvent(Request $request,$id=null){
        if($id==""){
            // Add Img
            $eventData = new Event;
            $title = "Add Event";
            $message = "Event added successfully";
        }else{
            // Edit Image
            $eventData = Event::find($id);
            $title = "Edit Event page";
            $message = "Event updated successfully";
        }

        if($request->isMethod('POST')){
            $data = $request->all();
            $eventData->date = $data['date'];
            $eventData->country = $data['country'];
            $eventData->place = $data['place'];

            $eventData->save();
            Session::flash('success_message',$message);
            return redirect('admin/eventPage');
        }
        return view('admin.edit.add_edit_event')->with(compact('title','eventData'));

    }

    public function deleteEvent($id){
        // Delete
        Event::where('id',$id)->delete();
        $message = 'Events has been deleted successfully!';
        session::flash('success_message',$message);
        return redirect()->back();
    }

}

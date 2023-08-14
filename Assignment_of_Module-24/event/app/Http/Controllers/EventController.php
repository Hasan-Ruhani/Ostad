<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{

    function EventPage(){
        return view('pages.dashboard.customer-page');
    }

    function EventCreate(Request $request){
        $user_id = $request->header('id');
        return Event::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'mobile' => $request->input('mobile'),
            'user_id' => $user_id
        ]);
    }

    function EventList(Request $request){
        $user_id = $request->header('id');
        return Event::where('user_id', $user_id)->get();
    }

    function EventDelete(Request $request){
        $customer_id = $request->input('id');
        $user_id = $request->header('id');
        return Event::where('id', $customer_id) -> where('user_id', $user_id)->delete();
    }

    function EventUpdate(Request $request){
        $customer_id = $request->input('id');
        $user_id = $request->header('id');
        return Event::where('id', $customer_id) -> where('user_id', $user_id)->update([
            'name' => $request -> input('name'),
            'email' => $request -> input('email'),
            'address' => $request -> input('address'),
            'mobile' => $request -> input('mobile')
        ]);    
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class IndexController extends Controller
{
    public function index(Request $request){
        $getLatestEvents = Event::latest('id')->limit(3)->get();
        // dd($getLatestEvents); die;

        return view('front.index')->with(compact('getLatestEvents'));
    }

    public function bio(){

        return view('front.bio');

    }

    public function contact(){

        return view('front.contact');

    }
}

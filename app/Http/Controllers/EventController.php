<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index() {
      $events = Event::all();
    
        return view('welcome',['events' => $events]);
    }


public function create() {
  return view('events.create');   
}


public function teste() {
  return view('events.paginateste');
}

public function sobre() {
  return view('sobre');
}

public function store(Request $request) {
    
  $event = New Event;
  $event->title = $request->title;
  $event->city = $request->city;
  $event->description = $request->description;
  $event->private = $request->private;

  $event-> save();

  return redirect('/');
  
}



}
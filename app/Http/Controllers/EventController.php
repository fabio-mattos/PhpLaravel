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

// Image Upload
if ($request->hasFile('image') && $request->file('image')->isvalid()) {
  
    $requestImage = $request -> image;
    
    $extension = $requestImage->getClientOriginalExtension();
    $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;

    $requestImage ->  move(public_path('img/events'),$imageName);

    $event->image = $imageName;

}

  $event-> save();

  return redirect('/');
  
}

public function show($id) {
  $event = Event::findOrFail($id);

  return view('events.show',['event'->$event]);
}


}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use Auth;
use Image;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$events = Event::orderBy('date')->get();
        $events = Event::where('year', '2017')->orderBy('date', 'asc')->get();
        return view('events.index', compact('events'));
    }

    public function adminEvents()
    {
        $events = Event::all();
        return view('admin.adminEvents', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event;
        $event->user_id = Auth::id();
        $event->year = '2017';
        $event->date = $request->date;
        $event->open = $request->open;
        $event->open_bio = $request->open_bio;
        $event->night_tag = $request->night_tag;
        $event->headline = $request->headline;
        $event->headline_bio = $request->headline_bio;

        if($request->hasFile('open_image')){
    		$open_image = $request->file('open_image');
        $time = time();
    		$filename = '0-' . $time . '.' . $open_image->getClientOriginalExtension();
        $filesm = 'small-open' . $filename;
        $filelg = 'large-open' . $filename;
    		Image::make($open_image)->resize(400, null, function ($constraint) {
    			$constraint->aspectRatio();
    		})->save( public_path('/images/bands/2017/' . $filelg ) );

        Image::make($open_image)->resize(200, null, function ($constraint) {
    			$constraint->aspectRatio();
    		})->save( public_path('/images/bands/2017/' . $filesm ) );

    		$event->open_image = $filename;
    	  }

        if($request->hasFile('headline_image')){
    		$headline_image = $request->file('headline_image');
        $time2 = time();
    		$filename2 = 'h-' . $time2 . '.' . $headline_image->getClientOriginalExtension();
        $filesm2 = 'small-headline' . $filename2;
        $filelg2 = 'large-headline' . $filename2;
    		Image::make($headline_image)->resize(400, null, function ($constraint) {
    			$constraint->aspectRatio();
    		})->save( public_path('/images/bands/2017/' . $filelg2 ) );

        Image::make($headline_image)->resize(200, null, function ($constraint) {
    			$constraint->aspectRatio();
    		})->save( public_path('/images/bands/2017/' . $filesm2 ) );

    		$event->headline_image = $filename2;
    	  }

        $event->save();
        return back()->with('status', 'Event Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::whereId($id)->first();
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::whereId($id)->first();
        return view('admin.eventEdit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $event = Event::whereId($id)->first();
      $event->user_id = Auth::id();
      $event->year = '2017';
      $event->date = $request->date;
      $event->open = $request->open;
      $event->open_bio = $request->open_bio;
      $event->night_tag = $request->night_tag;
      $event->headline = $request->headline;
      $event->headline_bio = $request->headline_bio;

      if($request->hasFile('open_image')){
      $open_image = $request->file('open_image');
      $time = time();
      $filename = '0-' . $time . '.' . $open_image->getClientOriginalExtension();
      $filesm = 'small-open' . $filename;
      $filelg = 'large-open' . $filename;
      Image::make($open_image)->resize(400, null, function ($constraint) {
        $constraint->aspectRatio();
      })->save( public_path('/images/bands/2017/' . $filelg ) );

      Image::make($open_image)->resize(200, null, function ($constraint) {
        $constraint->aspectRatio();
      })->save( public_path('/images/bands/2017/' . $filesm ) );

      $event->open_image = $filename;
    } else {
      $event->open_image = $event->open_image;
    }

      if($request->hasFile('headline_image')){
      $headline_image = $request->file('headline_image');
      $time2 = time();
      $filename2 = 'h-' . $time2 . '.' . $headline_image->getClientOriginalExtension();
      $filesm2 = 'small-headline' . $filename2;
      $filelg2 = 'large-headline' . $filename2;
      Image::make($headline_image)->resize(400, null, function ($constraint) {
        $constraint->aspectRatio();
      })->save( public_path('/images/bands/2017/' . $filelg2 ) );

      Image::make($headline_image)->resize(200, null, function ($constraint) {
        $constraint->aspectRatio();
      })->save( public_path('/images/bands/2017/' . $filesm2 ) );

      $event->headline_image = $filename2;
      } else {
        $event->headline_image = $event->headline_image;
      }

      $event->save();
      return back()->with('status', 'Event Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

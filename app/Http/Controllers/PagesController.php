<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class PagesController extends Controller
{
    public function index() {
      $date = date("Y/m/d");
      $events = Event::where('date', '>=', $date)->take(3)->get();
      return view('pages.index', compact('events'));
    }

    public function charities() {
      return view('pages.charities');
    }

    public function information() {
      return view('pages.information');
    }
}

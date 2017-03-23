<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sponsor;
use Auth;
use Image;

class SponsorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsors = Sponsor::all();
        return view('sponsors.index', compact('sponsors'));
    }

    public function adminIndex() {
      $sponsors = Sponsor::all();
      return view('admin.adminSponsors', compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sponsors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sponsor = new Sponsor;
        $sponsor->user_id = Auth::id();
        $sponsor->sponsor_name = $request->sponsor_name;
        $sponsor->sponsor_year = $request->sponsor_year;
        $sponsor->sponsor_website = $request->sponsor_website;
        $sponsor->sponsor_desc = $request->sponsor_desc;
        $sponsor->sponsor_type = $request->sponsor_type;

        if ($request->hasFile('sponsor_image')) {
          $sponsor_image = $request->file('sponsor_image');
          $time = time();
          $filename = 'sponsor-' . $time . '.' . $sponsor_image->getClientOriginalExtension();
          Image::make($sponsor_image)->resize(300, null, function($constraint) {
            $constraint->aspectRatio();
          })->save( public_path('/images/sponsors/logos/' .$filename));
          $sponsor->sponsor_logo = $filename;
        }

        $sponsor->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $sponsor = Sponsor::whereId($id)->first();
      return view('admin.sponsorEdit', compact('sponsor'));
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
      $sponsor = Sponsor::whereId($id)->first();
      $sponsor->user_id = Auth::id();
      $sponsor->sponsor_name = $request->sponsor_name;
      $sponsor->sponsor_year = $request->sponsor_year;
      $sponsor->sponsor_website = $request->sponsor_website;
      $sponsor->sponsor_desc = $request->sponsor_desc;
      $sponsor->sponsor_type = $request->sponsor_type;

      if ($request->hasFile('sponsor_logo')) {
        $sponsor_logo = $request->file('sponsor_logo');
        $time = time();
        $filename = 'sponsor-' . $time . '.' . $sponsor_logo->getClientOriginalExtension();
        Image::make($sponsor_logo)->resize(300, null, function($constraint) {
          $constraint->aspectRatio();
        })->save( public_path('/images/sponsors/logos/' .$filename));
        $sponsor->sponsor_logo = $filename;
      } else {
        $sponsor->sponsor_logo = $sponsor->sponsor_logo;
      }

      $sponsor->save();
      return back()->with('status', 'Sponsor has been updated');
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

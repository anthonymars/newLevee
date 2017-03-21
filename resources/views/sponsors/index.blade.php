@extends('layouts.app')
@section('title')
2017 Sponsors
@stop
@section('description')
2017 Sponsors | Live on the Levee
@stop
@section('content')

<div class="container">
  <h1>2017 Sponsors</h1>
  <hr>
  <div class="row">
    <!-- Title Sponsor -->
    <div class="col-md-2">
      <img src="../images/pages/logos/lolSmall.png" alt="LOL">
    </div>
    <div class="col-md-8 col-md-offset-2">
      @if ($sponsors->count() < 1)
      <div class="alert alert-success">
        <p>Check Back Soon!</p>
      </div>
      @else
      @foreach ($sponsors as $s)
      <h3 class="text-center">Title Sponsor</h3>
      <hr>
      @if ($s->sponsor_type === "a_title")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
      @endif
      <hr>

      <h3 class="text-center">Very Special Friends</h3>
      <hr>
      @if ($s->sponsor_type === "b_very")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
      @endif
      <hr>

      <h3 class="text-center">Special Friends</h3>
      <hr>
      @if ($s->sponsor_type === "c_special")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
      @endif
      <hr>

      <h3 class="text-center">Friends</h3>
      <hr>
      @if ($s->sponsor_type === "d_friends")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
      @endif
      <hr>

      <h3 class="text-center">Contributors</h3>
      <hr>
      @if ($s->sponsor_type === "e_contributors")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
      @endif
      <hr>

      <h3 class="text-center">Single Night Sponsor</h3>
      <hr>
      @if ($s->sponsor_type === "f_single")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
      @endif
      <hr>

      <h3 class="text-center">Overlook Sponsor</h3>
      <hr>
      @if ($s->sponsor_type === "g_overlook")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
      @endif
      <hr>


      @endforeach
      @endif
    </div>
  </div>
</div>


@stop

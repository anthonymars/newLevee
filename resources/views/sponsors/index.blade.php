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
      @if ($s->sponsor_type === "a_title")
      <h3 class="text-center">Title Sponsor</h3>
      <hr>
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
      <hr>

      <h3 class="text-center">Diamond</h3>
      <hr>
      @else
      @if ($s->sponsor_type === "b_diamond")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
        <hr>
      @endif

      @endif





      <h3 class="text-center">Platinum</h3>
      <hr>
      @if ($s->sponsor_type === "c_platinum")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
      @endif
      <hr>

      <h3 class="text-center">Gold</h3>
      <hr>
      @if ($s->sponsor_type === "d_gold")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
      @endif
      <hr>

      <h3 class="text-center">Silver</h3>
      <hr>
      @if ($s->sponsor_type === "e_silver")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
      @endif
      <hr>

      <h3 class="text-center">Bronze</h3>
      <hr>
      @if ($s->sponsor_type === "f_bronze")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
      @endif
      <hr>

      <h3 class="text-center">Magnet Package</h3>
      <hr>
      @if ($s->sponsor_type === "g_magnet")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
      @endif
      <hr>

      <h3 class="text-center">Video Screen Package</h3>
      <hr>
      @if ($s->sponsor_type === "h_video")
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

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
  <h4>To Become a <span class="mainColor">SPONSOR</span> or find out more information download our sponsor packet:
    <a class="btn btn-success" href="../docs/sponsors/lolSPONSOR2017.pdf">SPONSOR PACKET</a>
  </h4>
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
      <h3 class="text-center">Title Sponsor</h3>
      <hr>
      @foreach ($sponsors as $s)
      @if ($s->sponsor_type === "a_title")
          <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
          <h4>{{$s->sponsor_name}}</h4>
          <p>{{$s->sponsor_desc}}</p>
          <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
        <hr>
      @endif
      @endforeach
      <h3 class="text-center">Diamond</h3>
      <hr>
      @foreach ($sponsors as $s)
      @if ($s->sponsor_type === "b_diamond")
      @if($s->sponsor_logo === 'default.jpg')
      <img src="/images/pages/logos/lolSmall.png" alt="sponsor" class="img img-responsive">
      @else
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
      @endif
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
        <hr>
      @endif
      @endforeach
      <h3 class="text-center">Platinum</h3>
      <hr>
      @foreach ($sponsors as $s)
      @if ($s->sponsor_type === "c_platinum")
      @if($s->sponsor_logo === 'default.jpg')
      <img src="/images/pages/logos/lolSmall.png" alt="sponsor" class="img img-responsive">
      @else
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
      @endif
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
      <hr>
      @endif
      @endforeach

      <h3 class="text-center">Gold</h3>
      <hr>
      @foreach ($sponsors as $s)
      @if ($s->sponsor_type === "d_gold")
      @if($s->sponsor_logo === 'default.jpg')
      <img src="/images/pages/logos/lolSmall.png" alt="sponsor" class="img img-responsive">
      @else
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
      @endif
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
      <hr>
      @endif
      @endforeach

      <h3 class="text-center">Silver</h3>
      <hr>
      @foreach ($sponsors as $s)
      @if ($s->sponsor_type === "e_silver")
      @if($s->sponsor_logo === 'default.jpg')
      <img src="/images/pages/logos/lolSmall.png" alt="sponsor" class="img img-responsive">
      @else
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
      @endif
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
      <hr>
      @endif
      @endforeach

      <h3 class="text-center">Bronze</h3>
      <hr>
      @foreach ($sponsors as $s)
      @if ($s->sponsor_type === "f_bronze")
      @if($s->sponsor_logo === 'default.jpg')
      <img src="/images/pages/logos/lolSmall.png" alt="sponsor" class="img img-responsive">
      @else
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
      @endif
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
      <hr>
      @endif
      @endforeach

      <h3 class="text-center">Media Sponsors</h3>
      <hr>
      @foreach ($sponsors as $s)
      @if ($s->sponsor_type === "g_media")
      @if($s->sponsor_logo === 'default.jpg')
      <img src="/images/pages/logos/lolSmall.png" alt="sponsor" class="img img-responsive">
      @else
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
      @endif
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
      <hr>
      @endif
      @endforeach



      @endif
    </div>
  </div>
</div>


@stop

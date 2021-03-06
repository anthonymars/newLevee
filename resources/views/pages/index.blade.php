@extends('layouts.app')
@section('title')
Live on the Levee
@stop
@section('description')
Live on the Levee | Charleston, WV's Free Friday Concert Series
@stop
@section('content')
<!-- carousel -->

<div class="mainBanner">
  <div class="container">
      <div class="col-md-8 col-md-offset-2 mainHeadline">
        <img src="../images/pages/logos/lolSmall.png" class="img img-responsive">
        <h1 class="text-center">Live on the Levee</h1>
        <hr>
        <h2 class="text-center">Charleston, West Virginia</h2>
      </div>
  </div>
</div>
<!-- end Carousel -->
	<div class="infoBanner">
   <div class="container">
    <div class="row">
      <div class="col-md-2">
        <img class="img img-responsive" src="../images/pages/logos/lolSmall.png" alt="LOL Logo">
      </div>
      <div class="col-md-8">
        <h2 class="media-heading text-center">Charleston, WV's Free Concert Series</h2>
        <hr>
        <p class="text-center">Live on the Levee takes place every Friday afternoon from Late May
        through early September. Music starts at 6:30pm with the headliner starting at 7:30pm.
        Entry starts at 5:00pm and will end around 9:30pm. Admission to this fantastic
        event is Free of Charge!</p>

        <h3 class="text-center">Food Vendor Applications</h3>
        <p class="text-center"><a href="{{ asset('/docs/LOTLfoodVendor2018.docx') }}">2018 Food Vendor Form</a></p>
      </div>
    </div>
  </div>
  </div>
  <div class="blockStuff">
    <div class="row">
    <div class="col-md-4 col-xs-12">
      <div class="hovereffect">
        <img src="../images/pages/goodFun.jpg" alt="Good Fun" class="img-responsive">
        <div class="overlay">
          <a href="/events"><h2>Good Fun!</h2></a>
          <p>Free Every Friday</p>
          <p><a href="/events" class="btn btn-main">2017 Events</a></p>
        </div>
      </div>
    </div>

  <div class="col-md-4 col-xs-12">
  <div class="hovereffect">
    <img src="../images/pages/goodCause.jpg" alt="Good Cause" class="img-responsive">
    <div class="overlay">
      <a href="/charities"><h2>Good Cause!</h2></a>
      <p>Moses Automotive Live on the Levee supports five local charities</p>
      <p><a href="/charities" class="btn btn-main">2017 Charities</a></p>
    </div>
  </div>
</div>

<div class="col-md-4 col-xs-12">
<div class="hovereffect">
  <img src="../images/pages/sponsors.jpg" alt="Sponsors" class="img-responsive">
  <div class="overlay">
    <a href="/2017-sponsors"><h2>Sponsors</h2></a>
    <p>The City of Charleston is grateful for the local business and individual support!</p>
    <p><a href="/2017-sponsors" class="btn btn-main">2017 Sponsors</a></p>
  </div>
</div>
</div>

</div>


  </div>
  <div class="container">

    <div class="row paddingBlock">
      <div class="col-md-6">
        <div class="embed-responsive embed-responsive-4by3">
          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3128.9784192081934!2d-81.64065418437279!3d38.34948153665808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x884f2cd188dd97b1%3A0x71d350c4e0639ca6!2sHaddad+Riverfront+Park%2C+Charleston%2C+WV+25301!5e0!3m2!1sen!2sus!4v1453407931542"></iframe>
        </div>
      </div>
      <div class="col-md-6 leftEvent">
        <h3 class="dropDownh3">Upcoming Events</h3>
        @if ($events->count() < 1)
          <h3 class="text-center">Food Vendor Applications</h3>
          <p class="text-center"><a href="{{ asset('/docs/LOTLfoodVendor2018.docx') }}">2018 Food Vendor Form</a></p>
        <!--
          <h3>2018 Sponsors:</h3>
          <h4>To Become a <span class="mainColor">SPONSOR</span> or find out more information download our sponsor packet:
            <p><a class="btn btn-success" href="../docs/sponsors/lolSPONSOR2017.pdf">SPONSOR PACKET</a></p>
          </h4>
          -->
        @else
        @foreach($events as $e)
        <div class="row">
          <div class="col-md-4">
            @if($e->headline_image === 'default.jpg')
            <a href="/events/{{$e->id}}"><img src="/images/bands/2017/default-small.jpg" alt="headliner" class="imgList img img-responsive"></a>
            @else
            <a href="/events/{{$e->id}}"><img src="/images/bands/2017/small-headline{{$e->headline_image}}" alt="headliner" class="imgList img img-responsive"></a>
            @endif
          </div>
          <div class="col-md-8">
            <a href="/events/{{$e->id}}">
            <h4 class=""><strong>{{date('F d', strtotime($e->date))}}:
            @if($e->night_tag)
            {{$e->night_tag}}</strong></h4></a>
            @else
          </strong>
            @endif
            <p><strong>Headlining Act: </strong>{{$e->headline}}
            <br><strong>Opening Act: </strong>{{$e->open}}</p>
          </div>
        </div>
        <hr>
        @endforeach
        @endif
      </div>
    </div>
  </div>

@include('layouts.analyticstracking')
@endsection

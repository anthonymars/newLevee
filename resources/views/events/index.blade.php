@extends('layouts.app')
@section('content')
  <div class="container">
    <h1>2017 Live on the Levee Events</h1>
    <hr>
    <div class="col-md-8 col-md-offset-2">
    @if ($events->count() < 1)
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Line-Up will be Announced May 12, 2017 at <span class="mainColor">HADDAD RIVERFRONT PARK!</span></h4>
      </div>
      <div class="panel-body">
          <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3128.9784192081934!2d-81.64065418437279!3d38.34948153665808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x884f2cd188dd97b1%3A0x71d350c4e0639ca6!2sHaddad+Riverfront+Park%2C+Charleston%2C+WV+25301!5e0!3m2!1sen!2sus!4v1453407931542"></iframe>
          </div>
      </div>
    </div>
    @else
    @foreach($events as $e)
      <div class="row">
        <div class="col-md-4">
          @if($e->headline_image === 'default.jpg')
          <a href="/events/{{$e->id}}"><img src="/images/bands/2017/default-small.jpg" alt="headliner" class=" imgList img img-responsive"></a>
          @else
          <a href="/events/{{$e->id}}"><img src="/images/bands/2017/small-headline{{$e->headline_image}}" alt="headliner" class="imgList img img-responsive"></a>
          @endif
        </div>
        <div class="col-md-8">
          <a href="/events/{{$e->id}}">
            <h4 class="dateHeading"> {{ date('F d', strtotime($e->date)) }}:
            @if($e->night_tag)
            {{$e->night_tag}}
            @else

            @endif
            </h4></a>
          <p>Headliner: <strong>{{$e->headline}}</strong>
          <br>Opener: <strong>{{$e->open}}</strong></p>
        </div>
      </div>
      <hr>
    @endforeach
    @endif
    </div>
  </div>
  @include('layouts.analyticstracking')
@stop

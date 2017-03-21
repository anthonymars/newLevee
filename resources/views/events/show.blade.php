@extends('layouts.app')
@section('content')
<div class="container">
  <h1>{{$event->date}}</h1>
  <h2>{{$event->night_tag}}</h2>
  <hr>
  <div class="row">
    <div class="col-md-6">
      @if ($event->headline_image === 'default.jpg')
      <img class="img img-responsive" src="../images/bands/2017/default.jpg" alt="Headlining Act">
      @else
      <img class="img img-responsive" src="../images/bands/2017/large-headline{{$event->headline_image}}" alt="Headlining Act">
      @endif
    </div>
    <div class="col-md-6">
      <h3>Headliner: {{$event->headline}}</h3>
      <p>{!! $event->headline_bio !!}</p>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-6 pull-right">
      @if ($event->open_image === 'default.jpg')
      <img class="img img-responsive" src="../images/bands/2017/default.jpg" alt="Headlining Act">
      @else
      <img class="img img-responsive" src="../images/bands/2017/large-open{{$event->open_image}}" alt="Headlining Act">
      @endif
    </div>
    <div class="col-md-6">
      <h3>Opener: {{$event->open}}</h3>
      <p>{!! $event->open_bio !!}</p>
    </div>
  </div>
</div>
@stop

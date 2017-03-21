@extends('layouts.app')
@section('content')
  <div class="container">
    <h1>Click on the date or image to edit the Event</h1>
    <hr>
    @foreach($events as $e)

    <div class="row">
      <div class="col-md-2">
        @if($e->headline_image === 'default.jpg')
        <a href="/admin/events/{{$e->id}}/edit"><img src="/images/bands/2017/default-small.jpg" alt="headliner" class="img img-responsive"></a>
        @else
        <a href="/admin/events/{{$e->id}}/edit"><img src="/images/bands/2017/small-headline{{$e->headline_image}}" alt="headliner" class="img img-responsive"></a>
        @endif
      </div>
      <div class="col-md-4">
        <a href="/admin/events/{{$e->id}}/edit">
          <h4 class="media-heading">{{$e->date}}
          @if($e->night_tag)
          {{$e->night_tag}}
          @else
          |
          @endif
          </h4></a>
          <p>Headliner: <strong>{{$e->headline}}</strong>
          <br>Opener: <strong>{{$e->open}}</strong></p>
      </div>
    </div>
    <hr>
    @endforeach
  </div>
@stop

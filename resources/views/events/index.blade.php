@extends('layouts.app')
@section('content')
  <div class="container">
    <h1>2017 Live on the Levee Events</h1>
    <hr>
    <div class="col-md-8 col-md-offset-2">
    @if ($events->count() < 1)
    <div class="alert alert-success">
      <p>Check Back Soon!</p>
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
            <h4 class="dateHeading">{{$e->date}}
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
    @endif
    </div>
  </div>
@stop

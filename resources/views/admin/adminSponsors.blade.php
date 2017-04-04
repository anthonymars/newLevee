@extends('layouts.app')
@section('title')
Admin Sponsors
@stop
@section('description')
admin Sponsor List
@stop
@section('content')

<div class="container">
  <h1>2017 Sponsor Edit Page</h1>
  <hr>
  <div class="row">
    <!-- Title Sponsor -->
    <div class="col-md-2">
      <img src="../images/pages/logos/lolSmall.png" alt="LOL">
    </div>
    <div class="col-md-8 col-md-offset-2">
      @if ($sponsors->count() < 1)
      <div class="alert alert-success">
        <p>No Sponsors Added</p>
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
            <div class="form-group">
              <a href="/admin/sponsors/{{$s->id}}/edit" class="btn btn-primary" type="submit">Edit this Sponsor</a>
            </div>
        <hr>
      @endif
      @endforeach
      <h3 class="text-center">Diamond</h3>
      <hr>
      @foreach ($sponsors as $s)
      @if ($s->sponsor_type === "b_diamond")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
          <div class="form-group">
            <a href="/admin/sponsors/{{$s->id}}/edit" class="btn btn-primary" type="submit">Edit this Sponsor</a>
          </div>

        <hr>
      @endif
      @endforeach
      <h3 class="text-center">Platinum</h3>
      <hr>
      @foreach ($sponsors as $s)
      @if ($s->sponsor_type === "c_platinum")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
          <div class="form-group">
            <a href="/admin/sponsors/{{$s->id}}/edit" class="btn btn-primary" type="submit">Edit this Sponsor</a>
          </div>
      <hr>
      @endif
      @endforeach

      <h3 class="text-center">Gold</h3>
      <hr>
      @foreach ($sponsors as $s)
      @if ($s->sponsor_type === "d_gold")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
          <div class="form-group">
            <a href="/admin/sponsors/{{$s->id}}/edit" class="btn btn-primary" type="submit">Edit this Sponsor</a>
          </div>
      <hr>
      @endif
      @endforeach

      <h3 class="text-center">Silver</h3>
      <hr>
      @foreach ($sponsors as $s)
      @if ($s->sponsor_type === "e_silver")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
          <div class="form-group">
            <a href="/admin/sponsors/{{$s->id}}/edit" class="btn btn-primary" type="submit">Edit this Sponsor</a>
          </div>
      <hr>
      @endif
      @endforeach

      <h3 class="text-center">Bronze</h3>
      <hr>
      @foreach ($sponsors as $s)
      @if ($s->sponsor_type === "f_bronze")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
          <div class="form-group">
            <a href="/admin/sponsors/{{$s->id}}/edit" class="btn btn-primary" type="submit">Edit this Sponsor</a>
          </div>
      <hr>
      @endif
      @endforeach

      <h3 class="text-center">Media Sponsors</h3>
      <hr>
      @foreach ($sponsors as $s)
      @if ($s->sponsor_type === "g_media")
        <img src="/images/sponsors/logos/{{$s->sponsor_logo}}" alt="title sponsor" class="img img-responsive">
        <h4>{{$s->sponsor_name}}</h4>
        <p>{{$s->sponsor_desc}}</p>
        <p><a href="http://www.{{$s->sponsor_website}}">{{$s->sponsor_website}}</a></p>
          <div class="form-group">
            <a href="/admin/sponsors/{{$s->id}}/edit" class="btn btn-primary" type="submit">Edit this Sponsor</a>
          </div>
      <hr>
      @endif
      @endforeach

      @endif
    </div>
  </div>
</div>


@stop

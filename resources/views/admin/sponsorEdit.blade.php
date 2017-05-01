@extends('layouts.app')
@section('title')
Admin Sponsor Edit
@stop
@section('description')
Edit Sponsor
@stop
@section('content')


<div class="container">
  <h1>Edit {{$sponsor->sponsor_name}}</h1>
  <hr>
  <div class="col-md-8 col-md-offset-2">
    @if (session('status'))
    <div class="alert alert-success">
      <p>{{session('status')}}</p>
    </div>
    @endif
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>Sponsor Info:</h3>
      </div>
      <div class="panel-body">
        <form enctype="multipart/form-data" action="/admin/sponsors/{{$sponsor->id}}/edit" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="sponsor_name">Sponsor Name</label>
            <input type="text" name="sponsor_name" class="form-control" value="{{$sponsor->sponsor_name}}">
          </div>
          <div class="form-group">
            <label for="sponsor_name">Sponsor Year</label>
            <select name="sponsor_year" value="{{$sponsor->sponsor_year}}" class="form-control">
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
            </select>
          </div>
          <div class="form-group">
            <label for="sponsor_website">Sponsor website: example = whatev.com... leave off the http </label>
            <input type="text" class="form-control" name="sponsor_website" value="{{$sponsor->sponsor_website}}">
          </div>
          <div class="form-group">
            <label for="sponsor_desc">Sponsor description</label>
            <textarea name="sponsor_desc" id="" cols="30" rows="10" class="form-control">{{$sponsor->sponsor_desc}}</textarea>
          </div>
          <div class="form-group">
            <label for="sponsor_type">Sponsor Level</label>
            <select name="sponsor_type" id="" class="form-control">
              <option value="{{$sponsor->sponsor_type}}">{{$sponsor->sponsor_type}}</option>
              <option value="a_title">Title Sponsor</option>
              <option value="b_diamond">Diamond</option>
              <option value="c_platinum">Platinum</option>
              <option value="d_gold">Gold</option>
              <option value="e_silver">Silver</option>
              <option value="f_bronze">Bronze</option>
              <option value="g_media">Media Sponsor</option>
              <option value="h_kind">In - Kind Sponsor</option>
            </select>
          </div>
          <div class="form-group">
            <label for="sponsor_image">Sponsor Logo (If no image provided a default is loaded)</label>
            <input type="file" name="sponsor_logo">
            @if($sponsor->sponsor_logo === 'default.jpg')
            <img src="/images/pages/logos/lolSmall.png" alt="sponsor" class="img img-responsive">
            @else
            <img src="/images/sponsors/logos/{{$sponsor->sponsor_logo}}" alt="sponsor" class="img img-responsive">
            @endif
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit">Edit Sponsor <i class="fa fa-plus"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>



@stop

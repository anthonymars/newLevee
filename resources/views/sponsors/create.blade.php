@extends('layouts.app')
@section('content')

<div class="container">
  <h1>Add a Sponsor</h1>
  <hr>
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>Sponsor Info:</h3>
      </div>
      <div class="panel-body">
        <form enctype="multipart/form-data" action="/admin/sponsors" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="sponsor_name">Sponsor Name</label>
            <input type="text" name="sponsor_name" class="form-control">
          </div>
          <div class="form-group">
            <label for="sponsor_name">Sponsor Year</label>
            <select name="sponsor_year" id="" class="form-control">
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
            </select>
          </div>
          <div class="form-group">
            <label for="sponsor_website">Sponsor website: example = whatev.com... leave off the http </label>
            <input type="text" class="form-control" name="sponsor_website">
          </div>
          <div class="form-group">
            <label for="sponsor_desc">Sponsor description</label>
            <textarea name="sponsor_desc" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="sponsor_type">Sponsor Level</label>
            <select name="sponsor_type" id="" class="form-control">
              <option value="a_title">Title Sponsor</option>
              <option value="b_very">Very Special Friend</option>
              <option value="c_special">Special Friend</option>
              <option value="d_friend">Friend</option>
              <option value="e_contributor">Contributor</option>
              <option value="f_single">Single Night Sponsor</option>
              <option value="g_overlook">Overlook Sponsor</option>
            </select>
          </div>
          <div class="form-group">
            <label for="sponsor_image">Sponsor Logo (If no image provided a default is loaded)</label>
            <input type="file" name="sponsor_image">
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit">Add Sponsor <i class="fa fa-plus"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>

@stop

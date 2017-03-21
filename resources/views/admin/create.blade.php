@extends('layouts.app')
@section('title')
Live on the Levee
@stop
@section('description')
Live on the Levee | Charleston, WV's Free Friday Concert Series
@stop
@section('content')


<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1>Create a Role</h1>
      </div>
      <div class="panel-body">
        <form action="/admin/roles" class="" method="post">
          {{ csrf_field() }}

          @if (session('status'))
          <p class="alert alert-success">{{ session('status') }}</p>
          @endif

          <div class="form-group">
            <label for="role">Create New Role:</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Role</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@stop

@extends('layouts.app')
@section('title')
Live on the Levee
@stop
@section('description')
Live on the Levee | Charleston, WV's Free Friday Concert Series
@stop
@section('content')

<div class="container">
<div class="col-md-6 col-md-offset-3">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3>{{$user->name}}</h3>
    </div>
    <div class="panel-body">
      <form action="" method="post" class="form-horizontal">
        {{ csrf_field() }}
        @if(session('status'))
          <p class="alert alert-success">{{ session('status') }}</p>
        @endif
        <legend>Edit User Info</legend>

        <div class="form-group">
          <label for="name" class="col-lg-2 control-label">Name</label>
          <div class="col-lg-10">
            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
          </div>
        </div>

        <div class="form-group">
          <label for="email" class="col-lg-2 control-label">Email</label>
          <div class="col-lg-10">
            <input type="text" name="email" class="form-control" value="{{ $user->email }}">
          </div>
        </div>

        <div class="form-group">
          <label for="select" class="col-lg-2 control-label">Role</label>
          <div class="col-lg-10">
            <select name="role[]" class="form-control" multiple>
              @foreach ($roles as $role)
              <option value="{{ $role->name }}"
              @if (in_array($role->name, $selectedRoles)) selected="selected"
              @endif>{{ $role->name }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <button class="btn btn-default" type="reset">Cancel</button>
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </div>


      </form>
    </div>
  </div>
</div>


</div>

@stop

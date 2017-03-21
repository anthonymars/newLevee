@extends('layouts.app')
@section('title')
Live on the Levee
@stop
@section('description')
Live on the Levee | Charleston, WV's Free Friday Concert Series
@stop
@section('content')

<div class="container">
  <h1>All Roles</h1>
  @if ($roles->isEmpty())
  <p class="alert alert-danger">No Roles Yet</p>
  @else
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1>All Roles</h1>
        @if (session('status'))
          <p class="alert alert-success">{{ session('status') }}</p>
        @endif
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Role</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($roles as $role)
                <tr>
                  <td><a href="/admin/role/{{$role->id}}">{{$role->name}}</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endif
</div>




@stop

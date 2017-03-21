@extends('layouts.app')
@section('content')
<div class="container">
  <h1>Edit {{$event->date}}</h1>
  <hr>
  <div class="row">
      <h4>Event / Band Info</h4>
      <hr>
      <form enctype="multipart/form-data" action="" method="post">
        {{ csrf_field() }}
        <div class="col-md-6">
          <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" name="date" value={{$event->date}}>
          </div>
          <div class="form-group">
            <label for="open">Opening Act</label>
            <input type="text" class="form-control" name="open" value={{$event->open}}>
          </div>
          <div class="form-group">
            <label for="open_bio">Opening Act Bio</label>
            <textarea name="open_bio" class="form-control summernote" cols="30" rows="10">{{$event->open_bio}}</textarea>
          </div>
          <div class="form-group">
            <label for="open_image">Opening Act Image (If no image provided a default is loaded)</label>
            <input type="file" name="open_image">
            <hr>
            @if($event->open_image === 'default.jpg')
            <img src="/images/bands/2017/default-small.jpg" alt="openr" class="img img-responsive">
            @else
            <img src="/images/bands/2017/small-open{{$event->open_image}}" alt="headliner" class="img img-responsive">
            @endif
          </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
          <label for="night_tag">Night Headline Tag</label>
          <input type="text" class="form-control" name="night_tag" value={{$event->night_tag}}>
        </div>

        <div class="form-group">
          <label for="headline">Headlining Act</label>
          <input type="text" name="headline" class="form-control" value={{$event->headline}}>
        </div>
        <div class="form-group">
          <label for="headline_bio">Headlining Act Bio</label>
          <textarea name="headline_bio" class="form-control summernote" cols="30" rows="10">{{$event->headline_bio}}</textarea>
        </div>
        <div class="form-group">
          <label for="headline_image">Headlining Act Image (If no image provided a default is loaded)</label>
          <input type="file" name="headline_image">
          <hr>
          @if($event->headline_image === 'default.jpg')
          <img src="/images/bands/2017/default-small.jpg" alt="headliner" class="img img-responsive">
          @else
          <img src="/images/bands/2017/small-headline{{$event->headline_image}}" alt="headliner" class="img img-responsive">
          @endif
        </div>
        <div class="form-group">
          <button class="btn btn-primary pull-right" type="submit"><i class="fa fa-plus"></i>Update Event</button>
        </div>

      </form>

    </div>

  </div>
</div>
@stop

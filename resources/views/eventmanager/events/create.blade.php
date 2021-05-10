@extends('layouts.app')

@section('content')
<style>
.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: $custom-file-height;
  margin-bottom: 0;
  border: none;
}

label{
  font-size: 16px;
  font-weight: 400px;
  color: black;
  text-shadow: 1px 1px black;
}

</style>
<div class="section ">
<div class="container shadowE col-md-10" style="padding-top: 25px; padding-bottom: 25px; background-color: #fff; margin-top: 100px;">
  <div style="background-color: red; margin-bottom: 60px;"class="container ">
    <div class=" bg-white ">
        <div class="row">
            <div style="padding-top: 15px; padding-bottom: 10px;"class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <!-- section-title -->
                <div class="section-title mb-0" style="text-align: center;">
                    <h1>Create New Event</h1>

                </div>
                <!-- /.section-title -->
            </div>
        </div>
    </div>
    </div>
    <div class="row justify-content-center">

    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{ route('eventmanager.events.store') }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Event Name</label>
                <input placeholder="Give a name for your event" type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" />
            </div>
            <div class="form-group col-md-6">
                <label for="description">Event Description</label>
                <input placeholder="Describe your event" type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" />
            </div>
          </div>
            <div class="row">
            <div class="form-group col-md-6">
              <label for="venue">Event Venue</label>
              <select name="venue_id">
                @foreach ($venues as $venue)
                 <option value="{{ $venue->id }}" {{ (old('venue_id') == $venue->id) ? "selected" : "" }} >{{ $venue->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="genre">Event Genre</label>
              <select name="genre_id">
                @foreach ($types as $genre)
                 <option value="{{ $genre->id }}" {{ (old('genre_id') == $genre->id) ? "selected" : "" }} >{{ $genre->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
                <label for="date">Event's Date</label>
                <input type="date" name="date" value="{{ old('date') }}"/>
            </div>
            <div class="form-group col-md-6">
                <label for="time">Event's Time</label>
                <input type="time" name="time"  value="{{ old('time') }}"/>
            </div>
          </div>
          <div class="row">
          <div class="form-group col-md-3">
          <label>Event Cover </label><input type="file" class="form-control custom-file" id="cover" name="cover" />
          </div>
          </div>
          <div class="row justify-content-center">
          <div class="form-group col-md-3">
            <a href="{{ route('eventmanager.home') }}" class="btn shadow">Cancel</a>
            <button type="submit" style=" font-size: 16px; border-radius: 0px; background-color: #1cffac; margin-left: 25px;" class="btn pull-right shadow">Create Event</button>
          </div>
          </div>

        </form>
    </div>
</div>
</div>

@endsection

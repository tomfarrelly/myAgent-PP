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
<div class="section">
<div class="container shadowE col-md-6" style="padding-top: 25px; padding-bottom: 25px; background-color: #fff; margin-top: 100px;">
  <div style="background-color: red; margin-bottom: 60px;"class="container ">
    <div class=" bg-white ">
        <div class="row">
            <div style="padding-top: 15px; padding-bottom: 10px;"class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <!-- section-title -->
                <div class="section-title mb-0" style="text-align: center;">
                    <h1>Book DJ for Event</h1>

                </div>
                <!-- /.section-title -->
            </div>
        </div>
    </div>
    </div>
    <div class="row justify-content-center">
      <div style="display: none !important;" class= "card-header">
        @foreach($events as $event)
        {{ $event->name }}: Make a Booking
        @endforeach
      </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('eventmanager.events.bookings.store', $event->id)}}">
                @csrf
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="row">
          <div class="form-group col-md-8">
            <label for="event_id">Event</label>
            <br>
            <select name="event_id">
              @foreach ($events as $event)
               <option value="{{ $event->id }}" {{ (old('event_id') == $event->id) ? "selected" : "" }} >{{ $event->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="genre">DJ</label>
            <br>
            <select name="dj_id">
              @foreach ($djs as $dj)
               <option value="{{ $dj->id }}" {{ (old('dj_id') == $dj->id) ? "selected" : "" }} >{{ $dj->user->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <br>
          <div class="row justify-content-center">
          <div class="form-group ">
            <a href="{{ route('eventmanager.home') }}" class="btn shadow">Cancel</a>
            <button type="submit" style=" font-size: 16px; border-radius: 0px; background-color: #1cffac; margin-left: 25px;" class="btn pull-right shadow">Send Booking</button>
          </div>
          </div>

        </form>
    </div>
</div>
</div>

@endsection

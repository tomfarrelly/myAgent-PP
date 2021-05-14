@extends('layouts.app')

@section('title')
   Booking
@endsection

@section('content')
<style>
td{
  border:none;
}
</style>
<div class="container mt-5">
  <div class="col-10" style="margin-bottom: 15px;">
    <a  href="{{ route('dj.bookings.index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
  </svg> Back </a>
  </div>
    <div class="row">
        <div class="col-md-12 col-md-offset-2 ">
            <div class="card shadowE">
              <form method="POST" action="{{ route('dj.bookings.store', $bookings->id)}}">
              @csrf
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row justify-content-center">
                    <h2 style="padding-top:10px; text-shadow: 1px 1px black;">Event Name: {{ $bookings->event->name }}</h2>
                </div>
                <div class="card-body">
                  <div class="row justify-content-center">
                    <div class="col-md-6">
                  <img src="{{ asset('uploads/event/'.$bookings->event->cover) }}" class="w-100">
                  </div>
                  <div class="col-md-6">
                    <label style=" color:black; text-shadow: 1px 1px black;">Description</label>
                    <p>{{ $bookings->event->description }}</p>
                    <label style=" color:black; text-shadow: 1px 1px black;">Venue Name</label>
                    <h4 style="color:gray;">{{ $bookings->event->venue->name }}</h4>
                    <label style=" color:black; text-shadow: 1px 1px black;">Event Genre</label>
                    <h4 style="color:gray;">{{ $bookings->event->genre->name }}</h4>
                    <div class="row">
                      <div class="col-8">
                    <label style=" color:black; text-shadow: 1px 1px black;">Event Date</label>
                    <h4 style="color:gray;">{{ $bookings->event->date }}</h4>
                     </div>
                     <div class="col-4">
                    <label style=" color:black; text-shadow: 1px 1px black;">Event Time</label>
                    <h4 style="color:gray;">{{ $bookings->event->time }}</h4>
                    <label style=" color:black; text-shadow: 1px 1px black;">Event</label>
                    <select class="hidden" name="event_id">
                       <option value="{{ $bookings->event->id }}" {{ (old('event_id') == $bookings->event->id)}} >{{ $bookings->event->name }}</option>
                    </select>
                    <label style=" color:black; text-shadow: 1px 1px black;">DJ</label>
                    <select name="dj_id">
                       <option value="{{ $bookings->dj->id }}" {{ (old('dj_id') == $bookings->dj->id)}} >{{ $bookings->dj->user->name }}</option>
                    </select>
                  </div>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="card">
            <div class= "card-header">

              {{ $bookings->event_id }}: Make a Booking

            </div>
            <div class="panel-body">
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

                    <form method="POST" action="{{ route('dj.bookings.store', $bookings->id)}}">
                    @csrf
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    {{-- <div class="form-group">
                      <label class="form-check-label" for="status">status</label>
                      <input type="checkbox" class="form-check-input" id="status" name="status" value="{{csrf_field()}}">
                    </div> --}}
                    <div class="card-body">
                        <table class="table table-hover">
                            <tbody>
                              <tr>
                                <td rowspan="6">
                                  <img src="{{ asset('uploads/event/'.$bookings->event->cover) }}" class="w-100">
                                </td>
                              </tr>

                                    <td>Event</td>
                                    <td>
                                      <select name="event_id">

                                         <option value="{{ $bookings->event->id }}" {{ (old('event_id') == $bookings->event->id)}} >{{ $bookings->event->name }}</option>

                                      </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Djs</td>
                                    <td>
                                          <select name="dj_id">

                                             <option value="{{ $bookings->dj->id }}" {{ (old('dj_id') == $bookings->dj->id)}} >{{ $bookings->dj->user->name }}</option>

                                          </select>
                                    </td>

                                </tr>
                                <tr>
                                  <td>
                                    {{-- <label class="form-check-label" for="status">status</label>
                                    <input type="checkbox" class="form-check-input" id="status" name="status" value="{{csrf_field()}}" /> --}}
                                    <button type="submit" class="btn btn-success pull-left" id="status" name="status" value="{{csrf_field()}}" /> Accept </button>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <br>

                                  </td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                    <a href="{{ route('dj.bookings.index') }}" class="btn btn-warning">Cancel</a>
                    {{-- <a href="{{ route('dj.events.show', $events->id) }}" class="btn btn-warning">Show Event</a> --}}
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                  </form>
                  <form style="display:inline-block" method="POST" action="{{ route('dj.bookings.destroy', $bookings->id) }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="form-control btn btn-danger">Decline</button>
                  </form>
                   {{-- <form style="display:inline-block" method="POST" action="{{ route('dj.bookings.destroy', $bookings->id) }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="form-control btn btn-danger">Decline</button>
                  </form> --}}
               </div>
            </div>
        </div>
    </div>
  </div>

@endsection

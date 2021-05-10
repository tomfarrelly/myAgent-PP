@extends('layouts.app')

@section('title')
   Booking
@endsection

@section('content')

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
                    <button type="submit" class="form-control btn btn-danger">Delete</button>
                  </form> --}}
               </div>
            </div>
        </div>
    </div>
  </div>

@endsection

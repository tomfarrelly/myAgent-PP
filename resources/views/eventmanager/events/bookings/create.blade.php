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
              {{ $event->name }}: Make a Booking
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
                  
                  <form action="{{ route('eventmanager.events.bookings.store', $event->id) }}" method="post">
    	             @csrf
                    <div class="form-group">
                      <label class="form-check-label" for="status">status</label>

                      <input type="checkbox" class="form-check-input" id="status" name="status" value="{{csrf_field()}}">
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tbody>
                              <tr>
                                <td rowspan="6">
                                  <img src="{{ asset('uploads/event/'.$event->cover) }}" class="w-100">
                                </td>
                              </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ $event->name }}</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>{{ $event->description }}</td>
                                </tr>
                                <tr>
                                    <td>Venue</td>
                                    <td>{{ $event->venue }}</td>
                                </tr>
                                <tr>
                                    <td>Date</td>
                                    <td>{{ $event->date }}</td>
                                </tr>
                                <tr>
                                    <td>Time</td>
                                    <td>{{ $event->time }}</td>
                                </tr>
                                <tr>
                                    <td>Type</td>
                                    <td>{{ $event->type }}</td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                    <a href="{{ route('eventmanager.events.show', $event->id) }}" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                  </form>
               </div>
            </div>
        </div>
    </div>
  </div>

@endsection

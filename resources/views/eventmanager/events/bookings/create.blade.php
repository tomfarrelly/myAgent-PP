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
                  <form method="POST" action="{{ route('eventmanager.events.bookings.store', $event->id)}}" >
                    <input type="hidden" name="_token" value="{{csrf_field()}}">
                    <div class="form-group">
                      <label for="status">status</label>
                      <input type="text" class="form-control" id="status" name="status" value="{{ old('status') }}">
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

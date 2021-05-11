@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     You are logged in as a DJ.
                     <br>
                     <br>
                       <a href="{{ route('dj.bookings.index') }}" class="btn btn-primary float-right">View My Bookings</a>
                       <a href="{{ route('dj.availability.create') }}" class="btn btn-primary float-left">Book Days Off</a>





                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <p id="alert-message" class="alert-collapse"></p>

            <div class="card">
                <div class="card-header">
                    My Events
                </div>

                <div class="card-body">
                    @if (count($bookings) === 0)
                    <p>There are no events!</p>
                    @else
                    <table id="table-events" class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Venue</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Genre</th>
                            <th>Made By</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                          {{-- <div class="album py-5 bg-light">
                            <div class="container"> --}}
                              {{-- <div class="row">
                                <div class="col-4">
                             <h3 class="">Events Taking Place</h3>
                           </div>
                           </div> --}}
                           {{-- <div class="card-group">
                              <div class="row">
                                <div class="col-md-4">
                                  <div class="card mb-4 box-shadow">

                                    <img src="{{ asset('uploads/event/'.$event->cover) }}" class="normal" width="250" height="250">
                                    <div class="card-body">
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                      <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                          <a href="{{ route('eventmanager.events.show', $event->id) }}" class="btn btn-primary">View</a>
                                          <a href="{{ route('eventmanager.events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </div>
                              @endforeach --}}
                            {{-- </div>
                            </div> --}}

                            {{-- <div class="card-deck">
                                @foreach ($events as $event)
                              <div class="card ">

                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>

                              </div>
                              @endforeach
                              </div> --}}

                          </div>

                            @foreach ($bookings as $booking)
                            <tr data-id="{{ $booking->event->id }}">
                                <td>{{ $booking->event->name }}</td>
                                <td>{{ $booking->event->description }}</td>
                                <td>{{ $booking->event->venue->name }}</td>
                                <td>{{ $booking->event->date }}</td>
                                <td>{{ $booking->event->time }}</td>
                                <td>{{ $booking->event->genre->name }}</td>
                                <td>{{ $booking->event->user_id }}</td>
                                <td>
                                    <a href="{{ route('dj.events.show', $booking->event->id) }}" class="btn btn-primary">View</a>
                                    {{-- <a href="{{ route('eventmanager.events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                                    <form style="display:inline-block" method="POST" action="{{ route('eventmanager.events.destroy', $event->id) }}">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <button type="submit" class="form-control btn btn-danger">Delete</button>
                                    </form> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

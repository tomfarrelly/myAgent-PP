@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <p id="alert-message" class="alert-collapse"></p>

            <div class="card">
                <div class="card-header">
                    My Booking Requests

                </div>

                <div class="card-body">
                    @if (count($bookings) === 0)
                    <p>There are no bookings!</p>
                    @else
                    <table id="table-bookings" class="table table-hover">
                        <thead>

                            <th>Sent By</th>
                            <th>Event</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th>Description</th>

                        </thead>
                        <tbody>
                          @foreach ($bookings as $booking)
                            <tr data-id="{{ $booking->id }}">


                              <td>{{ $booking->event->user->name}}</td>
                            </a>
                              <td>{{ $booking->event->name }}</td>
                                  <td>{{ $booking->event->date }}</td>
                                  <td>{{ $booking->event->time }}</td>
                                  <td>{{ $booking->event->venue->name }}</td>
                                  <td>{{ $booking->event->description}}</td>

                                    {{-- <td>{{$events->id=1}}</td> --}}


                                  {{-- <td>{{ $events->user->name }}</td> --}}
                                   {{-- @foreach ($events as $event)
                                <td>{{ $event->name }}</td>

                                 <td>{{ $event->date }}</td>
                                <td>{{ $event->time }}</td>
                                <td>{{ $event->user->name }}<td>
                                @endforeach --}}
                                <td>

                                  <a href="{{ route('dj.page.profile.show', $booking->event->user->id) }}" class="btn btn-default">Profile</a>

                                  <a href="{{ route('dj.bookings.edit', $booking->id) }}" class="btn btn-primary float-right">View Booking</a>
                                  @endforeach
                                    {{-- <a href="{{ route('eventmanager.bookings.show', $booking->id) }}" class="btn btn-primary">View</a>
                                    <a href="{{ route('eventmanager.bookings.edit', $booking->id) }}" class="btn btn-warning">Edit</a>
                                    <form style="display:inline-block" method="POST" action="{{ route('dj.booking.destroy', $bookings->id) }}">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <button type="submit" class="form-control btn btn-danger">Delete</button> --}}
                                    </form>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    @endif
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    My Confirmed Bookings

                </div>

                <div class="card-body">
                    @if (count($confirmedBookings) === 0)
                    <p>There are no confirmed bookings!</p>
                    @else
                    <table id="table-bookings" class="table table-hover">
                        <thead>

                            <th>Sent By</th>
                            <th>Event</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th>Description</th>

                        </thead>
                        <tbody>
                          @foreach ($confirmedBookings as $booking)
                            <tr data-id="{{ $booking->id }}">


                              <td>{{ $booking->event->user->name}}</td>

                              <td>{{ $booking->event->name }}</td>
                                  <td>{{ $booking->event->date }}</td>
                                  <td>{{ $booking->event->time }}</td>
                                  <td>{{ $booking->event->venue->name }}</td>
                                  <td>{{ $booking->event->description}}</td>


                                <td>

                                  <a href="{{ route('dj.page.profile.show', $booking->event->user->id) }}" class="btn btn-default">Profile</a>
                                  <a href="{{ route('dj.events.show', $booking->event->id) }}" class="btn btn-default">Event</a>

                                  <a href="{{ route('dj.bookings.edit', $booking->id) }}" class="btn btn-primary float-right">Edit Booking</a>
                                  @endforeach
                                    {{-- <a href="{{ route('dj.bookings.show', $booking->id) }}" class="btn btn-primary">View</a>
                                    <a href="{{ route('dj.bookings.edit', $booking->id) }}" class="btn btn-warning">Edit</a>
                                    <form style="display:inline-block" method="POST" action="{{ route('dj.bookings.index', $booking->id) }}">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <button type="submit" class="form-control btn btn-danger">Delete</button> --}}
                                    </form>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

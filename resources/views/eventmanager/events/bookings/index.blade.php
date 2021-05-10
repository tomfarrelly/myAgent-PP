@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <p id="alert-message" class="alert-collapse"></p>

            <div class="card">
                <div class="card-header">
                    Events


                <div class="card-body">
                    @if (count($bookings) === 0)
                    <p>There are no bookings!</p>
                    @else
                    <table id="table-bookings" class="table table-hover">
                        <thead>
                            <th>Sent To</th>
                            <th>Event</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Description</th>
                            <th>Sent By</th>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                            <tr data-id="{{ $booking->id }}">
                                <td>{{ $booking->dj_id }}</td>
                                <td>{{ $booking->event_id }}</td>
                                {{-- @foreach($dj_event->event_id as $event)
                                 <td>{{ $event->pivot->date }}</td>
                                <td>{{ $event->time }}</td>
                                <td>{{ $event->description }}</td> --}}
                              @endforeach
                                <td>
                                    {{-- <a href="{{ route('eventmanager.bookings.show', $booking->id) }}" class="btn btn-primary">View</a>
                                    <a href="{{ route('eventmanager.bookings.edit', $booking->id) }}" class="btn btn-warning">Edit</a>
                                    <form style="display:inline-block" method="POST" action="{{ route('eventmanager.events.destroy', $booking->id) }}">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <button type="submit" class="form-control btn btn-danger">Delete</button> --}}
                                    </form>
                                </td>
                            </tr>
                          {{--  @endforeach --}}
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

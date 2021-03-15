@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    DJ: {{ $dj->user->name }}
                </div>

                <div class="card-body">
                    <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td rowspan="6">
                              <img src="{{ asset('uploads/profile/'.$dj->user->image) }}" class="w-100">
                            </td>
                          </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $dj->user->name }}</td>
                            </tr>
                            <tr>
                                <td>Bio</td>
                                <td>{{ $dj->user->bio }}</td>
                            </tr>
                            <tr>
                                <td>Genre</td>
                                <td>{{ $dj->user->genre }}</td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td>{{ $dj->user->location }}</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>{{ $dj->price }}</td>
                            </tr>
                            <tr>
                                <td>User ID</td>
                                <td>{{ $dj->user_id }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="{{ route('eventmanager.djs.index') }}" class="btn btn-default">Back</a>

                    <a href="{{ route('eventmanager.djs.index') }}" class="btn btn-warning">View DJs for Event</a>

                    <a href="{{ route('eventmanager.events.bookings.create', $dj) }}" class="btn btn-primary float-right">Make Booking</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

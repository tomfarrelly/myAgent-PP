@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <p id="alert-message" class="alert-collapse"></p>

            <div class="card">
                <div class="card-header">
                    DJ Roster

                </div>

                <div class="card-body">

                    @if (count($bookings) === 0)
                    <p>There are no DJs!</p>
                    @else
                    <table id="table-bookings" class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>bio</th>
                            <th>genre</th>
                            <th>location</th>
                            <th>price</th>
                            <th>user id</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                          @foreach ($bookings as $booking)


                            <tr data-id="{{ $booking->dj->id }}">
                                <td>{{ $booking->dj->user->name }}</td>
                                <td>{{ $booking->dj->user->bio }}</td>
                                <td>{{ $booking->dj->user->genre }}</td>
                                <td>{{ $booking->dj->user->location }}</td>
                                <td>{{ $booking->dj->price }}</td>
                                <td>{{ $booking->dj->user_id }}</td>
                                <td>
                                    <a href="{{ route('eventmanager.page.profile.show', $booking->dj->id) }}" class="btn btn-primary">View</a>

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

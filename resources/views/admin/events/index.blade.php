@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <p id="alert-message" class="alert-collapse"></p>

            <div class="card">
                <div class="card-header">
                    Events
                    <a href="{{ route('admin.events.create') }}" class="btn btn-primary float-right">Add Event</a>
                </div>

                <div class="card-body">
                    @if (count($events) === 0)
                    <p>There are no events!</p>
                    @else
                    <table id="table-events" class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Venue</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Type</th>
                            <th>Made By</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                            <tr data-id="{{ $event->id }}">
                                <td>{{ $event->name }}</td>
                                <td>{{ $event->description }}</td>
                                <td>{{ $event->venue }}</td>
                                <td>{{ $event->date }}</td>
                                <td>{{ $event->time }}</td>
                                <td>{{ $event->type }}</td>
                                <td>{{ $event->user_id }}</td>
                                <td>
                                    <a href="{{ route('admin.events.show', $event->id) }}" class="btn btn-primary">View</a>
                                    <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                                    <form style="display:inline-block" method="POST" action="{{ route('admin.events.destroy', $event->id) }}">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <button type="submit" class="form-control btn btn-danger">Delete</button>
                                    </form>
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

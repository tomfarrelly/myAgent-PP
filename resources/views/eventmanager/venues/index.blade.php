@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <p id="alert-message" class="alert-collapse"></p>

            <div class="card">
                <div class="card-header">
                    Venues

                </div>

                <div class="card-body">
                    @if (count($venues) === 0)
                    <p>There are no events!</p>
                    @else
                    <table id="table-venues" class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Capacity</th>
                            <th>Services</th>

                        </thead>
                        <tbody>
                            @foreach ($venues as $venue)
                            <tr data-id="{{ $venue->id }}">
                                <td>{{ $venue->name }}</td>
                                <td>{{ $venue->location }}</td>
                                <td>{{ $venue->capacity }}</td>
                                <td>{{ $venue->services }}</td>
                                <td>
                                    {{-- <a href="{{ route('eventmanager.events.show', $event->id) }}" class="btn btn-primary">View</a>
                                    <a href="{{ route('eventmanager.events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                                    <form style="display:inline-block" method="POST" action="{{ route('eventmanager.events.destroy', $event->id) }}">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <button type="submit" class="form-control btn btn-danger">Delete</button> --}}
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

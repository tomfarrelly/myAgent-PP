@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Event: {{ $events->name }}
                </div>

                <div class="card-body">
                    <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td rowspan="6">
                              <img src="{{ asset('uploads/event/'.$events->cover) }}" class="w-100">
                            </td>
                          </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $events->name }}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{ $events->description }}</td>
                            </tr>
                            <tr>
                                <td>Venue</td>
                                <td>{{ $events->venue->name }}</td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td>{{ $events->date }}</td>
                            </tr>
                            <tr>
                                <td>Time</td>
                                <td>{{ $events->time }}</td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td>{{ $events->type }}</td>
                            </tr>



                            @foreach ($djs as $dj)
                                <tr>
                                   <td>DJ</td>
                                   <td>{{ $dj->user->name }}</td>
                               </tr>
                            @endforeach


                        </tbody>
                    </table>

                    <a href="{{ route('eventmanager.events.index') }}" class="btn btn-default">Back</a>
                    <a href="{{ route('eventmanager.events.edit', $events->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('eventmanager.events.availableDj', $events->id) }}" class="btn btn-warning">Add DJ</a>
                    <form style="display:inline-block" method="POST" action="{{ route('eventmanager.events.destroy', $events->id) }}">
                      <input type="hidden" name="_method" value="DELETE">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <button type="submit" class="form-control btn btn-danger">Delete</button>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

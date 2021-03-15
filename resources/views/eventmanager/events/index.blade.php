@extends('layouts.app')

@section('content')
<style>
img.normal {
  width: auto;
}

img.big {
  width: 50%;
}

img.small {
  width: 10%;
}

</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <p id="alert-message" class="alert-collapse"></p>

            <div class="card">
                <div class="card-header">
                    Events
                    <a href="{{ route('eventmanager.events.create') }}" class="btn btn-primary float-right">Add Event</a>
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
                          <div class="album py-5 bg-light">
                            <div class="container">
                              <div class="row">
                                <div class="col-4">
                             <h3 class="">Events Taking Place</h3>
                           </div>
                           </div>
                           <hr>
                           <br>
                           @foreach ($events as $event)
                           <div class="card-group">
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
                              @endforeach
                            </div>
                            </div>

                            <div class="card-deck">
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
                              </div>

                          </div>

                            @foreach ($events as $event)
                            <tr data-id="{{ $event->id }}">
                                <td>{{ $event->name }}</td>
                                <td>{{ $event->description }}</td>
                                <td>{{ $event->venue->name }}</td>
                                <td>{{ $event->date }}</td>
                                <td>{{ $event->time }}</td>
                                <td>{{ $event->type }}</td>
                                <td>{{ $event->user_id }}</td>
                                <td>
                                    <a href="{{ route('eventmanager.events.show', $event->id) }}" class="btn btn-primary">View</a>
                                    <a href="{{ route('eventmanager.events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                                    <form style="display:inline-block" method="POST" action="{{ route('eventmanager.events.destroy', $event->id) }}">
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

@endsection

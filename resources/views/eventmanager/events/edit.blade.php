@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card-header">
                Edit event
            </div>

            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{ route('eventmanager.events.update', $event->id) }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="cover">Cover</label>
                        <input type="file" class="form-control" id="cover" name="cover" />
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $event->name)}}" />
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $event->description) }}" />
                    </div>
                    <div class="form-group">
                        <label for="venue">Venue</label>
                        <input type="text" class="form-control" id="venue_id" name="venue_id" value="{{ old('venue', $event->venue->name) }}" />
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="text" class="form-control" id="date" name="date" value="{{ old('date', $event->date) }}" />
                    </div>
                    <div class="form-group">
                        <label for="time">Time</label>
                        <input type="text" class="form-control" id="time" name="time" value="{{ old('time', $event->time) }}" />
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ old('type', $event->type) }}" />
                    </div>
                    <div class="form-group">
                        <label for="user_id">Made By</label>
                        <input type="text" class="form-control" id="user_id" name="user_id" value="{{ old('user_id', $event->user_id) }}" />
                    </div>
                    <div class="float-right">
                        <a href="{{ route('eventmanager.events.index') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

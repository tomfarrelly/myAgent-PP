@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card-header">
                Add new event
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
                <form method="POST" action="{{ route('eventmanager.events.store') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="cover">Cover</label>
                        <input type="file" class="form-control" id="cover" name="cover" />
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" />
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" />
                    </div>
                    <div class="form-group">
                      <label for="venue">Venue: </label>
                      <select name="venue_id">
                        @foreach ($venues as $venue)
                         <option value="{{ $venue->id }}" {{ (old('venue_id') == $venue->id) ? "selected" : "" }} >{{ $venue->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" name="date" value="{{ old('date') }}"/>
                    </div>
                    <div class="form-group">
                        <label for="time">Time</label>
                        <input type="time" name="time"  value="{{ old('time') }}"/>
                    </div>
                    <div class="form-group">
                      <label for="genre">Type: </label>
                      <select name="genre_id">
                        @foreach ($types as $type)
                         <option value="{{ $type->id }}" {{ (old('genre_id') == $type->id) ? "selected" : "" }} >{{ $type->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="float-right">
                        <a href="{{ route('eventmanager.home') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

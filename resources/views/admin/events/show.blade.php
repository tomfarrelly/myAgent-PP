@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Event: {{ $event->name }}
                </div>

                <div class="card-body">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $event->name }}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{ $event->description }}</td>
                            </tr>
                            <tr>
                                <td>Venue</td>
                                <td>{{ $event->venue }}</td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td>{{ $event->date }}</td>
                            </tr>
                            <tr>
                                <td>Time</td>
                                <td>{{ $event->time }}</td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td>{{ $event->type }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="{{ route('admin.events.index') }}" class="btn btn-default">Back</a>
                    <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                    <form style="display:inline-block" method="POST" action="{{ route('admin.events.destroy', $event->id) }}">
                      <input type="hidden" name="_method" value="DELETE">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <button type="submit" class="form-control btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

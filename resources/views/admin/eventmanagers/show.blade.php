@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Event: {{ $evManager->name }}
                </div>

                <div class="card-body">
                    <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td rowspan="6">
                              <img src="{{ asset('uploads/profile/'.$evManager->image) }}" class="w-100">
                            </td>
                          </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $evManager->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $evManager->email }}</td>
                            </tr>
                            <tr>
                                <td>Bio</td>
                                <td>{{ $evManager->bio }}</td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td>{{ $evManager->location }}</td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>{{ $evManager->username }}</td>
                            </tr>
                            <tr>
                                <td>ID</td>
                                <td>{{ $evManager->id }}</td>
                            </tr>


                        </tbody>
                    </table>

                    <a href="{{ route('admin.eventmanagers.index') }}" class="btn btn-default">Back</a>
                    <a href="{{ route('admin.eventmanagers.edit', $evManager->id) }}" class="btn btn-warning">Edit</a>
                    <form style="display:inline-block" method="POST" action="{{ route('admin.eventmanagers.destroy', $evManager->id) }}">
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

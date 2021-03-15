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
                    @if (count($djs) === 0)
                    <p>There are no events!</p>
                    @else
                    <table id="table-djs" class="table table-hover">
                        <thead>
                          <th>Profile Image</th>
                            <th>Name</th>
                            <th>bio</th>
                            <th>genre</th>
                            <th>location</th>
                            <th>price</th>
                            <th>user id</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($djs as $dj)
                            <tr data-id="{{ $dj->id }}">
                              <td><img src="{{ asset('uploads/profile/'.$dj->user->image) }}" style="max-width: 100px; max-height: 300px;"></td>
                                <td>{{ $dj->user->name }}</td>
                                <td>{{ $dj->user->bio }}</td>
                                <td>{{ $dj->user->genre }}</td>
                                <td>{{ $dj->user->location }}</td>
                                <td>{{ $dj->price }}</td>
                                <td>{{ $dj->user_id }}</td>
                                <td>
                                    <a href="{{ route('admin.dj.show', $dj->id) }}" class="btn btn-primary">View</a>
                                    <a href="{{ route('admin.dj.edit', $dj->id) }}" class="btn btn-warning">Edit</a>
                                    <form style="display:inline-block" method="POST" action="{{ route('admin.dj.destroy', $dj->id) }}">
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

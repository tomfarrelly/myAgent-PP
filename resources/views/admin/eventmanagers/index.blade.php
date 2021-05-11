@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <p id="alert-message" class="alert-collapse"></p>

            <div class="card">
                <div class="card-header">
                    Eventmanagers

                    <a href="{{ route('admin.eventmanagers.create') }}" class="btn btn-primary float-right">Add Eventmanager</a>
                </div>

                <div class="card-body">
                    @if (count($evManagers) === 0)
                    <p>There are no eventmanagers!</p>
                    @else
                    <table id="table-djs" class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>bio</th>
                            <th>location</th>
                            <th>Username</th>
                            <th>user id</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($evManagers as $evManager)
                            <tr data-id="{{ $evManager->id }}">
                                <td>{{ $evManager->name }}</td>
                                <td>{{ $evManager->email }}</td>
                                <td>{{ $evManager->bio }}</td>
                                <td>{{ $evManager->location }}</td>
                                <td>{{ $evManager->username }}</td>
                                <td>{{ $evManager->id }}</td>
                                <td>
                                    <a href="{{ route('admin.eventmanagers.show', $evManager->id) }}" class="btn btn-primary">View</a>

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

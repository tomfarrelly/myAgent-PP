@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <p id="alert-message" class="alert-collapse"></p>

            <div class="card">
                <div class="card-header">
                    Available DJ Roster

                </div>

                <div class="card-body">

                    @if (count($djs) === 0)
                    <p>There are no DJs!</p>
                    @else
                    <table id="table-djs" class="table table-hover">
                        <thead>
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

                                <td>{{ $dj->user->name }}</td>
                                <td>{{ $dj->user->bio }}</td>
                                <td>{{ $dj->user->genre }}</td>
                                <td>{{ $dj->user->location }}</td>

                                <td>{{ $dj->price }}</td>
                                <td>{{ $dj->user_id }}</td>
                                <td>
                                    <a href="{{ route('eventmanager.djs.show', $dj->id) }}" class="btn btn-primary">View</a>

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

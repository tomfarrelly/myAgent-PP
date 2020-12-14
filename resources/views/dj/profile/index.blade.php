@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">

      <p id="alert-message" class="alert collapse"> </p>

       <div class="card">
         <div class="card-header">
           Profile
         </div>

         <div class="card-body">
               <table id="table-profile" class="table table-hover">
                 <thead>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Username</th>
                      <th>Bio</th>
                      <th>Genre</th>
                      <th>Location</th>
                      <th>Actions</th>

                </thead>
                <tbody>
            @foreach ($profile as $dj)
                    <tr data-id="{{$dj->id }}">
                        <td>{{$dj->user->name}}</td>
                        <td>{{$dj->user->email}}</td>
                        <td>{{$dj->user->username}}</td>
                        <td>{{$dj->user->bio}}</td>
                        <td>{{$dj->user->genre}}</td>
                        <td>{{$dj->user->location}}</td>
                        <td>
                          <a href="{{ route('dj.profile.index', $dj->id) }}" class="btn btn-primary">View</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>

              </div>
          </div>
      </div>
  </div>
</div>
@endsection

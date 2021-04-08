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
                <form method="POST" action="{{ route('admin.dj.update', $dj->id) }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $dj->user->name)}}" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $dj->user->email) }}" />
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{ old('username', $dj->user->username) }}" />
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <input type="text" class="form-control" id="bio" name="bio" value="{{ old('bio', $dj->user->bio) }}" />
                    </div>
                    <div class="form-group">
                        <label for="genre_id">Genre ID</label>
                        <input type="text" class="form-control" id="genre_id" name="genre_id" value="{{ old('genre_id', $dj->user->genre) }}" />
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $dj->user->location) }}" />
                    </div>

                    <div class="float-right">
                        <a href="{{ route('admin.dj.index') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

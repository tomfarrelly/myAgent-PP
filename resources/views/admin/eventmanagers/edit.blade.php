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
                <form method="POST" action="{{ route('admin.eventmanagers.update', $evManager->id) }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $evManager->name)}}" />
                    </div>
                    <div class="form-group">
                        <label for="description">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $evManager->email) }}" />
                    </div>
                    <div class="form-group">
                        <label for="venue">Bio</label>
                        <input type="text" class="form-control" id="bio" name="bio" value="{{ old('bio', $evManager->bio) }}" />
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $evManager->location) }}" />
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{ old('username', $evManager->username) }}" />
                    </div>

                    <div class="float-right">
                        <a href="{{ route('admin.eventmanagers.index') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection

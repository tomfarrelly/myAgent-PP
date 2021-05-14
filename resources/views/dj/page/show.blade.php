@extends('layouts.app')

@section('title')
   My Profile
@endsection

@section('content')
<section class="py-5">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
                  <h4>{{ $user->name}} Profile Page</h4>
                  <hr>
                  {{-- <form action="{{ url('my-profile-update')}}" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}} --}}
                    <div class="row">
                      <div class="col-md-4">
                        <input type="file" name="image" class="form-control">
                        <img  src="{{ asset('uploads/profile/'.$user->image)}}" class="w-75" alt="">
                    </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $user->name}}">
                          </div>
                          </div>
                          {{-- <div class="col-md-4">
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary">Update Profile</button>
                            </div>
                        </div> --}}
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Email</label>
                              <input type="text" name="email" class="form-control" readonly value="{{ $user->email}}">
                            </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" value="{{ $user->username}}">
                              </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="">Price</label>
                              <input type="text" name="price" class="form-control" value="{{ $user->username}}">
                            </div>
                        </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="">Bio</label>
                              <input type="text" name="bio" class="form-control" value="{{ $user->bio}}">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="">Genre</label>
                              <input type="text" name="genre" class="form-control" value="{{ $user->genre}}">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="">Location</label>
                              <input type="text" name="location" class="form-control" value="{{ $user->location}}">
                            </div>
                        </div>

                        </div>
                  {{-- </form> --}}
               </div>
            </div>
        </div>
    </div>
  </div>
</section>
@endsection

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
                  <h4>My Profile Page</h4>
                  <hr>
                  <form action="{{ url('my-profile-update-dj')}}" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}}
                    <div class="row">
                      <div class="col-md-4">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control">
                        <img  src="{{ asset('uploads/profile/'.Auth::user()->image)}}" class="w-75" alt="">
                    </div>
                    @if(Auth::user()->dj)
                    <div class="col-md-4">
                      <label for="">Track 1</label>
                      <input type="file" name="track1" class="form-control">
                      <img  src="{{ asset('uploads/profile/music/'.Auth::user()->dj->track1)}}" class="w-75" alt="">
                  </div>
                  <div class="col-md-4">
                    <label for="">Track 2</label>
                    <input type="file" name="track2" class="form-control">
                    <img  src="{{ asset('uploads/profile/music/'.Auth::user()->dj->track2)}}" class="w-75" alt="">
                </div>
                <div class="col-md-4">
                  <label for="">Track 3</label>
                  <input type="file" name="track3" class="form-control">
                  <img  src="{{ asset('uploads/profile/music/'.Auth::user()->dj->track3)}}" class="w-75" alt="">
              </div>
                @endif
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name}}">
                          </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary">Update Profile</button>
                            </div>
                        </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Email</label>
                              <input type="text" name="email" class="form-control" readonly value="{{ Auth::user()->email}}">
                            </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" value="{{ Auth::user()->username}}">
                              </div>
                          </div>
                          @if(Auth::user()->dj)
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="">Price</label>
                              <input type="text" name="price" class="form-control" value="{{ Auth::user()->dj->price}}">
                            </div>

                        </div>
                          @endif
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="">Bio</label>
                              <input type="text" name="bio" class="form-control" value="{{ Auth::user()->bio}}">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="">Genre</label>
                              <input type="text" name="genre" class="form-control" value="{{ Auth::user()->genre}}">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="">Location</label>
                              <input type="text" name="location" class="form-control" value="{{ Auth::user()->location}}">
                            </div>
                        </div>
                        @if(Auth::user()->dj)

                        <div class="col-md-4">
                          <audio controls>
                            <source src="uploads/profile/music/{{ Auth::user()->dj->track1}}" type="audio/mpeg">
                          </audio>
                        </div>
                        <div class="col-md-4">
                          <audio controls>
                            <source src="uploads/profile/music/{{ Auth::user()->dj->track2}}" type="audio/mpeg">
                          </audio>
                        </div>
                        <div class="col-md-4">
                          <audio controls>
                            <source src="uploads/profile/music/{{ Auth::user()->dj->track3}}" type="audio/mpeg">
                          </audio>
                        </div>
                      @endif



                        </div>

                  </form>
               </div>
            </div>
        </div>
    </div>
  </div>
</section>
@endsection

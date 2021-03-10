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
                  <form action="{{ url('my-profile-update')}}" method="POST" enctype="multipart/form-data">
                      {{csrf_field()}}
                    <div class="row">
                      <div class="col-md-4">
                        <input type="file" name="image" class="form-control">
                        <img  src="{{ asset('uploads/profile/'.Auth::user()->image)}}" class="w-75" alt="">
                    </div>
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
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="">Price</label>
                              <input type="text" name="price" class="form-control" value="{{ Auth::user()->username}}">
                            </div>
                        </div>
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
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="">Genre</label>
                            <input type="text" name="genre_id" class="form-control" value="{{ Auth::user()->dj->genre_id}}">
                          </div>
                        </div>
                        <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/994356043&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                        <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
                          <a href="https://soundcloud.com/fjaak" title="FJAAK" target="_blank" style="color: #cccccc; text-decoration: none;">FJAAK</a> ·
                          <a href="https://soundcloud.com/fjaak/a1-fjaak-wht" title="A1 FJAAK - WH?T" target="_blank" style="color: #cccccc; text-decoration: none;">A1 FJAAK - WH?T</a>
                        </div>

                        </div>
                  </form>
               </div>
            </div>
        </div>
    </div>
  </div>
</section>
@endsection

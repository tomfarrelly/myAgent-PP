@extends('layouts.app')

@section('title')
   My Profile
@endsection

@section('content')
<style>
.profile-head {
    transform: translateY(5rem)
}

.cover {
    background-image: url(https://images.unsplash.com/photo-1541701571234-ffe036ddf1d2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=626&q=80);
    background-size: cover;
    background-repeat: no-repeat;
}

body {
    background: #654ea3;
    background: linear-gradient(to right, #272725 ,black,red,#fb004b);
    min-height: 100vh
}

input {
    border: none;
    background: transparent;
}

textarea {
    border: none;
    background: transparent;
    width: 100%;
}

.custom-file {
  width: 160px;
  font-size: 10px;
  height: 40px;
  border: none;
  background: transparent;
}

label{
  font-size: 16px;
  font-weight: 400px;
  color: black;
  text-shadow: 1px 1px black;
}
</style>

<section class="py-5">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
              <div class="row justify content-center">
                  <div class="col-md-12 mx-auto">
                    <form action="{{ url('my-profile-update-em')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                      <div class="bg-white shadow rounded overflow-hidden">
                          <div class="px-4 pt-0 pb-4 cover">
                              <div class="media align-items-end profile-head">
                                  <div class="profile mr-3"><img src="{{ asset('uploads/profile/'.Auth::user()->image)}}"  alt="" width="130" style="height: 130px;" class="shadow rounded mb-2 img-thumbnail"><button type="submit" class="btn btn-outline-dark btn-sm btn-block">Edit profile</button></div>
                                  <div class="media-body mb-5 text-white">

                                      <input style="width: 175px; font-size: 16px;
                                      color: white;" type="text" name="name" class=" mt-0 mb-0" value="{{ Auth::user()->name}}">
                                      <p style="width: 175px; margin-top: 10px; " class="small mb-4"><i class="fas fa-map-marker-alt mr-2"></i><input style="width: 200px; font-size: 16px;
                                      color: white; " type="text" name="location"  value="{{ Auth::user()->location}}"></p>
                                  </div>
                                  <input type="file" name="image" class="custom-file  btn-sm">
                              </div>
                          </div>
                          <div class="bg-light p-4 d-flex justify-content-end text-center">
                              <ul class="list-inline mb-0">

                              </ul>
                          </div>
                          <div class="px-4 py-5">
                              <label class="mb-2">About</label>
                              <div class="p-4 rounded shadow bg-light">
                                  <textarea type="text" style="margin-top: 10px; width: 1000px;" class="" id="bio" name="bio" value="{{ Auth::user()->bio}}"> {{ Auth::user()->bio}} </textarea>
                              </div>
                          </div>
                          <div class="py-4 px-4">

                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">Email</label>
                                    <br>
                                    <input type="text" name="email"   value="{{ Auth::user()->email}}">
                                  </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="">Username</label>
                                      <br>
                                      <input type="text" name="username"  value="{{ Auth::user()->username}}">
                                    </div>
                                </div>
                              </div>
                          </div>
                      </div>
                      <form>
                  </div>
              </div>
        </div>
    </div>
  </div>
</section>
@endsection

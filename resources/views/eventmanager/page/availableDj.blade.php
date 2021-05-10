
@extends('layouts.app')

@section('content')
<section>
  <div class="container" style="padding-top: 25px; padding-bottom: 25px; margin-top: 100px;">
    <div style="margin-bottom: 10px;" class="col-12">
      <a style="color: black; font-size: 18px;" href="{{ route('eventmanager.home') }}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
    <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
  </svg> Back</a>
  </div>
      <div class="col-lg-12 mx-auto">
          <!-- List group-->
          <ul class="list-group shadowE ">
              <!-- list group item-->
              <li class="list-group-item" >
                  <!-- Custom content-->
                  <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                      <div class="media-body order-2 order-lg-1">
                        <div style="background-color: red; margin-bottom: 60px;"class="container ">
                          <div class=" bg-white ">
                              <div class="row">
                                  <div style="padding-top: 15px; padding-bottom: 10px;"class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                      <!-- section-title -->
                                      <div class="section-title mb-0" style="text-align: center;">
                                          <h1>Available DJ's</h1>

                                      </div>
                                      <!-- /.section-title -->
                                  </div>
                              </div>
                          </div>
                          </div>

                    <div class="row">
                        @foreach ($djs as $dj)
                         <!-- Team item -->
                         <div class="col-md-4">
                      <div class="card5 shadowE">
                          <img class="shadow"src="{{ asset('uploads/profile/'.$dj->user->image) }}" alt="">
                          <h1 >{{ $dj->user->name }}</h1>
                          <h2>{{ $dj->user->genre }}</h2>
                          <h2>{{ $dj->user->location }}</h2>

                    <a href="{{ route('eventmanager.events.bookings.create', $dj) }}" >  <button  type="submit" class="button5 success shadow">Book</button></a>
                        </div>
                      </div>
                    @endforeach
                    </div>
                  </div> <!-- End -->
              </li> <!-- End -->
          </ul> <!-- End -->
      </div>
    </div>
    </div>
    </section>
@endsection

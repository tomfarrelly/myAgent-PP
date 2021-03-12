@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('eventmanager.events.update', $event->id) }}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PUT">
  <section>
  <div style="margin-bottom: 10px; margin-top: 30px; margin-right: 0px; margin-left: 25px;" class="row">
      <div class="col-lg-8 mx-auto ">
        <div class="card mb-3 shadow">
<img src="{{ asset('uploads/event/'.$event->cover) }}" class="card-img-top heightImg" alt="...">
<div class="row" style="margin-top: 5px;">
<div class="col-4">

</div>
<div class="col-4">
<input type="file" class="form-control" id="cover" name="cover" style="width: 250px;" />
</div>
<div class="col-4">

</div>
</div>

<div class="card-body">
<div style="background-color: red;"class="container shadowE ">
  <div class=" bg-white ">
      <div class="row">
          <div style="padding-top: 15px; padding-bottom: 10px;"class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <!-- section-title -->
              <div class="section-title mb-0" style="text-align: center;">
                  <input type="text" class="form-control" style="margin-left:300px; text-align: center; width: 300px; font-weight: 900; font-size: 20px;" id="name" name="name" value="{{ old('name', $event->name)}}" />

              </div>
              <!-- /.section-title -->
          </div>
      </div>
  </div>
  </div>

</div>
</div><!-- End -->
      </div>
  </div>


<div style="margin-bottom: 20px; margin-top: 10px; margin-right: 0px; margin-left: 25px;" class="row">
    <div class="col-lg-8 mx-auto">
        <!-- List group-->
        <ul class="list-group shadow ">
            <!-- list group item-->
            <li class="list-group-item" style="background-color:#F8F8FF;">
                <!-- Custom content-->
                <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                    <div class="media-body order-2 order-lg-1">
                        <h3 style="border: #1cffac 3px solid; color:black; width: 270px; text-align:center; margin-left: -10px;" class="mt-0 font-weight-bold mb-3 m">DJs Playing ✔</h3>
                  <div class="row">     @foreach ($bookings as $booking) <!-- Team item -->

                    <div class="justify-content-center">
  <div class="card2 p-2 shadow" style="background-color:white; border-radius:15px;">
      <div class="media"> <img src="{{ asset('uploads/profile/'.$booking->dj->user->image) }}" class="mr-3">
          <div class="media-body">
              <h5 class="mt-2 mb-0">{{ $booking->dj->user->name }}</h5>
              <div class="d-flex flex-row justify-content-between " ><small style="font-size:12px;" class="text-muted">{{$booking->dj->user->genre}}</small>



                <button class="btn btn-primary2 "><a  href="{{ route('eventmanager.page.profile.show', $booking->dj->id) }}">View</a></button> </div>


                              </div>
                          </div>
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


<div style="margin-bottom: 20px; margin-top: 10px; margin-right: 0px; margin-left: 25px;" class="row">
    <div class="col-lg-8 mx-auto">
        <!-- List group-->
        <ul class="list-group shadow ">
            <!-- list group item-->
            <li class="list-group-item" style="background-color:#F8F8FF;">
                <!-- Custom content-->
                <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                    <div class="media-body order-2 order-lg-1">
                      @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                      @endif
                        <h2 style="" class="mt-0 font-weight-bold mb-1 m">About</h2>

                  <textarea type="text" class="form-control word-wrap: break-word;" id="description" name="description" value="{{ old('description', $event->description) }}">{{ old('description', $event->description) }}</textarea>
                   <br>
                  <div class="row">
                  <div class="col-4">
                     <h5 style="font-weight:400;">Where it's taking place:<select name="venue_id">
                       @foreach ($venues as $venue)
                        <option value="{{ $venue->id }}" {{ (old('venue_id') == $venue->id) ? "selected" : "" }} >{{ $venue->name }}</option>
                       @endforeach
                     </select></h5>
                  </div>
                  <div class="col-3">
                      <h5 style="font-weight:400;">Type of the event: <select name="type_id">
                        @foreach ($types as $type)
                         <option value="{{ $type->id }}" {{ (old('type_id') == $type->id) ? "selected" : "" }} >{{ $type->name }}</option>
                        @endforeach
                      </select></h5>
                  </div>
                  <div class="col-3">
                     <h5 style="font-weight:400;">Date:<input type="date"  name="date" value="{{ old('date', $event->date) }}"></h5>
                  </div>
                  <div class="col-2">
                      <h5 style="font-weight:400;">Time:<br><input type="time" name="time"  value="{{ old('time', $event->time) }}"/></h5>

                  </div>

                </div>
                <br>
                <div class="row">
                <div class="col-5">
                </div>
                <div class="col-3">

                    <a href="{{ route('eventmanager.events.show', $event->id) }}" class="btn btn-info">Cancel</a>
                    <button type="submit" class="btn btn-warning pull-right">Submit</button>

                </div>
                <div class="col-4">
                </div>
              </div>




                </div> <!-- End -->
            </li> <!-- End -->
        </ul> <!-- End -->
    </div>
</div>
</div>


<div style="margin-bottom: 20px; margin-top: 10px; margin-right: 0px; margin-left: 25px;" class="row">
    <div class="col-lg-8 mx-auto">
        <!-- List group-->
        <ul class="list-group shadow ">
            <!-- list group item-->
            <li class="list-group-item" style="background-color:#F8F8FF;">
                <!-- Custom content-->
                <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                    <div class="media-body order-2 order-lg-1">
                        <h3 style="border: #fb004b 3px solid; color:black; width: 270px; text-align:center; margin-left:0px;" class="mt-0 font-weight-bold mb-3 m">Available DJs</h3>
                  <div class="row">
                      @foreach ($bookings as $booking)
                       <!-- Team item -->
                       <div class="col-md-4">
                    <div class="card5 shadowE">
                        <img class="shadow"src="{{ asset('uploads/profile/'.$booking->dj->user->image) }}" alt="">
                        <h1 >{{ $booking->dj->user->name }}</h1>
                        <h2>{{ $booking->dj->user->genre }}</h2>
                        <h2>{{ $booking->dj->user->location }}</h2>
                  <button  type="submit" class="button5 success shadow">Book</button>
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
</form>
@endsection

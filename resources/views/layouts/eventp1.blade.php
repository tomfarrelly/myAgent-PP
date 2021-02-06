<!DOCTYPE html>
<html lang="en">



<body style="background-color:#f9f5f5;">
  <section>
  <div style="margin-bottom: 10px; margin-top: 30px; margin-right: 0px; margin-left: 25px;" class="row">
      <div class="col-lg-8 mx-auto ">
        <div class="card mb-3 shadow">
<img src="{{ asset('uploads/event/'.$events->cover) }}" class="card-img-top heightImg" alt="...">
<div class="card-body">
<div style="background-color: red;"class="container shadowE ">
  <div class=" bg-white ">
      <div class="row">
          <div style="padding-top: 15px; padding-bottom: 10px;"class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <!-- section-title -->
              <div class="section-title mb-0" style="text-align: center;">
                  <h3>{{ $events->name }}</h3>

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
                        <h3 style="background-color:black; color:white; width: 270px; text-align:center; margin-left: -10px;" class="mt-0 font-weight-bold mb-3 m">DJs Playing ✔</h3>
                  <div class="row">     @foreach ($bookings as $booking) <!-- Team item -->

                    <div class="justify-content-center">
  <div class="card2 p-2 shadow" style="background-color:white;">
      <div class="media"> <img src="{{ asset('uploads/profile/'.$booking->dj->user->image) }}" class="mr-3">
          <div class="media-body">
              <h5 class="mt-2 mb-0">{{ $booking->dj->user->name }}</h5>
              <div class="d-flex flex-row justify-content-between " ><small style="font-size:12px;" class="text-muted">{{$booking->dj->user->genre}}</small><button class="btn btn-primary2 "><a href="{{ route('eventmanager.home')}}">View</a></button> </div>
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
                        <h2 style="" class="mt-0 font-weight-bold mb-1 m">About</h2>

                  <p style="font-style: italic;">Hello im making this Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.{{ $events->description }}.</p>
                  <div class="row">
                  <div class="col-4">
                     <h5 style="font-weight:400;">Where it's taking place: {{ $events->venue }}</h5>
                  </div>
                  <div class="col-4">
                      <h5 style="font-weight:400;">Type of the event: {{ $events->type}}</h5>
                  </div>
                  <div class="col-2">
                     <h5 style="font-weight:400;">{{ $events->date }}</h5>
                  </div>
                  <div class="col-2">
                      <h5 style="font-weight:400;">{{ $events->time}}</h5>
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
                        <h3 style="background-color:black; color:white; width: 270px; text-align:center; margin-left: -10px;" class="mt-0 font-weight-bold mb-3 m">Available Djs</h3>
                  <div class="row">     @foreach ($bookings as $booking) <!-- Team item -->

                    <div class="justify-content-center">
  <div class="card2 p-2 shadow" style="background-color:white;">
      <div class="media"> <img src="{{ asset('uploads/profile/'.$booking->dj->user->image) }}" class="mr-3">
          <div class="media-body">
              <h5 class="mt-2 mb-0">{{ $booking->dj->user->name }}</h5>
              <div class="d-flex flex-row justify-content-between " ><small style="font-size:12px;" class="text-muted">{{$booking->dj->user->genre}}</small><button class="btn btn-primary2 "><a href="{{ route('eventmanager.home')}}">View</a></button> </div>
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


</section>
</body>

</html>

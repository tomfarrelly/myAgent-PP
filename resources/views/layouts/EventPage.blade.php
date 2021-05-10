<!DOCTYPE html>
<html lang="en">
<body style="background-color:#f9f5f5;">
  <section>
    <div class="col-lg-8 mx-auto">
    <div style="margin-bottom: 10px; margin-top: 30px; margin-right: 0px; margin-left: 25px;" class="row">

        <div class="col-10">
          <a  href="{{ route('eventmanager.home')}}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
      </svg> Back </a>

        </div>
        <div class="col-2">
          <a style=" font-size: 14px; color:black;" class="text-muted" href="{{ route('eventmanager.events.edit', $events->id) }}" ><svg style=" margin-bottom: 5px;" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="orange" class="bi bi-pencil-square" viewBox="0 0 16 16">
<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>  Edit Event</a>
          <form style="display:inline-block" method="POST" action="{{ route('eventmanager.events.destroy', $events->id)}}">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <a onclick="return confirm('Are you sure you want to delete this event?');" style="background-color: #f9f5f5; height: 21px;  text-align: center; padding: 0px; border-radius: 0px;  border: 0px;"  type="submit" class="form-control text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="red" class="bi bi-trash" viewBox="0 0 16 18">
<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg> Delete Event</a>
          </form>
        </div>



    </div>
  </div>

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
                        <h2 style="" class="mt-0 font-weight-bold mb-1 m">About</h2>
                  <p style="font-style: italic;">{{ $events->description }}.</p>
                  <div class="row">
                  <div class="col-4">
                     <h5 style="font-weight:400;">Where it's taking place: {{ $events->venue->name }}</h5>
                  </div>
                  <div class="col-4">
                      <h5 style="font-weight:400;">Event Genre: {{ $events->genre->name}}</h5>
                  </div>
                  <div class="col-2">
                     <h5 style="font-weight:400;">{{ $events->date }}</h5>
                  </div>
                  <div class="col-2">
                      <h5 style="font-weight:400;">{{ $events->time}}</h5>

                  </div>
                  <div class="col-3">

                </div>

              <div class="col-4">

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
</body>
<script>

</script>
</html>

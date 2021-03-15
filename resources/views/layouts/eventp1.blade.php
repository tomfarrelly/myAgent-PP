<!DOCTYPE html>
<html lang="en">



<body style="background-color:#f9f5f5;">
  <section>
    <div class="col-lg-8 mx-auto">
    <div style="margin-bottom: 10px; margin-top: 30px; margin-right: 0px; margin-left: 25px;" class="row">

        <div class="col-10">
          <a href="{{ route('eventmanager.home')}}" class="btn btn-info">Cancel</a>
        </div>
        <div class="col-2">
          <a href="{{ route('eventmanager.events.edit', $events->id) }}" class="btn btn-warning">Edit</a>
          <form style="display:inline-block" method="POST" action="{{ route('eventmanager.events.destroy', $events->id)}}">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <button  type="submit" class="form-control btn-danger">Delete</a>
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
                      <h5 style="font-weight:400;">Type of the event: {{ $events->type->name}}</h5>
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



</section>
</body>
<script>
var animateButton = function(e) {

  e.preventDefault;
  //reset animation
  e.target.classList.remove('animate');

  e.target.classList.add('animate');

  e.target.classList.add('animate');
  setTimeout(function(){
    e.target.classList.remove('animate');
  },3000);
};

var classname = document.getElementsByClassName("button5");

for (var i = 0; i < classname.length; i++) {
  classname[i].addEventListener('click', animateButton, true);
}
</script>
</html>

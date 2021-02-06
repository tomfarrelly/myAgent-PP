<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

</head>
<style>

</style>
<body style="background-color:#f9f5f5;">



  <!-- page-header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-caption">
                    <h1 class="page-title">Make Booking Much Easier</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-header-->
<!-- news -->
<div  class="card-section">
    <div class="container">
        <div style="background-color: #1cffac;" class="card-block bg-white mb30">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- section-title -->
                    <div class="section-title mb-0">
                        <h2>Welcome to your Dashboard {{ Auth::user()->name }}.</h2>
                        <p>Our approach is very simple: we define your problem and give the best solution. </p>
                        <div class="button"><a class="createBtn"href="{{ route('eventmanager.events.create') }}">Create Event+</a></div>
                    </div>
                    <!-- /.section-title -->
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>


            <div style="background-color: #1cffac;"class="container shadowE">
                <div class=" bg-white ">
                    <div class="row">
                        <div style="padding-top: 15px; padding-bottom: 10px;"class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <!-- section-title -->
                            <div class="section-title mb-0" style="text-align: center;">
                                <h3>Below you can see your events</h3>

                            </div>
                            <!-- /.section-title -->
                        </div>
                    </div>
                </div>
                </div>




    <div class="album py-5 ">
      <div class="container">
        <div class="row">
          <div class="col-4">
       <h3>Events Taking Place</h3>
     </div>
     </div>
   <div class="row">
     <div class="col-md-2">
     <form name="_token"  id="tour-dropdown" method="get" value="<?php echo csrf_token(); ?>">
                        <div class="dropdown">
    <button class="btn filterBtn dropdown-toggle" type="button" data-toggle="dropdown">Search by Venue
    <span class="caret"></span></button>
    <ul class="dropdown-menu dropdown1">
      @foreach ($events as $event)
          <li class="link2"><a class="link1" href="">{!! $event->venue !!}</a></li>
      @endforeach
    </ul>

  </div>

                    </form>
                  </div>
                    <form name="_token"  id="tour-dropdown" method="get" value="<?php echo csrf_token(); ?>">
                                       <div class="dropdown">
                   <button class="btn filterBtn1 dropdown-toggle" type="button" data-toggle="dropdown">Search by Genre
                   <span class="caret"></span></button>
                   <ul class="dropdown-menu dropdown1">
                     @foreach ($events as $event)
                         <li class="link2"><a class="link1" href="">{!! $event->type !!}</a></li>
                     @endforeach
                   </ul>

                 </div>

                                   </form>
                                 </div>
     <hr>
     <br>
     <!-- <select id="catID">
       <option value="">Select a Category</option>
       @foreach ($events as $event)
       <option class="option" value="{{$event->id}}">{{$event->name}}</option>
       @endforeach
     </select> -->

 <div class="row">

       @foreach ($events as $event)
         <div class="col-lg-4 col-md-6 col-sm-12">
           <div class="card1">
          	<div class="card1-img" style="background-image:url({{ asset('uploads/event/'.$event->cover) }});">
          		<div class="overlay">
          			<div class="overlay-content">
          				<a href="{{ route('eventmanager.events.show', $event->id) }}">View Event</a>
          			</div>
          		</div>
          	</div>

          	<div class="card1-content ">

          			<h1>{{ $event->name }}</h1>
                <h2>{{ $event->venue }}</h2>
                <div class="row">
                <div class="col-6">
          			<p>{{ $event->date }}</p>
              </div>
              <div class="col-4">
              <p>{{ $event->time }}</p>
            </div>
          </div>

          <p class="editEvBtn1"><a class="editEvBtn"  href="{{ route('eventmanager.events.edit', $event->id) }}">Edit</a></p>


          	</div>
          </div>
 </div>

 @endforeach
 </div>
 <br>
 <div class="row">
 <div class="col-4">
 <h3>Past Events</h3>
 </div>
 </div>

      </div>
    </div>


</body>
<script>

</script>
</html>

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
     <div class="card-body">
      <div class="mb-2">
           <form class="form-inline" action="">
           <label for="venue_filter">Filter By Category &nbsp;</label>
            <select class="form-control" id="venue_filter" name="venue">
             <option value="">Select Category</option>
            @if(count($venues))
               @foreach($venues as $venue)
                  <option value="{{$venue->name}}"  {{(Request::query('venue') && Request::query('venue')==$venue->name)?'selected':''}}  >{{$venue->name}}</option>
               @endforeach
             @endif


           </select>
           <label for="keyword">&nbsp;&nbsp;</label>
           <input type="text" class="form-control"  name="keyword" placeholder="Enter keyword" id="keyword">
           <span>&nbsp;</span>
            <button type="button" onclick="search_event()" class="btn btn-primary" >Search</button>
            @if(Request::query('venue') || Request::query('keyword'))
             <a class="btn btn-success" href="{{route('eventmanager.home')}}">Clear</a>
            @endif



                  <label class="control-label sort-by"> Sort By </label>
                  <select class="sort-by-box" name="sort" id="sort">
                    <option value="">Select</option>
                    <option value="event_name_a_z">Name from A to Z</option>
                    <option value="event_name_z_a">Name from Z to A</option>
                    <option value="event_date_>">Newst release</option>
                    <option value="event_date_<">Latest release</option>
                    <option value="event_time_>">Newest Time</option>
                    <option value="event_time_<">Latest Time</option>
                  </select>




         </form>
       </div>


     <hr>
     <br>




@if(count($futureevents))
     <div class="row">
           @foreach ($futureevents as $event)
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
                    <h2>{{ $event->venue->name }}</h2>
                    <div class="row">
                    <div class="col-6">
                   <p>{{ $event->date }}</p>
                  </div>
                  <div class="col-4">
                  <p>{{ $event->time }}</p>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-2">

              </div>
              <div class="col-6">

            </div>

            <p class="editEvBtn1"><a class="editEvBtn"  href="{{ route('eventmanager.events.edit', $event->id) }}">Edit</a></p>
            <form style="display:inline-block" method="POST" action="{{ route('eventmanager.events.destroy', $event->id)}}">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token()}}">
              <button style="width: 100%; height: 22px;font-size: 13px; text-align: center;padding: 0px;border-radius: 0px;" type="submit" class="form-control btn-danger">Delete</a>
            </form>


          </div>
               </div>
              </div>
     </div>

     @endforeach
     </div>

     @else

       <tr>
         <td colspan="6" >No posts with this venue found</td>
           <br>
           <br>
       </tr>
     @endif


     @if(count($futureevents))
     <div>
      {{$futureevents->appends(Request::query())->links()}}
    </div>
     @endif

 <div class="row">
 <div class="col-4">
 <h3>Past Events</h3>
 </div>
 </div>
 <hr>
 <br>
 <div class="row">
       @foreach ($pastevents as $event)
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
                <h2>{{ $event->venue->name }}</h2>
                <div class="row">
                <div class="col-6">
               <p>{{ $event->date }}</p>
              </div>
              <div class="col-4">
              <p>{{ $event->time }}</p>
            </div>
          </div>




           </div>
          </div>
 </div>

 @endforeach
 </div>

      </div>
    </div>
  </div>

</body>






</html>

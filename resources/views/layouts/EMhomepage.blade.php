<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

</head>
<style>
     .box {
       width: 120px;
       height: 35px;
       border: 1px solid #999;
       font-size: 16px;
       color: black;
       background-color: #fff;
       border-radius: 5px;

     }

     .box1 {
       width: 60px;
       height: 35px;
       border: 1px solid #999;
       font-size: 14px;
       color: black;
       background-color: #fff;
       border-radius: 5px;

     }


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
                        <div class="button"><a class="createBtn" href="{{ route('eventmanager.events.create') }}">Create Event <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></a></div>
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
                                <h3><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg> Below you can see your events <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></h3>

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
       <h3>Events Taking Place <svg xmlns="http://www.w3.org/2000/svg" width="26" height="19" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
  <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
</svg></h3>
     </div>
     </div>
     <div class="card-body">
      <div class="mb-2">
           <form class="form-inline" action="">
           <label style="color: black;" for="venue_filter">Filter Event By Venue &nbsp;</label>
            <select class="form-control box shadow" id="venue_filter" name="venue">
             <option value="">Select Venue</option>
            @if(count($venues))
               @foreach($venues as $venue)
                  <option value="{{$venue->name}}"  {{(Request::query('venue') && Request::query('venue')==$venue->name)?'selected':''}}  >{{$venue->name}}</option>
               @endforeach
             @endif

           </select>
           <label for="keyword">&nbsp;</label>
           <input type="text" class="form-control box shadow"  name="keyword" placeholder="Search Event By Title" id="keyword">
           <span>&nbsp;</span>
            <button type="button" onclick="search_event()" class="btn-primary box1 shadow" >Search</button>
            @if(Request::query('venue') || Request::query('keyword'))
             <a class="btn btn-success box1 shadow" style="color: black; margin-left: 5px;" href="{{route('eventmanager.home')}}">Clear</a>
            @endif
                  <label style="color: black;" class="control-label sort-by"> Sort Event By </label>
                  <select class="sort-by-box box shadow" name="sort" id="sort">
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

            <p ><a onclick="return confirm('Are you sure you want to edit this event?');" class="shadow" href="{{ route('eventmanager.events.edit', $event->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="21" fill="orange" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a></p>
            <form style="display:inline-block" method="POST" action="{{ route('eventmanager.events.destroy', $event->id)}}">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token()}}">
              <button style=" height: 2px;  text-align: center; padding: 0px; border-radius: 0px;  border: 0px;"  type="submit" class="form-control btn-md"><a onclick="return confirm('Are you sure you want to delete this event?');" ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="22" fill="red" class="bi bi-trash" viewBox="0 0 16 18">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a></button>
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
      {{$futureevents->appends(Request::query())->links("pagination::bootstrap-4")}}
    </div>
     @endif

 <div class="row">
 <div class="col-4">
 <h3>Past Events <svg xmlns="http://www.w3.org/2000/svg" width="26" height="19" fill="currentColor" class="bi bi-calendar2-check" viewBox="0 0 16 16">
  <path d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
  <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
</svg></h3>
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
 @if(count($pastevents))
 </div>
{{$pastevents->links("pagination::bootstrap-4")}}
 @endif
      </div>
    </div>
  </div>

</body>






</html>

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

     .box2 {
       width: 120px;
       height: 35px;
       border: 1px solid #999;
       font-size: 14px;
       color: black;
       background-color: #fff;
       border-radius: 5px;

     }
     .p1 {
       white-space: nowrap;
       overflow: hidden;
       text-overflow: ellipsis;
     }

   </style>
<body style="background-color:#f9f5f5;">
  <!-- page-header -->
<div class="page-header1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-caption">
                    <h1 class="page-title">MyAgent Events: An Accessible Way For DJs To Reach More Attendees</h1>
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
                        <div class="button1"><a class="createBtn1" href="{{ route('dj.availability.create') }}">Book Days Off <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
  <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
  <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
  <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
</svg></a></div> <div style="float: right;" class="button1"><a class="createBtn1" href="{{ route('dj.availability.create') }}">View Bookings <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
  <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
  <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
</svg></a></div>
                    </div>
                    <!-- /.section-title -->
                </div>
            </div>
        </div>
        </div>
        </div>

        <div style="background-color: #fb004b;"class="container shadowE">
            <div class=" bg-white ">
                <div class="row">
                    <div style="padding-top: 15px; padding-bottom: 10px;"class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- section-title -->
                        <div class="section-title mb-0" style="text-align: center;">
                            <h3><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
<path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg> Below you can the events you are playing on <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
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
               <h3>My Events <svg xmlns="http://www.w3.org/2000/svg" width="26" height="19" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
            <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
            </svg></h3>
             </div>
             </div>
              <hr>
             <div class="card-body">
            @if(count($bookings))
             <div class="row">
                   @foreach ($bookings as $booking)
                     <div class="col-lg-4 col-md-6 col-sm-12">
                       <div class="card1">
                       <div class="card1-img" style="background-image:url({{ asset('uploads/event/'.$booking->event->cover) }});">
                         <div class="overlay">

                         </div>
                       </div>

                       <div class="card1-content ">

                           <h1>{{ $booking->event->name }}</h1>
                           <p style="padding:0px; margin:0px; " class="p1">{{ $booking->event->description}}</p>
                            <h2 style="padding:0px; margin:0px; ">{{ $booking->event->venue->name }}</h2>
                            <h4 style="font-weight: 400;">{{ $booking->event->genre->name }}</h4>

                            <div class="row">
                            <div class="col-6">
                           <p>{{ $booking->event->date }}</p>
                          </div>
                          <div class="col-4">
                          <p>{{ $booking->event->time }}</p>
                        </div>
                        <div  style="margin-top: 5px;" class="col-12">
                        <h5>Made By {{ $booking->event->user->name }}</h5>
                      </div>
                      </div>


                      <div class="row">
                        <div class="col-2">

                      </div>
                      <div class="col-6">

                    </div>


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
              </div>
            </div>
            </div>



</body>
</html>

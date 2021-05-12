
@extends('layouts.app')

@section('content')
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
       width: 120px;
       height: 35px;
       border: 1px solid #999;
       font-size: 14px;
       color: black;
       background-color: #fff;
       border-radius: 5px;

     }

     .a{
       font-size: 20px;
     }

</style>
<section>
<div class="container col-md-9" style="margin-top: 50px;">
<div class="col-12">
<a href="{{ route('eventmanager.home')}}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
<path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
</svg> Back</a>
</div>
<div style="margin-top: 15px;" class="row justify-content-center">
<div class="col-md-12">
    <div class="card shadowE">
        <div class="card-body">
          <div style="background-color: red; margin-bottom: 60px;"class="container ">
            <div class=" bg-white ">
                <div class="row">
                    <div style="padding-top: 15px; padding-bottom: 10px;"class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- section-title -->
                        <div class="section-title mb-0" style="text-align: center;">
                            <h1>All DJ's</h1>
                        </div>
                        <!-- /.section-title -->
                    </div>
                </div>
            </div>
            </div>
         <div class="mb-2">
              <form class="form-inline" action="">
              <label for="genre_filter">Filter By Category &nbsp;</label>
               <select class="form-control box shadow" id="genre_filter" name="genre_id[]" >
                <option value="">Select Category</option>
               @if(count($genres))
                  @foreach($genres as $genre)
                     <option value="{{$genre->id}}"  {{(Request::query('genre_id') && Request::query('genre_id')==$genre->name)?'selected':''}}  >{{$genre->name}}</option>
                  @endforeach
                @endif
              </select>
              <span>&nbsp;</span>
               <button type="button" onclick="search_dj()" class="btn btn-primary box1 shadow" >Search</button>
               @if(Request::query('genre_id'))
                <a class="btn btn-success box1 shadow" style="color: black; margin-left: 5px;" href="{{route('eventmanager.page.availableDj')}}">Clear</a>
               @endif
            </form>
          </div>
                @if(count($genres))
                <div class="album py-5 ">
               <div class="container">
                  <div class="row">
                    @foreach($genres as $genre)
                        @foreach ($genre->dj as $dj)
                          <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card1">
                            <div class="card1-content ordering">
                            <a class="a" href="{{ route('eventmanager.page.profile.show', $dj->id) }} " >{{ $dj->user->name}}</a>
                            <h2>$ {{ $dj->price }} </h2>
                            <h4 style="font-weight: 600;">{{ $genre->name }} </h4>
                      </div>
                     </div>
                  </div>
                  @endforeach
                  @endforeach
                  </div>
                @else
                  <tr>
                    <td colspan="6" >No posts found</td>

                  </tr>
                @endif
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="{{ asset('js/orderBy.js') }}"></script>
</div>

  <div class="container" style="padding-top: 25px; padding-bottom: 25px; margin-top: 100px;">
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
@section('javascript')
<script type="text/javascript">

  var query=<?php echo json_encode((object)Request::only(['genre_id','keyword'])); ?>;


  function search_dj(){

    Object.assign(query,{'genre_id': $('#genre_filter').val()});
    Object.assign(query,{'keyword': $('#keyword').val()});

    window.location.href="{{route('eventmanager.page.availableDj')}}?"+$.param(query);

  }

</script>
@endsection

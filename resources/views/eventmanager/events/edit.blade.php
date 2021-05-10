@extends('layouts.app')

@section('content')
<style>
.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: $custom-file-height;
  margin-bottom: 0;
  border: none;
}

</style>
<section>
  <div class="col-lg-8 mx-auto">
  <div style="margin-bottom: 10px; margin-top: 30px; margin-right: 0px; margin-left: 25px;" class="row">
  <div class="col-12">
    <a  href="{{ route('eventmanager.home')}}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
</svg> Back</a>
</div>
</div>
  </div>
<form method="POST" action="{{ route('eventmanager.events.update', $event->id) }}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PUT">
  <div style="margin-bottom: 10px; margin-top: 30px; margin-right: 0px; margin-left: 25px;" class="row">
      <div class="col-lg-8 mx-auto ">
        <div class="card mb-3 shadow">
<img src="{{ asset('uploads/event/'.$event->cover) }}" class="card-img-top heightImg" alt="...">
<div class="row" style="margin-top: 5px;">
<div class="col-4">

</div>
<div class="col-5 ">
Edit Image <input type="file" class="form-control custom-file" id="cover" name="cover" style="width: 250px;" />
</div>
<div class="col-3">

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
                      @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                      @endif
                        <h2 class="mt-0 font-weight-bold mb-1 m">About</h2>

                  <textarea type="text" style="margin-top: 10px;" class="form-control word-wrap: break-word;" id="description" name="description" value="{{ old('description', $event->description) }}">{{ old('description', $event->description) }}</textarea>
                   <br>
                  <div class="row">
                  <div class="col-4">
                     <label style="font-weight:400; color: black;">Where it's taking place :<select name="venue_id">
                       @foreach ($venues as $venue)
                        <option value="{{ $venue->id }}" {{ (old('venue_id') == $venue->id) ? "selected" : "" }} >{{ $venue->name }}</option>
                       @endforeach
                     </select></label>
                  </div>
                  <div class="col-3">
                      <label style="font-weight:400; color: black;">Event Genre : <select name="genre_id">
                        @foreach ($types as $genre)
                         <option value="{{ $genre->id }}" {{ (old('genre_id') == $genre->id) ? "selected" : "" }} >{{ $genre->name }}</option>
                        @endforeach
                      </select></label>
                  </div>
                  <div class="col-3">
                     <label style="font-weight:400; color: black;">Date of Event :<input style="font-size: 16px;" type="date"  name="date" value="{{ old('date', $event->date) }}"></label>
                  </div>
                  <div class="col-2">
                      <label style="font-weight:400; color: black;">Time of Event :<br><input style="font-size: 16px;" type="time" name="time"  value="{{ old('time', $event->time) }}"/></label>

                  </div>

                </div>
                <br>
                <div class="row">
                <div class="col-5">
                </div>
                <div class="col-3">


                    <button type="submit" style="background-color:orange; font-size: 18px; border-radius: 0px;" class="btn shadow pull-right">Submit <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg></button>

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
</form>
</section>
@endsection

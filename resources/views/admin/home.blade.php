@extends('layouts.app')

@section('content')
<div class="section">
<div class="container shadowE col-md-9" style="padding-top: 25px; padding-bottom: 25px; background-color: #fff; margin-top: 100px;">
  <div style="background-color: red; margin-bottom: 60px;"class="container ">
    <div class=" bg-white ">
        <div class="row">
            <div style="padding-top: 15px; padding-bottom: 10px;"class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <!-- section-title -->
                <div class="section-title mb-0" style="text-align: center;">
                    <h1>Welcome to Admin Dashboard {{ Auth::user()->name}}</h1>

                </div>
                <!-- /.section-title -->
            </div>
        </div>
    </div>
    </div>
    <div class="row justify-content-center">

    </div>
    <div class="card-body">

        <br>
          <div class="row justify-content-center">
          <div class="form-group ">
            <button  style=" font-size: 16px; border-radius: 0px; background-color: #1cffac; margin-left: 25px;" class="btn pull-right shadow"><a href="{{ route('admin.events.index') }}" >View Events</a></button>
            <button  style=" font-size: 16px; border-radius: 0px; background-color: #1cffac; margin-left: 25px;" class="btn pull-right shadow"><a href="{{ route('admin.bookings.index') }}" >View Bookings</a></button>
            <button  style=" font-size: 16px; border-radius: 0px; background-color: #1cffac; margin-left: 25px;" class="btn pull-right shadow"><a href="{{ route('admin.dj.index') }}" >View DJ's</a></button>
            <button type="submit" style=" font-size: 16px; border-radius: 0px; background-color: #1cffac; margin-left: 25px;" class="btn pull-right shadow"><a href="{{ route('admin.eventmanagers.index') }}" >View Event Managers</a></button>
          </div>
          </div>


    </div>
</div>
</div>



@endsection

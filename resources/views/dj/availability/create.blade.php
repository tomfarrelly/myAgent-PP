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

label{
  font-size: 16px;
  font-weight: 400px;
  color: black;
  text-shadow: 1px 1px black;
}
</style>
<div class="section ">
<div class="container shadowE col-md-8" style="padding-top: 25px; padding-bottom: 25px; background-color: #fff; margin-top: 100px;">
  <div style="background-color: red; margin-bottom: 60px;"class="container ">
    <div class=" bg-white ">
        <div class="row">
            <div style="padding-top: 15px; padding-bottom: 10px;"class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <!-- section-title -->
                <div class="section-title mb-0" style="text-align: center;">
                    <h1>Book Days Off</h1>
                </div>
                <!-- /.section-title -->
            </div>
        </div>
    </div>
    </div>
    <div class="row justify-content-center">
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{ route('dj.availability.store') }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="row justify-content-center">
            <div class="col-2"></div>
            <div style="margin-top: -70px;"class="col-4">
                <img style=" width: 550px; height: 250px;" src="https://teleskola.mt/wp-content/uploads/2020/05/2785427-58ee48a19c72e0df57667b41a17bf85b-1024x683.jpg" />
            </div>
            <div class="col-5"></div>
            </div>
            <div class="row justify-content-center">
            <div class="col-2"></div>
            <div class="form-group col-md-6">
                <label for="date">Start Date</label>
                <br>
                <input type="date" name="date" value="{{ old('date') }}"/>
            </div>
            <div class="form-group col-md-4">
                <label for="time">End Date</label>
                <br>
                <input type="date" name="date" value="{{ old('date') }}"/>
            </div>
          </div>
          <br>
          <div class="row justify-content-center">
          <div class="form-group col-md-3">
            <a href="{{ route('dj.home') }}" class="btn shadow">Cancel</a>
            <button type="submit" style=" font-size: 16px; border-radius: 0px; background-color: #1cffac; margin-left: 25px;" class="btn pull-right shadow">Submit</button>
          </div>
          </div>
        </form>
    </div>
</div>
</div>

@endsection

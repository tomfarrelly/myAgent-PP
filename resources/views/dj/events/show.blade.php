@extends('layouts.app')

@section('content')
<style>
td{
  border:none;
}
</style>
<div class="container mt-5">
  <div class="col-10" style="margin-bottom: 15px;">
    <a  href="{{ route('dj.home')}}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
  </svg> Back </a>
  </div>
    <div class="row">
        <div class="col-md-12 col-md-offset-2 ">
            <div class="card shadowE">
                <div class="row justify-content-center">
                    <h2 style="padding-top:10px; text-shadow: 1px 1px black;">Event Name: {{ $events->name }}</h2>
                </div>
                <div class="card-body">
                  <div class="row justify-content-center">
                    <div class="col-md-6">
                  <img src="{{ asset('uploads/event/'.$events->cover) }}" class="w-100">
                  </div>
                  <div class="col-md-6">
                    <label style=" color:black; text-shadow: 1px 1px black;">Description</label>
                    <p>{{ $events->description }}</p>
                    <label style=" color:black; text-shadow: 1px 1px black;">Venue Name</label>
                    <h4 style="color:gray;">{{ $events->venue->name }}</h4>
                    <label style=" color:black; text-shadow: 1px 1px black;">Event Genre</label>
                    <h4 style="color:gray;">{{ $events->genre->name }}</h4>
                    <div class="row">
                      <div class="col-8">
                    <label style=" color:black; text-shadow: 1px 1px black;">Event Date</label>
                    <h4 style="color:gray;">{{ $events->date }}</h4>
                     </div>
                     <div class="col-4">
                    <label style=" color:black; text-shadow: 1px 1px black;">Event Time</label>
                    <h4 style="color:gray;">{{ $events->time }}</h4>
                      </div>
                      </div>
                  </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

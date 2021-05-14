@extends('layouts.app')

@section('content')
<style>
.td1 {
  max-width: 25px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
th{
  font-size: 16px;
  font-weight: 400px;
  color: black;
  text-shadow: 1px 1px gray;
}
td{
  font-size: 16px;
  font-weight: 400;
  color: black;
}

.bt1{
  background-color: #0000FF;
  color: white;
}

.bt1:hover{
  color:black;
  background-color: #0000CD;
}

.bt2{
  background-color: #8B008B;
  color: white;
}

.bt2:hover{
  color:black;
  background-color: #800080;
}
</style>
<div class="section">
<div class="container shadow" style="padding-top: 28px; padding-bottom: 28px; background-color: #fff; margin-top: 65px;">
  <div class="col-10">
    <a  href="{{ route('dj.home')}}"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
  </svg> Back </a>
  </div>
  <div class="row justify-content-center">
  <div><h3> My Booking Requests</h3></div>
  <div class="col-md-12">
      <div class="card" style="border: none; ">
        <div class="card-body">
            @if (count($bookings) === 0)
            <p>There are no bookings!</p>
            @else
            <table id="table-bookings" class="table table-hover">
                <thead>

                    <th>Sent By</th>
                    <th>Event</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Location</th>
                    <th>Genre</th>
                    <th>Description</th>

                </thead>
                <tbody>
                  @foreach ($bookings as $booking)
                    <tr data-id="{{ $booking->id }}">

                      <td>{{ $booking->event->user->name}}</td>
                      </a>
                      <td>{{ $booking->event->name }}</td>
                          <td>{{ $booking->event->date }}</td>
                          <td>{{ $booking->event->time }}</td>
                          <td>{{ $booking->event->venue->name }}</td>
                          <td>{{ $booking->event->genre->name }}</td>
                          <td class="td1">{{ $booking->event->description}}</td>
                         <td>
                          <a href="{{ route('dj.bookings.edit', $booking->id) }}" class="btn bt1 float-right">View Booking</a>
                          @endforeach
                            </form>
                        </td>
                    </tr>

                </tbody>
            </table>
            @endif
        </div>
          </div>
        </div>


  </div>
</div>
</div>
<div class="section">
<div class="container shadow" style="padding-top: 28px; padding-bottom: 28px; background-color: #fff; margin-top: 65px;">
  <div class="row justify-content-center">
  <div><h3> My Confirmed Bookings</h3></div>
  <div class="col-md-12">
      <div class="card" style="border: none; ">
        <div class="card-body">
          @if (count($confirmedBookings) === 0)
          <p>There are no confirmed bookings!</p>
          @else
            <table id="table-bookings" class="table table-hover">
                <thead>

                    <th>Sent By</th>
                    <th>Event</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Location</th>
                    <th>Genre</th>
                    <th>Description</th>

                </thead>
                <tbody>
                  @foreach ($confirmedBookings as $booking)
                    <tr data-id="{{ $booking->id }}">

                      <td>{{ $booking->event->user->name}}</td>
                      </a>
                      <td>{{ $booking->event->name }}</td>
                          <td>{{ $booking->event->date }}</td>
                          <td>{{ $booking->event->time }}</td>
                          <td>{{ $booking->event->venue->name }}</td>
                          <td>{{ $booking->event->genre->name }}</td>
                          <td class="td1">{{ $booking->event->description}}</td>
                          <td>
                          @endforeach
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
            @endif
        </div>
          </div>
        </div>
  </div>
</div>
</div>
@endsection

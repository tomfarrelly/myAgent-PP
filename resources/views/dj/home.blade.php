@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     You are logged in as a DJ.
                     <br>
                     <br>
                       <a href="{{ route('dj.bookings.index') }}" class="btn btn-primary float-right">View My Bookings</a>
                       <a href="{{ route('dj.availability.create') }}" class="btn btn-primary float-left">Book Days Off</a>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection

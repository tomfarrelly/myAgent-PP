@extends('layouts.app')

@section('content')
<br>


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

                    You are logged in as Admin!

                    <div class="row">
                      <h4>View the Events <a  href="{{ route('admin.events.index') }}"> View</a></h4>

                    </div>
                    <div class="row">
                      <h4>View Djs <a  href="{{ route('admin.dj.index') }}"> View</a></h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
@endsection

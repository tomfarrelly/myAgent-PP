@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card-header">
                Add dates
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
                    <div class="form-group">
                        <label for="dj_id">DJ</label>
                        <input type="text" class="form-control" id="dj_id" name="dj_id" value="{{ old('dj_id') }}" />
                    </div>

                        <label for="date_start">Start Date</label>
                        <input type="text" class="form-control" id="date" name="date_start" value="{{ old('date_start') }}" />
                    </div>
                    <div class="form-group">
                        <label for="date_end">End Date</label>
                        <input type="text" class="form-control" id="date" name="date_end" value="{{ old('date_end') }}" />
                    </div>

                    <div class="float-right">
                        <a href="{{ route('dj.page.profile') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

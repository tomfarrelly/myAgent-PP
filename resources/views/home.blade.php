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

                    {{ __('You are logged in!') }}

                    <script type="text/javascript">window.loop11_pp = [100, 76388];</script><script src="//cdn.loop11.com/embed.js" type="text/javascript" async="async"></script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

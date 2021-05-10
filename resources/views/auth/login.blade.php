@extends('layouts.app')

@section('content')
<style>
input,
textarea {
    background-color: #F3E5F5;
    border-radius: 50px !important;
    padding: 12px 15px 12px 15px !important;
    width: 100%;
    box-sizing: border-box;
    border: none !important;
    border: 1px solid #F3E5F5 !important;
    font-size: 16px !important;
    color: #000 !important;
    font-weight: 400;
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #D500F9 !important;
    outline-width: 0;
    font-weight: 400
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.card {
    border-radius: 0;
    border: none;
    background: #edefef;

}

.card1 {
    width: 50%;

    background-color: #fff !important;
    margin-top:25px;
}

.card2 {
    width: 50%;
    background-image: linear-gradient(to right, #272725 ,black,#fb004b)
}

#logo {
    width: 250px;
    height: 50px
}

.heading {
    margin-bottom: 20px !important
}

::placeholder {
    color: #000 !important;
    opacity: 1
}

:-ms-input-placeholder {
    color: #000 !important
}

::-ms-input-placeholder {
    color: #000 !important
}

.form-control-label {
    font-size: 12px;
    margin-left: 15px
}

.msg-info {
  font-size: 16px;
    padding-left: 15px;
    margin-top: 5px;
    margin-bottom: 15px
}

.btn-color {
    border-radius: 50px;
    color: #fff;
    background-image: linear-gradient(to right, #fb004b ,#272725 ,black);
    padding: 15px;
    cursor: pointer;
    border: none !important;
    margin-top: 40px
}

.btn-color:hover {
    color: #fff;
    background-image: linear-gradient(to right, #272725 ,black,#fb004b);
}

.btn-white {
    border-radius: 50px;
    color: #D500F9;
    background-color: #fff;
    padding: 8px 40px;
    cursor: pointer;
    border: 2px solid #D500F9 !important
}

.btn-white:hover {
    color: #fff;
    background-image: linear-gradient(to right, #272725 ,black,#fb004b)
}

a {
    color: #000
}

a:hover {
    color: #000
}

.bottom {
    width: 100%;
    margin-top: 50px !important
}

.sm-text {
    font-size: 15px
}

@media screen and (max-width: 992px) {
    .card1 {
        width: 100%;
        padding: 40px 30px 10px 30px
    }

    .card2 {
        width: 100%
    }

    .right {
        margin-top: 100px !important;
        margin-bottom: 100px !important
    }
}

@media screen and (max-width: 768px) {
    .container {
        padding: 10px !important
    }

    .card2 {
        padding: 50px
    }

    .right {
        margin-top: 50px !important;
        margin-bottom: 50px !important
    }
}
</style>
<form method="POST" action="{{ route('login') }}">
    @csrf
<div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
              <a href="{{ route('welcome') }}"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="black" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16" style="margin-left: 25px; margin-top: 15px;">
            <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
            </svg></a>
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                      <h3 class="mb-5 text-center heading">We are</h3>
                        <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fairbnb-myagent.com%2Fwp-content%2Fthemes%2FMyAgent%2Fimages%2Flogo.png&f=1&nofb=1"> </div>

                        <h6 class="msg-info">Please login to your account</h6>
                        <div class="form-group"> <label for="email" class="form-control-label text-muted">Email Address</label> <input id="email" type="email" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus">
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                        <div class="form-group"> <label for="password" class="form-control-label text-muted">Password</label> <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror

                        </div>
                        <div class="form-group"> <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label> <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="form-check-input">
                        </div>

                        <div class="row justify-content-center my-3 px-3"> <button type="submit" class="btn-block btn-color">Login In</button> </div>
                        @if (Route::has('password.request'))
                        <div class="row justify-content-center my-2"> <a href="{{ route('password.request') }}"><small class="text-muted">{{ __('Forgot Your Password?') }}</small></a> </div>
                        @endif
                    </div>
                </div>
                <div class="bottom text-center mb-5">
                    <p class="sm-text mx-auto mb-3">Don't have an account?<a href="{{ route('register') }}"><butto class="btn btn-white ml-2">Create new</button></a></p>
                </div>
            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-5 right">
                    <h3 class="text-white">We are more than just a platform</h3> <small class="text-white">MyAgent is a booking platform where famous and novice DJs have a great opportunity for becoming even better versions of themselves. Allowing the Event Managers to book DJs in a new intuitive process.</small>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<!-- <div class="container" style="padding-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

@endsection

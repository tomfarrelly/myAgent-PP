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

<form method="POST" action="{{ route('register') }}">
    @csrf
<div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
          <div class="card card2">
              <div class="my-auto mx-md-5 px-md-5 right">
                  <h3 class="text-white">We are more than just a platform</h3> <small class="text-white">MyAgent is a booking platform where famous and novice DJs have a great opportunity for becoming even better versions of themselves. Allowing the Event Managers to book DJs in a new intuitive process.</small>
              </div>
          </div>
            <div class="card card1">
              <a href="{{ route('welcome') }}"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="black" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16" style="margin-left: 25px; margin-top: 15px;">
            <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
            </svg></a>
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                      <h3 class="mb-5 text-center heading">We are</h3>
                        <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fairbnb-myagent.com%2Fwp-content%2Fthemes%2FMyAgent%2Fimages%2Flogo.png&f=1&nofb=1"> </div>

                        <h6 class="msg-info">Please register your new account</h6>
                        <div class="form-group"> <label for="name" class="form-control-label text-muted">Name</label> <input id="name" type="text" name="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                        <div class="form-group"> <label for="email" class="form-control-label text-muted">Email Address</label> <input id="email" type="email" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                        <div class="form-group"> <label for="username" class="form-control-label text-muted">Username</label> <input id="username" type="text" name="username" placeholder="Username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                          @error('username')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                        <div class="form-group"> <label for="password" class="form-control-label text-muted">Password</label> <input id="password" type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                        <div class="form-group"> <label for="password-confirm" class="form-control-label text-muted">Confirm Password</label> <input placeholder="Confirm Password" id="password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-group"> <label for="bio" class="form-control-label text-muted">Password</label> <input placeholder="Bio" id="bio" type="text" class="form-control @error('bio') is-invalid @enderror" name="bio" value="{{ old('bio') }}" required autocomplete="bio" autofocus>
                          @error('bio')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror

                        </div>
                        <div class="form-group"> <label for="location" class="form-control-label text-muted">Password</label> <input placeholder="Location" id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="location" autofocus>
                          @error('location')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror

                        </div>
                        <div class="row justify-content-center my-3 px-3"> <button type="submit" class="btn-block btn-color">Register</button> </div>

                    </div>
                </div>
                <div class="bottom text-center mb-5">
                    <p class="sm-text mx-auto mb-3">Already have an account?<a href="{{ route('login') }}"><butto class="btn btn-white ml-2">Log In</button></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection

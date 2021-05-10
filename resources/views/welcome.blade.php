@extends('layouts.app')

@section('content')
<style>
body {
  --s: 220vmin;
  --p: calc(var(--s) / 2);
  --c1: red;
  --c2: #1cffac;
  --c3: white;
  --bg: var(--c3);
  --d: 20000ms;
  --e: cubic-bezier(0.76, 0, 0.24, 1);

  background-color: var(--bg);
  background-image:
    linear-gradient(45deg, var(--c1) 25%, transparent 25%),
    linear-gradient(-45deg, var(--c1) 25%, transparent 25%),
    linear-gradient(45deg, transparent 75%, var(--c2) 75%),
    linear-gradient(-45deg, transparent 75%, var(--c2) 75%);
  background-size: var(--s) var(--s);
  background-position:
    calc(var(--p) *  1) calc(var(--p) *  0),
    calc(var(--p) * -1) calc(var(--p) *  1),
    calc(var(--p) *  1) calc(var(--p) * -1),
    calc(var(--p) * -1) calc(var(--p) *  0);
  animation:
    color var(--d) var(--e) infinite,
    position var(--d) var(--e) infinite;
}

@keyframes color {
  25%, 25% {
    --bg: var(--c3);
  }
  26%, 50% {
    --bg: var(--c1);
  }
  51%, 75% {
    --bg: var(--c3);
  }
  76%, 100% {
    --bg: var(--c2);
  }
}

@keyframes position {
  0% {
    background-position:
      calc(var(--p) *  1) calc(var(--p) *  0),
      calc(var(--p) * -1) calc(var(--p) *  1),
      calc(var(--p) *  1) calc(var(--p) * -1),
      calc(var(--p) * -1) calc(var(--p) *  0);
  }
  25% {
    background-position:
      calc(var(--p) *  1) calc(var(--p) *  4),
      calc(var(--p) * -1) calc(var(--p) *  5),
      calc(var(--p) *  1) calc(var(--p) *  3),
      calc(var(--p) * -1) calc(var(--p) *  4);
  }
  50% {
    background-position:
      calc(var(--p) *  3) calc(var(--p) * 8),
      calc(var(--p) * -3) calc(var(--p) * 9),
      calc(var(--p) *  2) calc(var(--p) * 7),
      calc(var(--p) * -2) calc(var(--p) * 8);
  }
  75% {
    background-position:
      calc(var(--p) *  3) calc(var(--p) * 12),
      calc(var(--p) * -3) calc(var(--p) * 13),
      calc(var(--p) *  2) calc(var(--p) * 11),
      calc(var(--p) * -2) calc(var(--p) * 12);
  }
  100% {
    background-position:
      calc(var(--p) *  5) calc(var(--p) * 16),
      calc(var(--p) * -5) calc(var(--p) * 17),
      calc(var(--p) *  5) calc(var(--p) * 15),
      calc(var(--p) * -5) calc(var(--p) * 16);
  }
}

@media (prefers-reduced-motion) {
  body {
    animation: none;
  }
}

/* reset */
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}




/* other */
.info {
  margin: 20px 0;
  text-align: center;
}

p {
  color: #2e2e2e;
  margin-bottom: 20px;
}


/* block-$ */
.block-effect {
  font-size: calc(1px + 3vw);
}

.block-reveal {
  --t: calc(var(--td) + var(--d));

  color: transparent;
  padding: 4px;

  position: relative;
  overflow: hidden;

  animation: revealBlock 0s var(--t) forwards;
}

.block-reveal::after {
  content: '';

  width: 0%;
  height: 100%;
  padding-bottom: 4px;

  position: absolute;
  top: 0;
  left: 0;

  background: var(--bc);
  animation: revealingIn var(--td) var(--d) forwards, revealingOut var(--td) var(--t) forwards;
}


/* animations */
@keyframes revealBlock {
  100% {
    color: #0f0f0f;
  }
}

@keyframes revealingIn {

  0% {
    width: 0;
  }

  100% {
    width: 100%;
  }
}

@keyframes revealingOut {

  0% {
    transform: translateX(0);
  }

  100% {
    transform: translateX(100%);
  }

}

.btn-circle,
#to-top {
  border-radius: 60%;
  background: black;
  padding: 6px;
  font-size: 14px;
  /* border-radius: 50%; */
  box-shadow: 0 8px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  color: #fff;
  text-align: center;
  font-weight: 600;
  text-transform: uppercase;
}

.c2a-btn {
  margin: 48px auto 0;
  margin: 4.8rem auto 0;
}

.btn-default {
  color: #fff;
  background-color: red;
  border-color: black;
  transition: all 1s ease;
}

.btn-group-lg > .btn,
.btn-lg {
  padding: 18px 28px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 50px;
  border: solid 2px grey;
}

.btn-group .btn-or {
  top: 50%;
  left: 45%;
  position: absolute;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  z-index: 99;
  box-shadow: 0;
  border: 2px solid #fff;
}

.button {

  background: #4285f4;
  color: #fff;
  text-transform: uppercase;
  padding: 20px 30px;
  border-radius: 5px;
  box-shadow: 0px 17px 10px -10px rgba(0, 0, 0, 0.4);
  cursor: pointer;
  -webkit-transition: all ease-in-out 300ms;
  transition: all ease-in-out 300ms;
}
.button:hover {
  box-shadow: 0px 37px 20px -20px rgba(0, 0, 0, 0.2);
  -webkit-transform: translate(0px, -10px) scale(1.2);
          transform: translate(0px, -10px) scale(1.2);
}

.threeD {
  color: black;
  white-space: nowrap;

  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 3em;
  font-family: sans-serif;
  letter-spacing: 0.1em;
  transition: 0.3s;
  text-shadow: 1px 1px 0 grey, 1px 2px 0 grey, 1px 3px 0 grey, 1px 4px 0 grey,
    1px 5px 0 grey, 1px 6px 0 grey, 1px 7px 0 grey, 1px 8px 0 grey,
    5px 13px 15px black;
}

.threeD:hover {
  transition: 0.3s;
  transform: scale(1.1)translate(-50%, -50%);
  text-shadow: 1px -1px 0 grey, 1px -2px 0 grey, 1px -3px 0 grey,
    1px -4px 0 grey, 1px -5px 0 grey, 1px -6px 0 grey, 1px -7px 0 grey,
    1px -8px 0 grey, 5px -13px 15px black, 5px -13px 25px #808080;
}

</style>

<div class="section">
<div class="container shadow" style="padding-top: 25px; padding-bottom: 25px; background-color: #fff; margin-top: 100px;">
    <div class="row justify-content-center">
      <h1 class="block-effect" style="--td: 1.2s;">
    <img src="https://startbootstrap.com/assets/img/freepik/wall-post-pana.svg" style="height:150px; float:right;">
    <div class="block-reveal" style="--bc: black; --d: .1s">Welcome to MyAgent</div>
    <div class="block-reveal" style="--bc: #fb004b; --d: .5s">Booking Platform</div>
    </h1>
    </div>
</div>
<div class="container shadow" style="padding-top: 28px; padding-bottom: 28px; background-color: #fff; border-top: solid 5px red; border-bottom: solid 5px red; margin-top: 15px;">
  <div class="row justify-content-center">
  <div><h3> To Use Our Website You Have to Be Logged In or Registered</h3></div>
  <div class="col-md-8">
      <div class="card" style="border: none; margin-top: -14px;">
        <div class="c2a-btn footer-c2a-btn">
            <div class="btn-group btn-group-lg" role="group" aria-label="Call to action">
              <a type="button" class="btn btn-default btn-lg" href="{{ route('login') }}">Login</a>
              <span class="btn-circle btn-or">or</span>
              <a type="button" class="btn btn-default btn-lg" href="{{ route('register') }}">Register</a>
            </div>
          </div>
          </div>
        </div>


  </div>
</div>
<div class="container shadow" style="padding-top: 25px; padding-bottom: 25px; background-color: #fff; margin-top: 15px;">
  <div class="row justify-content-center">
    <div >
  <a class="threeD" href="{{ route('about') }}"> About Us</a>
</div>


  </div>
</div>
</div>

@endsection

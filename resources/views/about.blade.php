@extends('layouts.app')

@section('content')
<style>
body {
  --s: 100vmin;
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

</style>
<div class="section">
<div class="container shadow" style="padding-top: 25px; padding-bottom: 25px; background-color: #fff; margin-top: 100px;">
  <a href="{{ route('welcome') }}"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="black" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
<path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
</svg></a>
    <div class="row justify-content-center">
      <h1 class="block-effect" style="--td: 1.2s;">
     <img src="https://image.freepik.com/free-vector/people-talking-arguing_74855-6616.jpg" style="height:250px; float: right;">
    <div class="block-reveal" style="--bc: black; --d: .1s">About MyAgent</div>

    </h1>
    </div>
    <p>The aim of MyAgent is to be an online scheduling site for connecting DJs
       to Event Managers and venues across the music and media industry. Allowing for
        a much more intuitive process of finding and booking, for people in the event
        planning business, or even one-offs looking for DJs.
    </p>
</div>

</div>
@endsection

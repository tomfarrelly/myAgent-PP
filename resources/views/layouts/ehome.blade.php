<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <style>
  img.normal {
    width: auto;
  }

  img.big {
    width: 50%;
  }

  img.small {
    width: 10%;
  }

  * {
  box-sizing: border-box;
  line-height: 1.5;
  font-family: 'Open Sans', sans-serif;
}

img {
  max-width: 100%;
}

.container1 {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background: #444;
}

.card1 {
  position: relative;
  background: #333;
  width: 400px;
  height: 85vh;
  border-radius: 6px;
  padding: 2rem;
  color: #aaa;
  box-shadow: 0 .75rem .75rem rgba(0,0,0,0.2),
    0 0 5rem rgba(0,0,0,0.2);
  overflow: hidden;
  margin-bottom: 2rem;
  transition: 0.4s ease-out;
  &:hover
		transform: translateY(20px)
		&:before
			opacity: 1
}

.image-container {
  margin: -2rem -2rem 1rem -2rem;
}

.line {
opacity: 0;
animation: LineFadeIn .8s .8s forwards ease-in;
}

.image {
  opacity: 0;
  animation: ImageFadeIn .8s 1.4s forwards;
}

.title {
  color: white;
  margin-top: 0;
  font-weight: 800;
  letter-spacing: 0.01em;
}

.content {
  margin-top: 3rem;
  opacity: 0;
  animation: ContentFadeIn .8s 1.6s forwards;
}

.svg {
  position: absolute;
  left: 0;
  top: 115px;
}

@keyframes LineFadeIn {
  0% { opacity: 0; d: path("M 0 300 Q 0 300 0 300 Q 0 300 0 300 C 0 300 0 300 0 300 Q 0 300 0 300 "); stroke: #fff; }
  50% { opacity: 1; d: path("M 0 300 Q 50 300 100 300 Q 250 300 350 300 C 350 300 500 300 650 300 Q 750 300 800 300"); stroke: #888BFF; }
  100% { opacity: 1; d: path("M -2 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 802 400"); stroke: #545581; }
}

@keyframes ContentFadeIn {
  0% { transform: translateY(-1rem); opacity: 0; }
  100% { transform: translateY(0); opacity: 1; }
}

@keyframes ImageFadeIn {
  0% { transform: translate(-.5rem, -.5rem) scale(1.05); opacity: 0; filter: blur(2px); }
  50% { opacity: 1; filter: blur(2px); }
  100% { transform: translateY(0) scale(1.0); opacity: 1; filter: blur(0); }
}

#neon-btn {
  display: flex;
  align-items: center;
  justify-content: space-around;
  height: 100vh;
  background: #031628;
}

.btn {
  border: 1px solid;
  background-color: transparent;
  text-transform: uppercase;
  font-size: 14px;
  padding: 10px 20px;
  font-weight: 300;
}

.one {
  color: #4cc9f0;
}

.two {
  color: #f038ff;
}

.three {
  color: #b9e769;
}

.btn:hover {
  color: white;
  border: 0;
}

.one:hover {
  background-color: #4cc9f0;
  -webkit-box-shadow: 10px 10px 99px 6px rgba(76,201,240,1);
  -moz-box-shadow: 10px 10px 99px 6px rgba(76,201,240,1);
  box-shadow: 10px 10px 99px 6px rgba(76,201,240,1);
}

.two:hover {
  background-color: #f038ff;
  -webkit-box-shadow: 10px 10px 99px 6px rgba(240, 56, 255, 1);
  -moz-box-shadow: 10px 10px 99px 6px rgba(240, 56, 255, 1);
  box-shadow: 10px 10px 99px 6px rgba(240, 56, 255, 1);
}

.three:hover {
  background-color: #b9e769;
  -webkit-box-shadow: 10px 10px 99px 6px rgba(185, 231, 105, 1);
  -moz-box-shadow: 10px 10px 99px 6px rgba(185, 231, 105, 1);
  box-shadow: 10px 10px 99px 6px rgba(185, 231, 105, 1);
}
  </style>
</head>

<body style="background-color:#f9f5f5;">
    <div id="ehome">


      <main role="main">



        <section class="jumbotron text-center" style="background-color:#1cffac;">
          <div class="container">
            <h1 class="jumbotron-heading">Welcome to your Dashboard {{ Auth::user()->name }}</h1>
            <h3 class=" text-muted">You are logged in as Event Manager</h3>
            <p class="lead text-muted">Below you can see your Events.</p>

          </div>
        </section>

        <div class="album py-5 ">
          <div class="container">
            <div class="row">
              <div class="col-4">
           <h3>Events Taking Place</h3>
         </div>
         </div>
         <hr>
         <br>

  <div class="row">

           @foreach ($events as $event)
             <div class="col-md-6">
  <div class="card1">
     <div class="image-container">
       <img class="image" src="{{ asset('uploads/event/'.$event->cover) }}" alt="">
    </div>

      <svg class="svg" viewBox="0 0 800 500">

        <path d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400 L 800 500 L 0 500" stroke="transparent" fill="#333"/>
        <path class="line" d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400" stroke="pink" stroke-width="3" fill="transparent"/>
      </svg>

     <div class="content">
       <h1 class="title">{{ $event->name }}</h1>
     <p>{{ $event->description}}</p>
     <h3>{{ $event->venue}}</h3>
      <h5>{{ $event->date}}</h5>
      <h6>{{ $event->time}}</h6>
       <a href="{{ route('eventmanager.events.show', $event->id) }}" class="btn one one-hover">View</a>
       <a href="{{ route('eventmanager.events.edit', $event->id) }}" class="btn two btn:hover two:hover">Edit</a>
    </div>
  </div>
</div>

@endforeach
</div>

            <div class="row">
              @foreach ($events as $event)
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">

                  <img src="{{ asset('uploads/event/'.$event->cover) }}" class="normal" width="400" height="250">
                  <div class="card-body">
                    <h5>{{ $event->name }}</h5>
                    <p class="card-text">{{ $event->description }}</p>
                    <p class="card-text">{{ $event->venue }}</p>
                    <p class="card-text">{{ $event->date }}</p>
                    <p class="card-text">{{ $event->time }}</p>
                    <p class="card-text">{{ $event->type}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="{{ route('eventmanager.events.show', $event->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('eventmanager.events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                      </div>
                      <small class="text-muted">{{ Auth::user()->name }}</small>
                    </div>
                  </div>
                </div>
              </div>
@endforeach
            </div>

          </div>
        </div>



      </main>
      <footer class="bg-light text-center text-lg-start">
      <!-- Copyright -->
      <div class="text-center p-3 text-white" style="background-color:#323232;">
      © 2020 Copyrights Dawid & Tom:
      <a class="text-white" href="{{ route('eventmanager.home') }}">www.MyAgent.com</a>
      </div>
      <!-- Copyright -->
      </footer>


    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>


</head>
<style>



</style>
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
       <div class="row">
         <div class="col-md-2">
       <h3>{{ $event->venue}}</h3>
     </div>
     <div class="col-md-9">
        <h3 class="ct">{{ $event->type}}</h3>
        </div>
         </div>
         <div class="row">
           <div class="col-md-5">
         <h5>{{ $event->date}}</h5>
       </div>
       <div class="col-md-6 ct">
          <h6>{{ $event->time}}</h6>
          </div>
           </div>
       <a href="{{ route('eventmanager.events.show', $event->id) }}" class="btn one one-hover">View</a>
       <a href="{{ route('eventmanager.events.edit', $event->id) }}" class="btn two btn:hover two:hover">Edit</a>
    </div>
  </div>
</div>

@endforeach
</div>
<div class="row">
  <div class="col-4">
<h3>Past Events</h3>
</div>
</div>
            <div class="row">
              @foreach ($events as $event)
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">

                  <img src="{{ asset('uploads/event/'.$event->cover) }}" >
                  <div class="card-body">
                    <h5>{{ $event->name }}</h5>
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
        <a class="top-link hide" href="" id="js-top">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-symmetry-vertical" viewBox="0 0 16 16">
  <path d="M7 2.5a.5.5 0 0 0-.939-.24l-6 11A.5.5 0 0 0 .5 14h6a.5.5 0 0 0 .5-.5v-11zm2.376-.485a.5.5 0 0 1 .563.246l6 11A.5.5 0 0 1 15.5 14h-6a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .376-.485zM10 4.461V13h4.658L10 4.46z"/>
</svg>
    <i class="bi bi-symmetry-vertical"></i>
  </a>



      </main>
    </div>
</body>
<script>
// Set a variable for our button element.
const scrollToTopButton = document.getElementById('js-top');

// Let's set up a function that shows our scroll-to-top button if we scroll beyond the height of the initial window.
const scrollFunc = () => {
  // Get the current scroll value
  let y = window.scrollY;

  // If the scroll value is greater than the window height, let's add a class to the scroll-to-top button to show it!
  if (y > 0) {
    scrollToTopButton.className = "top-link show";
  } else {
    scrollToTopButton.className = "top-link hide";
  }
};

window.addEventListener("scroll", scrollFunc);

const scrollToTop = () => {
  // Let's set a variable for the number of pixels we are from the top of the document.
  const c = document.documentElement.scrollTop || document.body.scrollTop;

  // If that number is greater than 0, we'll scroll back to 0, or the top of the document.
  // We'll also animate that scroll with requestAnimationFrame:
  // https://developer.mozilla.org/en-US/docs/Web/API/window/requestAnimationFrame
  if (c > 0) {
    window.requestAnimationFrame(scrollToTop);
    // ScrollTo takes an x and a y coordinate.
    // Increase the '10' value to get a smoother/slower scroll!
    window.scrollTo(0, c - c / 10);
  }
};

// When the button is clicked, run our ScrolltoTop function above!
scrollToTopButton.onclick = function(e) {
  e.preventDefault();
  scrollToTop();
}
</script>
</html>

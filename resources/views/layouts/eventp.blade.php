<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/small-business.css" rel="stylesheet">

  <style>

  .top-link {
    transition: all .25s ease-in-out;
    position: fixed;
    bottom: 0;
    right: 0;
    display: inline-flex;

    cursor: pointer;
    align-items: center;
    justify-content: center;
    margin: 0 3em 3em 0;

    padding: .25em;
    width: 80px;
    height: 40px;
    background-color: hsla(5, 76%, 62%, .8);
    color: hsl(0, 100%, 98%);
    &.show {
      visibility: visible;
      opacity: 1;
    }

    &.hide {
      visibility: hidden;
      opacity: 0;
    }

    svg {
      fill: black;
      width: 24px;
      height: 12px;
    }

    &:hover {
      color: black;

      svg {
        fill: black;
      }
    }
  }

  @import "https://fonts.googleapis.com/css?family=Muli";
*{
  font-family: "Muli",sans-serif;
}
.profile-card {
	box-shadow: 0px 0px 20px #DFDFDF;
	border: none;
	border-radius: 0;
  width: 250px; /* You can set the dimensions to whatever you want */
  height: 250px;

}

input.fab {
	display: none
}

figure {
  overflow: hidden
}

.img-profile {
    -webkit-clip-path: circle(52% at 70% 38%);
    -moz-clip-path: circle(52% at 70% 38%);
    clip-path: circle(52% at 70% 38%);
    transform: translatez(0);
    transition: all .3s linear;
}
.img-profile:hover {
    -webkit-clip-path: circle(30% at 50% 50%);
    clip-path: circle(30% at 50% 50%);
  transform: scale(1.07) rotate(-5deg) translatez(0)
}
.profile-card .fab+.toggle {
	top: 63%;
	z-index: 10;
	right: 0;
	width: 50px;
	height: 50px;
	cursor: pointer;
	font-size: 60px;
	line-height: 50px;
	text-align: center;
	border-radius: 50%;
	position: absolute;
	color: #fff;
	background: #F44336;
	-webkit-user-select: none;
	box-shadow: 0 4px 4px #666;
	transition: all 0.3s ease-in-out 0s;
}

.fab:checked+.toggle {
	color: #fff;
	background: #F44336;
	transform: rotate(135deg);
	box-shadow: 2px -2px 4px #333;
	transition: all 0.3s ease-in-out 0s;
}

.img1 {
    width: 250px; /* You can set the dimensions to whatever you want */
    height: 220px;
    object-fit: cover;
}

.profile-card-2 {
    width: 150px;
    height:150px;
    background-color: #FFF;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    background-position: center;
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    border-radius: 10px;
}

.profile-card-2 img {
    transition: all linear 0.25s;
    width: 150px;
    height:150px;
}

.profile-card-2 .profile-name {
    position: absolute;
    left: 30px;
    bottom: 20px;
    font-size: 16px;
    text-decoration: none;
    color: #FFF;
    text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
    font-weight: bold;
    transition: all linear 0.25s;
}


.profile-card-2 .profile-username {
    position: absolute;
    bottom: 10px;
    left: 30px;
    color: #FFF;
    font-size: 13px;
    transition: all linear 0.25s;
}



.profile-card-2:hover img {
    filter: grayscale(100%);
}

.profile-card-2:hover .profile-name {
    bottom: 80px;
}

.profile-card-2:hover .profile-username {
    bottom: 60px;
}
  </style>

</head>

<body style="background-color:#f9f5f5;">



  <!-- Page Content -->
  <div class="container " style="box-shadow: 0 .5rem .5rem rgba(0,0,0,0.2),
    0 0 5rem rgba(0,0,0,0.9); background-color:white; padding-bottom:50px;">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="row">
      <div class="col-lg-7">
        <img src="{{ asset('uploads/event/'.$events->cover) }}" class="page-header w-100" >
      </div>
    </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <div class="row">
          <div class="col-md-12" style="text-align: right; color:silver;">
        <h4>Date: {{ $events->date}}</h4>
      </div>
          </div>
          <div class="row">
            <div class="col-md-12" style="text-align: right; color:silver;">
          <h5>Time: {{ $events->time}}</h5>
        </div>
            </div>
        <h1 class="font-weight-light" style="color:#1CFFAC;">{{ $events->name }}</h1>
        <p style="color:white;">{{ $events->description }}</p>
        <div class="row">
          <div class="col-md-6">
        <h3 style="color:#49AE81;">Venue: {{ $events->venue}}</h3>
      </div>
      <div class="col-md-6">
         <h4 style="color:#49AE81;">Genre: {{ $events->type}}</h4>
         </div>
          </div>
      </div>


      <section class="bg-faded container-fluid">
        <br>
        <br>
        <div class="row">
          <div class="col-6">
       <h3 style="color:#f9f5f5;;">Booked Djs Playing On The Event</h3>
     </div>
     </div>
  <div class="row py-3 flex-items-sm-center">
    <!--
User Card
-->@foreach ($bookings as $booking)
    <div class="col-xs-12 col-sm-3 py-2 clearfix">
      <div class="card profile-card">
        <figure>

          <img src="{{ asset('uploads/profile/'.$booking->dj->user->image) }}" class="img1 img-profile" alt="Card image">
        </figure>
        <div class="card-block text-xs-center">
          <p class="h4 card-title font-weight-bold" style="text-align:center;">{{ $booking->dj->user->name }}</p>
          <p class="h6 card-subtitle text-muted" style="text-align:center;">{{ $booking->dj->user->genre }}</p><br>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>



    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-gra my-5 py-4 text-center" style="background-color:#295F4E;">
      <div class="card-body">
        <h4 class="text-white m-0">Below you can see available Dj Roaster.</h4>
      </div>
    </div>

    <!-- Content Row -->
    <div class="container">
    <div class="row">
  		<div class="col-md-4">
      <div class="profile-card-2"><img src="http://envato.jayasankarkr.in/code/profile/assets/img/profile-2.jpg" class="img img-responsive">
          <div><a class="profile-name" href="{{ route('eventmanager.home') }}">JOHN DOE</a></div>
          <div class="profile-username">@johndoesurname</div>

      </div>
  </div>
  <div class="col-md-4">
  <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" class="img img-responsive">
      <div><a class="profile-name" href="{{ route('eventmanager.home') }}">Marry Farrell</a></div>
      <div class="profile-username">@marryfarrell</div>

  </div>
</div>
<div class="col-md-4">
<div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495698960877-fdafa268c67a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80" class="img img-responsive">
    <div><a class="profile-name" href="{{ route('eventmanager.home') }}">Pat Flynn</a></div>
    <div class="profile-username">@patflurname</div>

</div>
</div>
<div class="col-md-4">
<div class="profile-card-2"><img src="https://images.unsplash.com/photo-1499155286265-79a9dc9c6380?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=331&q=80" class="img img-responsive">
    <div><a class="profile-name" href="{{ route('eventmanager.home') }}">Lisa Glyn</a></div>
    <div class="profile-username">@lisaglynurname</div>

</div>
</div>
<div class="col-md-4">
<div class="profile-card-2"><img src="https://images.unsplash.com/photo-1535207010348-71e47296838a?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=332&q=80" class="img img-responsive">
    <div><a class="profile-name" href="{{ route('eventmanager.home') }}">Meggan Fix</a></div>
    <div class="profile-username">@megganfixurname</div>

</div>
</div>
<div class="col-md-4">
<div class="profile-card-2"><img src="https://images.unsplash.com/photo-1509635214689-98ef31ec7e82?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80" class="img img-responsive">
    <div><a class="profile-name" href="{{ route('eventmanager.home') }}">Tom Bond</a></div>
    <div class="profile-username">@bondtomurname</div>

</div>
</div>
  	</div>
    </div>
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->


  <!-- /.container -->
  <a class="top-link hide" href="" id="js-top">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-symmetry-vertical" viewBox="0 0 16 16">
<path d="M7 2.5a.5.5 0 0 0-.939-.24l-6 11A.5.5 0 0 0 .5 14h6a.5.5 0 0 0 .5-.5v-11zm2.376-.485a.5.5 0 0 1 .563.246l6 11A.5.5 0 0 1 15.5 14h-6a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .376-.485zM10 4.461V13h4.658L10 4.46z"/>
</svg>
<i class="bi bi-symmetry-vertical"></i>
</a>

  <!-- Footer -->
  <footer class="bg-light text-center text-lg-start" style="margin-top: 25px;">
  <!-- Copyright -->
  <div class="text-center p-3 text-white" style="background-color:#323232;">
  © 2020 Copyrights Dawid & Tom:
  <a class="text-white" href="{{ route('eventmanager.home') }}">www.MyAgent.com</a>
  </div>
  <!-- Copyright -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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

</body>

</html>

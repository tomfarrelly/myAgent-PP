<!-- Footer -->
<footer class="text-center text-lg-start mm text1" >
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h3 class="text-uppercase text4">MyAgent</h3>

        <p>
          We are a new booking platform which helps to connect
          Dj's with Event managers,by making their lifes much easier
          with the use of our service.
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase createBtn">Menu</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a class="text2" href="{{ route('eventmanager.home') }}">Events</a>
          </li>
          <li>
            <a  class="text2" href="{{ route('eventmanager.page.availableDj') }}">Dj Roaster</a>
          </li>
          <li>
            <a class="text2" href="{{ route('eventmanager.events.create') }}">+ Create Event</a>
          </li>
          <li>
            <a class="text2" href="{{ url('my-profile') }}"class="dropdown-item">
              My Profile
           </a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0 createBtn">Address</h5>

        <ul class="list-unstyled">
          <li>
            <p class="text4">605, RATAN ICON <br>BUILDING<br>SEAWOODS SECTOR</p>
          </li>



        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 text2" style="background-color:#333;">
    © 2020 Copyright:
    <a class="text3" href="#">MyAgent.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

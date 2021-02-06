<!DOCTYPE html>
<html lang="en">

<head>



  <style>



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

<body >



  	<div class="row">
  		<div class="col-md-4">
      <h4 class="text-center"><strong>STYLE 1</strong></h4>
      <hr>
      <div class="profile-card-2"><img src="http://envato.jayasankarkr.in/code/profile/assets/img/profile-2.jpg" class="img img-responsive">
          <div><a class="profile-name" href="{{ route('eventmanager.home') }}">JOHN DOE</a></div>
          <div class="profile-username">@johndoesurname</div>

      </div>
  </div>
  	</div>




</body>

</html>

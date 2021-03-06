<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
    <script src="https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=coords&radius=1500&type=pharmacy&key=YOUR_API_KEY"></script>

    <script type="text/javascript">
      x = navigator.geolocation;
      x.getCurrentPosition(success, failure);
      
      function success(position){
        var myLat=position.coords.latitude;
        var myLong=position.coords.longitude;
        var coords=new google.maps.LatLong(myLat, myLong);
        var mapOptions = {
          zoom = 7,
          center: coords,
          mapTypeId: google.maps.mapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var marker = new google.maps.marker({
          map:map, 
          position:coords
        });
      }
      
      function failure(){}

    </script>
    <title>doctor Login</title>
    <link rel="stylesheet" href="nearbypharmastyle.css">
  </head>

  <body>
    <header>
      <img class="logo" src="img/helloDoctor.png" alt="logo">
      <nav>
        <ul class="nav-links">
		  <li><a href="aboutus.php">About Us</a></li>
          <li><a href="index.php">Home</a></li>
          <li><a href="appointmentList.php">Appointment List</a></li>
		  <li><a href="prescription.php">Prescription</a></li>
          <li><a href="https://video-app-4933-9049-dev.twil.io">Join My Appointment</a></li>
          <li><a href="logout.php">Log Out</a></li>
        </ul>
      </nav>
    </header>

    <div id="map">
	<h1>Doctor Dashboard</h1>
	</div>

    <script>
      function initMap(){

      }
    </script>
  </body>
</html>

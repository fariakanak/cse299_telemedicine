<?php 
					session_start();

					include('config.php');

					if(isset($_POST['logno'])) {
								header("Location: logout.php");
								die();
							}
					
					if(isset($_POST['logyes'])) {
								header("Location: index.php");
								die();
							}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
  <title>Log Out</title>
  <link rel="stylesheet" href="logoutstyle.css">
</head>

<body>
  <header>
    <img class="logo" src="img/helloDoctor.png" alt="logo">
    <nav>
      <ul class="nav-links">
		<li><a href="aboutus.html">About Us</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Appointment</a></li>
		<li><a href="prescription.php">Prescription</a></li>
        <li><a href="nearbypharma.php">Nearby Pharmacies</a></li>
        <li><a href="https://video-app-4933-9049-dev.twil.io">Join My Appointment</a></li>
        <li><a href="logout.php">Log Out</a></li>
      </ul>
    </nav>
  </header>

  <div class="container">
    <div class="btn-container">
      <h2 class='title'>Are you sure you want to log out?</h2>
	  <form method="post">
      <input type="submit" value="No"  name="logno" class="btn1 solid"> 
      <input type="submit" value="Yes" name="logyes"  class="btn2 solid">
	  </form>
    </div>
  </div>

  <script>
    function goLoggedOutHome(e){
      console.log(e);
      e.preventDefault();
      window.open("/index.php", "_self")
    }
    function goLoggedInHome(e){
      console.log(e);
      e.preventDefault();
      window.open("/loggedinhome.php", "_self")
    }
  </script>

</body>




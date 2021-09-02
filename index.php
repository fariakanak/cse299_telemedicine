<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
  <title>Home</title>
  <link rel="stylesheet" href="homestyle.css">
</head>

<body>
  <header>
    <img class="logo" src="img/helloDoctor.png" alt="logo">
    <nav>
      <ul class="nav-links">
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="nearbypharma.php">Nearby Pharmacies</a></li>
        <li><a href="choosereg.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
  </header>
<!-----
  <div class="container">
    <div class="btn-container">
      <h2 class='title'>Healthcare at your doorstep</h2>
      <h3 class='h2-title'>Anytime, Anywhere</h3>
      <form method="POST" action="">
      <input type="submit" value="Create Appointment Now" class="btn solid">
      </form>
    </div>
  </div>
--->
  <div class="slider">
    <div class="slides">
      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">
      <input type="radio" name="radio-btn" id="radio5">
      <input type="radio" name="radio-btn" id="radio6">

      <div class="slide first">
        <img src="img/1.jpg" alt="">
      </div>
      <div class="slide">
        <img src="img/2.jpg" alt="">
      </div>
      <div class="slide">
        <img src="img/3.jpg" alt="">
      </div>
      <div class="slide">
        <img src="img/4.jpg" alt="">
      </div>
      <div class="slide">
        <img src="img/5.jpg" alt="">
      </div>
      <div class="slide">
        <img src="img/6.jpg" alt="">
      </div>

      <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>
        <div class="auto-btn5"></div>
        <div class="auto-btn6"></div>
      </div>

      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
        <label for="radio5" class="manual-btn"></label>
        <label for="radio6" class="manual-btn"></label>
      </div>
    </div>
  </div>

  <script type="text/javascript">
  var counter = 1;
  setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter>6){
      counter = 1;
    }
  }, 5000);
  </script>
</body>
</html>
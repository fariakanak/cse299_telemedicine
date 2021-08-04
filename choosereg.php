<?php 

include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
  <title>Register or Login</title>
  <link rel="stylesheet" href="chooseregstyle.css">
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="login-reg">

        <form action="" class="register-form">
          <h2 class="title">I am a</h2>
          <a href="patreg.php"><input type="submit" value="Patient" class="btn solid"></a>
          <a href="docreg.php"><input type="submit" value="Doctor" class="btn solid"></a>
        </form>
      </div>
    </div>
    <div class="panels-container">
      <div class="panel right-panel">
        <div class="content">
          <h3>Already registered?</h3>
          <p>Please login first!</p>
          <button class="btn transparent" id="login-btn"><a href="login.php">Login</a></button>
        </div>
        <img src="img/login.svg" class="image" alt="">
      </div>
    </div>
  </div>
</body>

</html>
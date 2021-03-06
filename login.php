<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
  <title>Register or Login</title>
  <link rel="stylesheet" href="loginstyle.css">
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="login-reg">


        <form method="post" action="" class="login-form">
          <h2 class="title">Login</h2>
		    <?php 
					session_start();

					include('config.php');

					if(isset($_POST['Login'])) {

						$email=$_POST['email'];
						$password=$_POST['password'];

						$sql = "SELECT * FROM User_Info WHERE email='".$email."' AND password='".$password."' " ;
						//$sql2 = "SELECT [type] FROM User_Info WHERE email='".$email."' AND password='".$password."' " ;
                         
                        $query =  "SELECT * FROM User_Info WHERE email='".$email."' AND password='".$password."' " ;						
						if ($result = $conn->query($sql)) {

							/* fetch object array */
						   $row = $result->fetch_array();

						   if($row>0){

								$_SESSION['Email']=$row[1];
								$type = $row['type'];
                                if($type=='p'){
									header("Location: patientlogged.php");
									die();
								}
								else if($type=='d'){
									header("Location: doctorlogged.php");
									die();
								}
								//header("Location: nearbypharma.php");
								//die();

						   } else {
								echo "Email and Password Not Match";
						   }

						}
				    }


			?>
          <div class="input-field">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Email ID" name="email" required="required">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required="required">
          </div>
		  <button type="submit" name="Login" class="btn solid">Log in.</button>
        </form>

<!-- 
        <form action="" class="register-form">
          <h2 class="title">I am a</h2>
          <input type="submit" value="Patient" class="btn solid">
          <input type="submit" value="Doctor" class="btn solid">
        </form>
 -->	


      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here?</h3>
          <p>Register with us!</p>
          <button class="btn transparent" id="registration-btn"><a href="choosereg.php">Register</a></button>
        </div>
        <img src="img/register.svg" class="image" alt="">
      </div>
<!------
      <div class="panel right-panel">
        <div class="content">
          <h3>Already registered?</h3>
          <p>Please login first!</p>
          <button class="btn transparent" id="login-btn">Login</button>
        </div>
		
        <img src="img/login.svg" class="image" alt="">
		-->
      </div>
    </div>

  </div>

  <script src="app.js"></script>
</body>

</html>
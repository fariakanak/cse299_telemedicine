<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
  <title>Registration for Patients</title>
  <link rel="stylesheet" href="patregstyle.css">
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="login-reg">

        <form method="post" action="" class="register-form">
          <h2 class="title">Registration for Patients</h2>
		  <?php 

				include('config.php');


				if(isset($_POST['submit'])) {

					$firstname=$_POST['firstname'];
					$lastname=$_POST['lastname'];
					$dob=$_POST['dob'];
					$email=$_POST['email'];
					$password=$_POST['password'];

					// foor year 
					//$day=$_POST['day'];
					//$month=$_POST['month'];
					//$year=$_POST['year'];

						//$dateofBirth=$year.'-'.$month.'-'.$day;

					//$dateof=date($dateofBirth);
					//$present_address=$_POST['present_address'];
					//$permanent_address=$_POST['permanent_address'];

					// image file 

					//$target_dir = "images/";
					//$target_file = $target_dir . basename($_FILES["image_path"]["name"]);

					$sql = "INSERT INTO patient VALUES ('','".$firstname."','".$lastname."','".$email."','".$password."','".$dob."')";
					$sql2 = "INSERT INTO user_info VALUES ('','".$email."','".$password."','p')";
				if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {
					echo "New patient record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}

				}


			?>
          <div class="input-field">
            <i class="fa fa-user"></i>
            <input type="text" name="firstname" placeholder="First Name" required>
          </div>
          <div class="input-field">
            <i class="fa fa-user"></i>
            <input type="text" name="lastname" placeholder="Last Name" required>
          </div>
          <div class="input-field">
            <i class="fa fa-calendar"></i>
            <input type="text" name="dob" placeholder="Date of Birth (yyyy-MM-dd)" value=""
            min="1930-01-01" required>
          </div>
          <div class="input-field">
            <i class="fa fa-envelope"></i>
            <input type="text" name="email" placeholder="Email ID" required>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
          </div>
          <input type="submit" name="submit" value="Register" class="btn solid">
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <img src="img/patreg.svg" class="image" alt="">
      </div>
    </div>
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
  <title>Registration for Doctors</title>
  <link rel="stylesheet" href="docregstyle.css">
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="login-reg">
        <form method="post" action="" class="register-form">
          <h2 class="title">Registration for Doctors</h2>
		  <?php 
				include('config.php');


				if(isset($_POST['submit'])) {

					$firstname=$_POST['firstname'];
					$lastname=$_POST['lastname'];
					$Edu_Level=$_POST['Edu_Level'];
					$Bmdc_Reg_No=$_POST['Bmdc_Reg_No'];
					$dob=$_POST['DOB'];
					$contact=$_POST['contact'];
					$email=$_POST['email'];
					$password=$_POST['password'];
					$fee=$_POST['fee'];
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

					$sql = "INSERT INTO doctor VALUES ('','".$firstname."','".$lastname."','".$Edu_Level."','".$Bmdc_Reg_No."','".$dob."','".$contact."','".$email."','".$password."','0')";   //,'".$fee."'
					$sql2 = "INSERT INTO user_info VALUES ('','".$email."','".$password."','d')";
				if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {
					echo "New doctor record created successfully";
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
            <input type="text" name="DOB" placeholder="Date of Birth (yyyy-MM-dd)" value=""
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
          <div class="input-field">
            <i class="fa fa-registered"></i>
            <input type="number" name="Bmdc_Reg_No" placeholder="BMDC Registration No" required>
          </div>
          <div class="input-field">
            <i class="fa fa-pen"></i>
            <input type="text" name="Edu_Level" placeholder="Education Level" required>
          </div>
          <div class="input-field">
            <i class="fa fa-mobile"></i>
            <input type="tel" name="contact" placeholder="Contact No" required>
          </div>
          <div class="input-field">
            <i class="fa fa-dollar-sign"></i>
            <input type="number" name="fee" min= 0 max="1000" placeholder="Charge per session" required>
          </div>
          <input type="submit" name="submit" value="Register" class="btn solid">
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <img src="img/docreg.svg" class="image" alt="">
      </div>
    </div>

  </div>
</body>
</html>
<?php 
					session_start();

					include('config.php');

           
           ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
  
  <title>Appointment</title>
  <link rel="stylesheet" href="appointmentstyle.css">


</head>

<body>
<header>
    <img class="logo" src="img/helloDoctor.png" alt="logo">
    <nav>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="appointment.html">Appointment</a></li>
        <li><a href="#">Nearby Pharmacies</a></li>
        <li><a href="#">Log Out</a></li>
      </ul>
    </nav>
  </header>



  <div class="container">
    <div class="forms-container">
      <div class="appointment-login">


        <form action="" method="POST" class="appointment-form">
          <h2 class="title">Appointment Here</h2>

          <div class="input-field">
            <i class="fa fa-email"></i>
            <input type="text" placeholder="email id" required name="email">
          </div>
    
            <select id="option" class="input-field" required name="D_ID">
                    <option value="0" >---select doctor---</option>
                    
                      
                     <!-- read all doctor name from the database and print them also value set by thier ids ---- start -->
                     
                    <?php 

                        $query = "SELECT * FROM doctor  ORDER BY D_FirstName ASC";

                        $read_doctor = mysqli_query($conn,$query);

                        while($row = mysqli_fetch_assoc($read_doctor))
                        {
                           $D_ID        = $row['D_ID'];
                           $D_FirstName =$row['D_FirstName'];
                           $D_LastName =$row['D_LastName'];



                           // print catagories names 
                           ?>

                            <option value="<?php echo $D_ID; ?>"><?php echo $D_FirstName ?> <?php echo $D_LastName;  ?></option>

                            <?php      
                          }
                      ?>
                      <!-- read all doctor name from the database and print them also value set by thier ids ---- end  -->

                  
             </select>
                                       
             <div class="input-field">
                   <i class="fa fa-calendar-check"></i>
                   <input id="dat" type="datetime-local" placeholder="Appointment date"  name="App_Date">
              </div>
                                   
              <input type="submit" value="Appointment" class="btn solid" name="appointment">
          </form>

      <!-- php start-- for sending and adding data into database   --> 
    <?php
         
         if(isset($_POST['appointment']))
         {  
            // get patiend email
            $patient_email = mysqli_real_escape_string($conn,$_POST['email']); 

            // seach patient from patient table and store patient id 
            $patient_id_query = "SELECT * FROM patient WHERE Email='$patient_email'";

                      $patient_id_data = mysqli_query($conn,$patient_id_query);

                      while($row = mysqli_fetch_assoc($patient_id_data))
                      {
                                 $P_ID          = $row['P_ID'];
                                 $P_FirstName   = $row['P_FirstName'];
                                 $P_LastName    =$row['P_LastName'];
                                 $Password      =$row['Password'];
                                 $DOB           =$row['DOB'];

                      }

              // get doctor id
              $D_ID =  $_POST['D_ID']; 

                   

                 $App_Date  =$_POST['App_Date'];

                 

              
               $appoint_query  = "INSERT INTO appointment (P_ID,D_ID,App_Date) VALUES ('$P_ID','$D_ID','$App_Date')";

               $appointment_data = mysqli_query($conn,$appoint_query);

               if($appointment_data)
               {
                 ?>
                   <span class="alert alert-success">Thank you for your appointment.Wait for Doctor Approval. </span>
                 <?php 
               }
               else
               {
                die("REGISTRATION FAILED" . mysqli_error($connect));
               }
               
             
         }    


    ?>
   <!-- php end -- for sending and adding data into database   -->

      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <img src="img/docreg.svg" class="image" alt="">
      </div>
    </div>
</div>



<script src="js/jquery-3.6.0.min.js"> </script>
<script src="js/popper.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
<script src="js/bootstrap-datepicker.js"> </script>

</body>
</html>
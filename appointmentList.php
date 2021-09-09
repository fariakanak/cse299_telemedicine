 <?php 

 include "config.php";



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
  
  <title>Doctor's list</title>
  <link rel="stylesheet" href="doctorliststyle.css">


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
<div class="wrapper">
  <div class="links">
    <ul>
      <li class="li-list active" data-view="list-view">
      <i class="fa fa-user"></i>Appointment  list</li>
     

    </ul>
  </div>

  <!-- doctor list start  -->
       
            <div class="catagories-table2">
                  <table >
                     <thead>
                        <tr>
                           <th scope="col">#Sl</th>  
                           <th scope="col">Patient Name</th>
                           <th scope="col">Doctor Name</th>
                           <th scope="col">Appointment Date</th>
                           <th scope="col">Action</th>      
                        </tr>
                     </thead>
                     <tbody>

                      <!-- php for reading all appointment from database  -->
                      <?php 
                             //this is query 
                             $query ="SELECT * FROM appointment";
                             //here query run into $conn  database and store data into $all_user_information.
                             $all_appointment_infromation = mysqli_query($conn,$query);

                             $i=0;

                             while( $row = mysqli_fetch_assoc($all_appointment_infromation))
                             {
                               $P_ID     = $row['P_ID'];
                               $D_ID   = $row['D_ID'];
                               $App_Date   = $row['App_Date'];
                               $i++;
                               ?>

                                 <tr>
                                     <th scope="row"><?php echo $i; ?></th>
                                     <th scope="row">
                                      <!-- search patient from the specialize database  -->

                                        <?php

                                            $query = "SELECT * FROM patient WHERE P_ID='$P_ID'";

                                            $patient_name = mysqli_query($conn,$query);

                                            while($row = mysqli_fetch_array($patient_name))
                                            {
                                              $P_FirstName = $row['P_FirstName'];

                                              echo $P_FirstName;

                                            }


                                        ?>
                                      
                                     </th>
                                     <th scope="row">
                                      <!-- search doctor from the specialize database  -->

                                        <?php

                                            $query = "SELECT * FROM doctor WHERE D_ID ='$D_ID '";

                                            $doctor_name = mysqli_query($conn,$query);

                                            while($row = mysqli_fetch_array($doctor_name))
                                            {
                                              $D_FirstName = $row['D_FirstName'];
                                              $D_LastName = $row['D_LastName'];


                                              echo $D_FirstName . $D_LastName;

                                            }


                                        ?>
                                      
                                     </th>
                                     <th scope="row"><?php echo $App_Date; ?></th>

                                      
                                      

                                     <th scope="row">
                                      <div class="catagory-action">
                                        <ul>
		                                    <li>
		                                       <a   class="accept"   > Accept</a>
		                                    </li>
		                                    <li>
		                                       <a   class="reject"   > Reject </a>
		                                    </li>
                                         </ul>
                                        </div>
                                     </th>
                                     
                                 </tr>

                             <?php
                             }
                              
                      ?>

                     </tbody>
                  </table>
               </div>  



   <!-- doctor list end  -->
</div>


</body>
</html>

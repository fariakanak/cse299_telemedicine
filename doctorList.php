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
        <li><a href="#">Home</a></li>
        <li><a href="#">Appointment</a></li>
        <li><a href="#">Nearby Pharmacies</a></li>
        <li><a href="#">Log Out</a></li>
      </ul>
    </nav>
  </header>
<div class="wrapper">
  <div class="links">
    <ul>
      <li class="li-list active" data-view="list-view">
      <i class="fa fa-user"></i>Doctor's list</li>
     

    </ul>
  </div>

  <!-- doctor list start  -->
       
            <div class="catagories-table">
                  <table >
                     <thead>
                        <tr>
                           <th scope="col">#Sl</th>  
                           <th scope="col">First Name</th>
                           <th scope="col">Last Name</th>
                           <th scope="col">Education Level</th>
                           <th scope="col">BMDC  REG.NO </th>
                           <th scope="col">Contact No</th>
                           <th scope="col">Email</th> 
                           <th scope="col">Specialization</th>
                        </tr>
                     </thead>
                     <tbody>

                      <!-- php for reading all doctor from database  -->
                      <?php 
                             //this is query 
                             $query ="SELECT * FROM doctor";
                             //here query run into $conn  database and store data into $all_user_information.
                             $all_doctor_infromation = mysqli_query($conn,$query);

                             $i=0;

                             while( $row = mysqli_fetch_assoc($all_doctor_infromation))
                             {
                               $D_FirstName     = $row['D_FirstName'];
                               $D_LastName   = $row['D_LastName'];
                               $Edu_Level   = $row['Edu_Level'];
                               $Bmdc_Reg_No       = $row['Bmdc_Reg_No'];
                               $Contact_No    = $row['Contact_No'];
                               $Email       = $row['Email'];
                               $Spec_ID     = $row['Spec_ID'];
                               $i++;
                               ?>

                                 <tr>
                                     <th scope="row"><?php echo $i; ?></th>
                                     <th scope="row"><?php echo $D_FirstName; ?></th>
                                     <th scope="row"><?php echo $D_LastName; ?></th>
                                     <th scope="row"><?php echo $Edu_Level; ?></th>
                                     <th scope="row"><?php echo $Bmdc_Reg_No; ?></th>
                                     <th scope="row"><?php echo $Contact_No; ?></th>
                                     <th scope="row"><?php echo $Email; ?></th>
                                     

                                     <th scope="row">
                                      <!-- search specialization from the specialize database  -->

                                        <?php

                                            $query = "SELECT * FROM specialization WHERE Spc_ID='$Spec_ID'";

                                            $spec_name = mysqli_query($conn,$query);

                                            while($row = mysqli_fetch_array($spec_name))
                                            {
                                              $Spc_Name = $row['Spc_Name'];

                                              echo $Spc_Name;

                                            }


                                        ?>
                                      
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

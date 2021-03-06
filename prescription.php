<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
  <title>Prescription</title>
  <link rel="stylesheet" href="prescription.css">
</head>

<body>
  <header>
    <img class="logo" src="img/helloDoctor.png" alt="logo">
    <nav>
      <ul class="nav-links">
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Appointment</a></li>
        <li><a href="prescription.php">Prescription</a></li>
        <li><a href="nearbypharma.php">Nearby Pharmacies</a></li>
        <li><a href="https://video-app-4933-9049-dev.twil.io">Join My Appointment</a></li>
        <li><a href="logout.php">Log Out</a></li>
      </ul>
    </nav>
  </header>

      <div class="prescription">
        <form>
          <div class="row">
            <div class="input-field">
              <input type="text" id="Name of the Patient" required>
              <label for="Name of the Patient"> <i class="fa fa-user"></i> Name of the Patient</label>
            </div>
            <div class="input-field">
              <input type="number" id="Contact No of the Patient" required>
              <label for="Contact No of the Patient"><i class="fa fa-mobile"></i> Contact No of the Patient (01XXXXXXXXX)</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field">
              <input type="text" id="Prescribed by" required>
              <label for="Prescribed by"> <i class="fa fa-user"></i> Prescribed by</label>
            </div>
            <div class="input-field">
              <input type="text" id="Field of Practice" required>
              <label for="Field of Practice"><i class="fa fa-plus-square"></i> Field of Practice</label>
            </div>
          </div>
          <div class="input-field">
            <textarea id="Prescription" rows="10" required></textarea>
            <label for="Prescription"><i class="fa fa-prescription"></i> Prescription</label>
          </div>
          <div class="input-field">
            <textarea id="Suggestions" rows="10" required></textarea>
            <label for="Suggestions"> <i class="fa fa-notes-medical"></i> Suggestions (Write N/A if not applicable)</label>
          </div>
          <input type="submit" value="Prescribe" class="btn solid">
        </form>
      </div>
</body>
</html>
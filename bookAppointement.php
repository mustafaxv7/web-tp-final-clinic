<?php
    include("bdd.php");
    include("makeAnAppointement.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg" sizes="32x32" href="./assets/img/header/logo.svg">
    <link rel="stylesheet" href="css/bookAppointement.css">
    <title>Insove | Book An Appointement Now</title>
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="mainlogo">
                <img src="./assets/img/doctors/doctor-logo3.png" alt="doctor logo">
            </div>
            <div class="aboutUs">
                <h1>Book an Appointment</h1>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="input-box">
                        <input type="text"  placeholder="Fullname" name="fullname" required>
                        <i class='bx bxs-user'></i>
                    </div>
                    <select name="Service" id="service">
                        <option>Service</option>
                        <option value="General Checkup">General Checkup</option>
                        <option value="Dental">Dental</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="Orthopedic">Orthopedic</option>
                        <option value="Neurology">Neurology</option>
                        <option value="Gynecology">Gynecology</option>
                    </select>
                    <select name="Doctor"  id="doctor" required>
                        <option>Doctor</option>
                        <option value="Dr. Rajesh Patel">Dr. Rajesh Patel</option>
                        <option value="Dr. Emily Williams">Dr. Emily Williams</option>
                        <option value="Dr. Samuel O'Connor">Dr. Samuel O'Connor</option>
                        <option value="Dr. Benjamin Lee">Dr. Benjamin Lee</option>
                        <option value="Dr. Daniel Rodriguez">Dr. Daniel Rodriguez</option>
                        <option value="Dr. john sam">Dr. john sam</option>
                    </select>
                    <input type="date" placeholder="Date" name="date" id="date" required>
                    
                    <button type="submit" class="bookappointement" name= "bookNow">Book Now</button>
                    <div class="return-home">
                        <i class='bx bxs-hand-left'></i>
                        <a href="./index.php">Return Home</a>
                    </div>
                    
          </div>
    </div>
    </main>
</body>
</html>
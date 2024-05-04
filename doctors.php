<?php
    include("bdd.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/doctors.css">
    <link rel="icon" type="image/svg" sizes="32x32" href="./assets/img/header/logo.svg">
    <title>Insove | Doctors</title>
</head>
<body>
    <header>
        <a href="./index.php" class= "logo" ><img  src= "./assets/img/header/logo.svg" alt="clinc's logo"></a>
        <nav>
            <ul>
                <li><a class="navLink" href="./index.php">Home</a></li>
                <li><a class="navLink" href="./doctors.php">Doctors</a></li>
                <li><a class="navLink" href="./aboutus.php">About Us</a></li>
                <li><a class="navLink" href="./contact.php">Contact</a></li>
            </ul>
        </nav>
        <a href="./login.php" class="login-button">Log In</a>
    </header>
    <main>
        <article class="doctor-card">
            <img src="./assets/img/doctors/doctor1.jpg" alt="doctor Dr. Rajesh Patel">
            <h3>Dr. Rajesh Patel</h3>
            <strong>Gastroenterology</strong>
            <a class="book-button"  href="./bookAppointement.php">Book Now</a>
        </article>
        <article class="doctor-card">
            <img src="./assets/img/doctors/doctor2.png" alt="Dr. Emily Williams">
            <h3>Dr. Emily Williams</h3>
            <strong>Radiology</strong>
            <a class="book-button"  href="./bookAppointement.php">Book Now</a>
        </article>
        <article class="doctor-card">
            <img src="./assets/img/doctors/doctor3.png" alt="Dr. Samuel O'Connor">
            <h3>Dr. Samuel O'Connor</h3>
            <strong>Dermatology</strong>
            <a class="book-button"  href="./bookAppointement.php">Book Now</a>
        </article>
        <article class="doctor-card">
            <img src="./assets/img/doctors/doctor4.png" alt="Dr. Benjamin Lee">
            <h3>Dr. Benjamin Lee</h3>
            <strong>Cardiology</strong>
            <a class="book-button"  href="./bookAppointement.php">Book Now</a>
        </article>
        <article class="doctor-card">
            <img src="./assets/img/doctors/doctor5.png" alt="Dr. Daniel Rodriguez">
            <h3>Dr. Daniel Rodriguez</h3>
            <strong>Infectious Diseases</strong>
            <a class="book-button"  href="./bookAppointement.php">Book Now</a>
        </article>
        <article class="doctor-card">
            <img src="./assets/img/doctors/doctor6.jpg" alt="Dr. john sam">
            <h3>Dr. john sam</h3>
            <strong>Radiology</strong>
            <a class="book-button" href="./bookAppointement.php">Book Now</a>
        </article>
        <article class="doctor-card">
            <img src="./assets/img/team/doctor-1.png" alt="Dr.Lesilie Taylor">
            <h3>Dr.Lesilie Taylor</h3>
            <strong>Pediatrician</strong>
            <a class="book-button" href="./bookAppointement.php">Book Now</a>
        </article>
        <article class="doctor-card">
            <img src="./assets/img/team/doctor-2.png"alt="Dr. john sam">
            <h3>Dr.Zachary Brown</h3>
            <strong>Cardiologist</strong>
            <a class="book-button" href="./bookAppointement.php">Book Now</a>
        </article>
    </main>
    <footer>
        <p> &copy; 2024 Insove - All rights reserved</p>
    </footer>
</body>
</html>
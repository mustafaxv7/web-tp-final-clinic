<?php
    include("bdd.php");
    include("ajouter_patient.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/registeration.css">
    <link rel="icon" type="image/svg" sizes="32x32" href="./assets/img/header/logo.svg">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Insove | Registration Page</title>
</head>
<body>
    <div id="RegistrationCard">
        <a href="./index.php" class= "logo" ><img  src= "./assets/img/header/logo.svg" alt="clinc's logo"></a>        
        <h1>Registration Form</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
           <div class="input-box">
                 <input type="text"  placeholder="Matricule" name="matricule" required>
                 <i class='bx bx-id-card'></i>
            </div>
            <div class="input-box">
                 <input type="text"  placeholder="Fullname" name="fullname" required>
                 <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" placeholder="Email"  name="email" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Phone" name="phone" required>
                <i class='bx bxs-phone'></i>
            </div>
            <div class="input-box">
                 <input type="password" placeholder="Password" name="password" required>
                 <i class='bx bxs-lock-alt' ></i>
            </div>

            <button type="submit" class="submit-button" name= "signup">Sign Up</button>
            <div class="login-link">
                <p>Already have an account? <a href="./login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>

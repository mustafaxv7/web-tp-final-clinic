<?php
    include("bdd.php");
    include("loginAuth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="icon" type="image/svg" sizes="32x32" href="./assets/img/header/logo.svg">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Insove | Login Page</title>
</head>
<body>
    <div id="loginCard">
        <a href="./index.php" class= "logo" ><img  src= "./assets/img/header/logo.svg" alt="clinc's logo"></a> 
        <h1>Login</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method ="post">
            <div class="input-box">
                 <input type="text" name="username" placeholder="Username" required>
                 <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                 <input type="password" name="password" placeholder="Password" required>
                 <i class='bx bxs-lock-alt' ></i>
            </div>

            <button type="submit" class="submit-button">Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="./registeration.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>




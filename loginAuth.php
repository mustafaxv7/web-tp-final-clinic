<?php
include("bdd.php");  
session_start();  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM Admin WHERE username = ? AND admin_password = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = mysqli_fetch_assoc($result);
    if ($result->num_rows == 1) {
        
        if($row['username'] == $username && $row['admin_password'] == $password){
          $_SESSION['admin_password'] = $password;
          $_SESSION['username'] = $username;
          header('Location: ./adminBoard.php');
        }else{
          echo "<script> alert(Login failed)</script>";
        }
         
    } else {
        header('Location: ./login.php?error=Invalid credentials');
    }
}
?>



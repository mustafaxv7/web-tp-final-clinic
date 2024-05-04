<?php
  include("bdd.php");
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['signup'])){
      $matricule = filter_input(INPUT_POST, 'matricule', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_VALIDATE_INT);
      $fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS , FILTER_VALIDATE_EMAIL);
      $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_VALIDATE_INT);
      $password = $_POST['password'];
      if (!is_string($fullname)) {
          echo "<script>alert('Please enter a valid data')</script>";
      }else {
          $hashed_password = password_hash($password, PASSWORD_DEFAULT);
          $query = "INSERT INTO Patient (matricule,fullname,email,phone,user_password) VALUES ('$matricule','$fullname','$email','$phone', '$hashed_password')";
          try{
              $result = mysqli_query($connection, $query);
              if($result){
                  echo"<script>alert('User registration successful')</script>";
              }else{
                  echo "<script>alert('User registration failed')</script>";
              }
          }catch(mysqli_sql_exception){
              echo "<script>alert('User registration failed')</script>";
          }
      }
      
    }else {
          echo "<script>alert('Please submit your data')</script>";
    }
 }
 mysqli_close($connection);
?>
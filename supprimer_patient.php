<?php
    include("bdd.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['delete'])){
           
            $matricule = filter_input(INPUT_POST, 'matricule', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_VALIDATE_INT);
            $sql = "DELETE FROM Patient WHERE matricule='$matricule'";
        
            if ($connection->query($sql) === TRUE) {
                echo "<script>alert('Patient Deleted succesfully')</script>";
                header("Location: adminBoard.php");
                exit;
            } else {
                echo "<script>alert('NO Patien with this name ')</script>";
            }
        }
    }
    mysqli_close($connection);
?>
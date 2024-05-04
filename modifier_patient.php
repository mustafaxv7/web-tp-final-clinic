<?php
    include("bdd.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST['modify'])){
            $matricule = filter_input(INPUT_POST, 'matricule', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_VALIDATE_INT);
            $fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS , FILTER_VALIDATE_EMAIL);
            $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_VALIDATE_INT);
        
            $query = "UPDATE Patient SET fullname='$fullname', email='$email', phone='$phone' WHERE matricule= '$matricule'";
            $result = mysqli_query($connection, $query);
            if ($result === TRUE) {
                echo "Informations of patient modified succesfully";
                header("Location: adminBoard.php");
                exit;
            } else {
                echo "Erreur occured during process!";
            }
        }
    }
    mysqli_close($connection);
?>
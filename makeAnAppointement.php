<?php
    include("bdd.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['bookNow'])){
            
            $service = $_POST['Service'];
            $doctor = $_POST['Doctor'];
            $appointement_date = $_POST['date'];

            if (!is_string($service)) {
                echo "<script>alert('Please enter a valid data')</script>";
            }else {
                $query = "INSERT INTO Appoinetements (service_name, doctor_name, appointement_time) VALUES ('$service', '$doctor', '$appointement_date')";
                try{
                    $result = mysqli_query($connection, $query);
                    if($result){
                        echo"<script>alert('Appointement booked successful')</script>";
                    }else{
                        echo "<script>alert('Appointement booking failed')</script>";
                    }
                }catch(mysqli_sql_exception){
                    echo "<script>alert('Appointement booking failed')</script>";
                }
            }
        }else {
            echo "<script>alert('Please submit your data')</script>";
        }
    }
    mysqli_close($connection);
?>
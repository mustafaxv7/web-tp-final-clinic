<?php
    include("bdd.php");
    $query = "SELECT matricule, fullname, COUNT(matricule) AS appointement FROM patient  LEFT JOIN appointement ON matricule = matricule GROUP BY matricule ORDER BY appointement DESC";
    $result = mysqli_query($connection,$query);
    mysqli_close($connection);   
?>
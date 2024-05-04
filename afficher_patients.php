<?php
    include("bdd.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $query = "SELECT * FROM Patient";
        $result = mysqli_query($connection,$query);
    
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tbody>";
                echo "<tr>";
                echo "<td>". $row['patient_id']. "</td>";
                echo "<td>". $row['fullname']. "</td>";
                echo "<td>". $row['matricule']. "</td>";
                echo "<td>". $row['email']. "</td>";
                echo "<td>". $row['phone']. "</td>";
                echo "<td>". $row['registration_date']. "</td>";
                echo "</tr>";
                echo "</tbody>";
            }
        } else {
            echo "Aucun rendez-vous trouvé";
        }
    }
    mysqli_close($connection);
?>
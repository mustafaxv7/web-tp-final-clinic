<?php
    include("bdd.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $query = "SELECT * FROM Appointements";
        $result = mysqli_query($connection,$query);
    
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tbody>";
                echo "<tr>";
                echo "<td>". $row['appointement_id']. "</td>";
                echo "<td>". $row['service_name']. "</td>";
                echo "<td>". $row['doctor_name']. "</td>";
                echo "<td>". $row['appointement_time']. "</td>";
                echo "</tr>";
                echo "</tbody>";
            }
        } else {
            echo "Aucun rendez-vous trouvé";
        }
    }
    mysqli_close($connection);
?>
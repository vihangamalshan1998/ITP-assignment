<?php
$id = $_GET['Id'];

include ('config.php');

include ('config.php');
        $sql= "SELECT * FROM supplier";
        $results=$con->query($sql);
        if ($results -> num_rows > 0) {
            while($row = $results -> fetch_assoc()) {
                $id = $row['id'];
                $name = $row['name'];
            }
        }
        else {
            echo "Error"
        }
?>

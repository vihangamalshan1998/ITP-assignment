<?php
    include '../../config.php';

    $sql = "SELECT * FROM reservation WHERE Status='Pending'";
    $result = $con->query($sql);
    echo $result->num_rows;
?>
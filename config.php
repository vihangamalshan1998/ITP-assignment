<?php
    $con = new mysqli("localhost","root","","dbrentacar");

    if($con->connect_error)
    {
        die("Connection failed:".$con->connect_error);
        //echo"Unable to connect to the database";
        echo"<script>alert('Unable to connect to the database');</script>";
        //echo"<script>alert('Sory Try Again')</script>";
    }
    else
    {
       // echo"<script>alert('Successful')</script>";
        //echo"Successfully connect to the database";
    }
?>
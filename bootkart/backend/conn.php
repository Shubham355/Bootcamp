<?php 
    $conn = mysqli_connect("localhost","root","","bootkart");
    if ($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }

?>
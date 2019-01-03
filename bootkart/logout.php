<?php 
    session_start();
    session_destroy();
    echo "Successfully logged out";
    header("Refresh:1; url=index.php");

?>
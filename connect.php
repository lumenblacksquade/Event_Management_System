<?php

    $conn=new mysqli('localhost','root','Sriram@2002','ems');

    if(!$conn)
    {
        die(mysqli_error($conn));
    }
    else{
        echo 'Connection Successful...';
    }

?>
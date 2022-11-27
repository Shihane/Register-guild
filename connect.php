<?php
    $Nick name = $_POST['Nick name'];
    $WA/instagram = $_POST['WA/instagram']

    //database connection
    $conn = new mysqli('localhost','root','','formregistrasi');
    if($conn->connect_error){
        die('connection failed  :   '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into formregistrasi(Nick name, WA/instagram)
            values(?, ?)");
        $stmt->bind_param("ss",$Nick name, $WA/instagram);
        $stmt->execute();
        echo "registration SUccessfully.....";
        $stmt->close();
        $stmt->close();
    }
    ?>
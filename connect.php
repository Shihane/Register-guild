<?php
    $Nickname = $_POST['Nick name'];
    $WA/instagram = $_POST['WA/instagram']

    //database connection
    $conn = new mysqli('localhost','root','','formregistrasi');
    if($conn->connect_error){
        die('connection failed  :   '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into formregistrasi(Nickname, WA/instagram)
            values(?, ?)");
        $stmt->bind_param("ss",$Nickname, $WA/instagram);
        $stmt->execute();
        echo "registration SUccessfully.....";
        $stmt->close();
        $stmt->close();
    }
    ?>

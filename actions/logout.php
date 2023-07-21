<?php 
    session_start();
    unset($_SESSION['name']);
    // session_destory();
     // data should not be insert into database
     $msg = "Thanks For Using Us";
     // header is use for redirect proccess from on link to another ..
     header('Location:../index.php?error='.$msg);
?>
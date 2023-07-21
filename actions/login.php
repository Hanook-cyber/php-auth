<?php 
    $email = $_POST['email']; // for email ..
    $password = $_POST['password']; // password
    include('cn.php'); // connection file ..
    $query = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($cn,$query) or die('Cant Run query');
    $row = mysqli_num_rows($result);
    if($row > 0){ // mistake
        session_start();
        $name = mysqli_fetch_array($result);
        $_SESSION['name'] = $name['name'];
        header('location:../home.php');
    } else {
          // data should not be insert into database
          $msg = "Try Again, Please";
          // header is use for redirect proccess from on link to another ..
          header('Location:../index.php?error='.$msg);
    }
?>
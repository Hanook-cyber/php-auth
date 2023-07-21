<?php 
    $name = $_POST['name']; // name
    $email = $_POST['email']; // email 
    $password = $_POST['password']; // password
    $cpassword = $_POST['cpassword']; // confrim password
    //echo $name.' '.$email.' '.$password.' '.$cpassword;
    include('cn.php');
       // if condition ..
    if($password == $cpassword){
        // data should be insert into database
        // comparison operator ==
        // AND (When both ae true) , OR (Any one will be true) , NOt ()
          $q = "SELECT * FROM `users` WHERE email='$email'";
          $result = mysqli_query($cn,$q) or die('Cant run query'.mysqli_error($cn));
          $row = mysqli_num_rows($result);
          if($row > 0){
                  // data should not be insert into database
                $msg = "This Email Is Already Exist";
                // header is use for redirect proccess from on link to another ..
                header('Location:../register.php?error='.$msg);
          } else {
               $query = "INSERT INTO `users`(name,email,password) VALUES('$name','$email','$password')";
               mysqli_query($cn,$query) or die('Cant Insert Data'.mysqli_error($cn));
               $msg = "Thanks For Sign Up";
               header('Location:../index.php?msg='.$msg);
          }
    } else {
        // data should not be insert into database
        $msg = "Password is not matched";
        // header is use for redirect proccess from on link to another ..
        header('Location:../register.php?error='.$msg);
    }
?>
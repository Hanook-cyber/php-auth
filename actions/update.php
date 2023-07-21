<?php 
    $id = $_GET['id']; // id here
    $name = $_POST['name']; // name
    $email = $_POST['email']; // email 
    $password = $_POST['password']; // password
     //echo $name.' '.$email.' '.$password.' '.$cpassword;
     include('cn.php');
     $query = "UPDATE `users` SET name='$name' , email='$email' , password='$password' WHERE id='$id'";
    mysqli_query($cn,$query) or die('Cant Connect With Db and query');
    $msg = $name.' data updated successfully';
    header('Location:../home.php?msg='.$msg);
?>
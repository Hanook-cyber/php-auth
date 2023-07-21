<?php 
    $id = $_GET['id'];
    include('cn.php'); // connection file
    $query = "DELETE FROM `users` WHERE id='$id'";
    mysqli_query($cn,$query) or die('Cant run Query');
    $msg = "User Deleted Successfully";
    header('Location:../home.php?error='.$msg);
?>
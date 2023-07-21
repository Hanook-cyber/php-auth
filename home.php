<?php 
    include('actions/header.php'); // header  
    if (empty($_SESSION['name'])){
        // data should not be insert into database
        $msg = "Please Login First";
        // header is use for redirect proccess from on link to another ..
        header('Location:index.php?error='.$msg);
    }
    include('actions/cn.php');
    $query = "SELECT * FROM `users` ORDER BY `id` DESC ";
    $result = mysqli_query($cn,$query) or die('Cant Run Query');
?>
<div class="container">
   <div class="card mt-5">
   <?php include('flash.php'); // for alerts ?>
        <div class="card-header">
            Welcome to <?php echo $_SESSION['name']; ?>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                <?php while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">
                            <button class="btn btn-success"><i class="fa fa-edit"></i></button>
                        </a>
                        <a href="actions/delete.php?id=<?php echo $row['id']; ?>">
                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </a>
                    </td>
                </tr>
                <?php
                } ?>
            </table>
        </div>
   </div>
</div>
<?php include('actions/footer.php'); // footer  ?>

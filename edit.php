<!-- eruieu -->
<?php 
    include('actions/header.php'); // header  
    $id = $_GET['id']; // id ..
    include('actions/cn.php');
    $query = "SELECT * FROM `users` WHERE id='$id'"; // query..
    $result = mysqli_query($cn,$query) or die('Query is not working'); // result ..
    $row = mysqli_fetch_array($result);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
             <?php include('flash.php'); // for alerts ?>
            <form action="actions/update.php?id=<?php echo $row['id']; ?>" method="post">
                <div class="card mt-3">
                    <div class="card-header">
                        Edit Here
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" /> 
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control" /> 
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" value="<?php echo $row['password']; ?>" class="form-control" /> 
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success float-right">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('actions/footer.php'); // footer  ?>

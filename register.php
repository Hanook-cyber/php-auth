<?php include('actions/header.php'); // header  ?>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
             <?php include('flash.php'); // for alerts ?>
            <form action="actions/regitser.php" method="post">
                <div class="card mt-3">
                    <div class="card-header">
                        Regitser Here
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" /> 
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" /> 
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" /> 
                        </div>
                        <div class="form-group">
                            <label for="">Confrim Password</label>
                            <input type="password" name="cpassword" class="form-control" /> 
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-danger float-right">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('actions/footer.php'); // footer  ?>

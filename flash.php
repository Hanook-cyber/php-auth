<?php if(!empty($_GET['msg'])){
            ?>
<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
    <strong>Happy!</strong> <?php echo $_GET['msg']; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php
} ?>
<?php if(!empty($_GET['error'])){
?>
<div class="alert alert-danger">
    <?php echo $_GET['error']; ?>
</div>
<?php 
}
?>
<?php
require_once '../helpers/config.php';
require_once($base_path.'helpers/users.php');
protect();
require_once $base_path . 'helpers/categories.php';
if(isset($_POST['name'])){
    $name=$_POST['name'];
    if(addCategory($name)){
        header('Location:'.$base_url.'admin/categories.php');
    }
    else{
        $errorMessage="Error while adding";
    }
}
require_once $base_path . 'layouts/header.php';


?>
   <!-- Page Header -->
   <header class="masthead" style="background-image: url('<?php echo $base_url ?>img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Add New Category</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
<div class="container">
<div class="row">
        <div class="col-md-12">
        <form action="addCategory.php" method="POST">
        <input class="form-control" name="name" placeholder="Name">
        <button type="submit" class="btn-success">Add</button>
        </form>
        <?php
if (isset($errorMessage)) {
    ?>
            <div><?php echo $errorMessage; ?></div>
            <?php
}
?>
        </div>
    </div>
</div>

<?php
require_once '../layouts/footer.php';
?>
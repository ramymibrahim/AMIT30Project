<?php
require_once '../helpers/config.php';
require_once($base_path . 'helpers/users.php');
protect();
require_once $base_path . 'helpers/categories.php';
if (isset($_POST['name']) && isset($_POST['id'])) {
  $id=$_POST['id'];
  $name = $_POST['name'];
  if (editCategory($id,$name)) {
    header('Location:' . $base_url . 'admin/categories.php');
  } else {
    $errorMessage = "Error while updating";
  }
}
$category=null;
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $category = getCategory($id);
}
if ($category == null) {
  header('Location:' . $base_url . 'admin/categories.php');
  die();
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
          <h1>Edit Category</h1>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="editCategory.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $category['id'];?>">
        <input class="form-control" name="name" placeholder="Name" value="<?php echo $category['name'];?>">
        <button type="submit" class="btn-success">Edit</button>
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
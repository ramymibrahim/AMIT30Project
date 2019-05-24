<?php
require_once '../helpers/config.php';
require_once($base_path.'helpers/users.php');
protect();

if(isset($_POST['name']) && isset($_POST['username'])  && isset($_POST['password']) && isset($_FILES['image'])){
  $image=uploadPhoto($_FILES['image']);
  if(!$image){
    $errorMessage="Error while uploading";
  }
  else{
    $name=$_POST['name'];
    $username=$_POST['username'];    
    $password=$_POST['password'];       
      if(addUser($name,$username,$password,$image,getCheck('is_admin'),getCheck('is_author'),getCheck('is_active'))){
          header('Location:'.$base_url.'admin/users.php');
          die();
      }
      else{
          $errorMessage="Error while adding";
      }
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
              <h1>Add New User</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
<div class="container">
<div class="row">
        <div class="col-md-12">
        <form action="addUser.php" method="POST" enctype="multipart/form-data">
        <input class="form-control" name="name" placeholder="name">
        <input class="form-control" name="username" placeholder="User Name">
        <input class="form-control" name="password" placeholder="Password" type="password">
        <input type="checkbox" name="is_admin" /><label>Is Admin </label><br />
        <input type="checkbox" name="is_author" /><label>Is Author </label><br />
        <input type="checkbox" name="is_active" /><label>Is Active </label><br />
        <input type="file" name="image"><br />
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
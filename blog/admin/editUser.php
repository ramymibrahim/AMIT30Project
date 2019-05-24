<?php
require_once '../helpers/config.php';
require_once($base_path.'helpers/users.php');
protect();

if(isset($_POST['name'])){
  if(!empty($_FILES['image']['name'])){      
    $image=uploadPhoto($_FILES['image']);        
  }
  else{    
    $image=$_POST['old_image'];
  }  
  if(!$image){
    $errorMessage="Error while uploading";
  }
  else{
    $id=$_POST['id'];
    $name=$_POST['name'];    
      if(editUser($id,$name,$image,getCheck('is_admin'),getCheck('is_author'),getCheck('is_active'))){
          header('Location:'.$base_url.'admin/users.php');
          die();
      }
      else{
          $errorMessage="Error while adding";
      }
  }
}
$_user=null;
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $_user = getUser($id);
}
if($_user==null){
  header('Location:'.$base_url.'admin/users.php');
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
              <h1>Edit User</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
<div class="container">
<div class="row">
        <div class="col-md-12">
        <form action="editUser.php?id=<?php echo $_user['id']?>" method="POST" enctype="multipart/form-data">
        <input class="form-control" name="name" placeholder="name" value="<?php echo $_user['name'];?>">
        <input class="form-control" placeholder="username" value="<?php echo $_user['username'];?>" disabled>        
        <input type="file" name="image"><br />
        <img src="<?php echo $base_url.$_user['image']?>" width="250" height="250" /><br />
        <input type="hidden" name="id" value="<?php echo $_user['id']?>" />
        <input type="hidden" name="old_image" value="<?php echo $_user['image']?>" />

        <input type="checkbox" name="is_admin" <?php echo ($_user['is_admin']?"checked":"")?>/><label>Is Admin </label><br />
        <input type="checkbox" name="is_author" <?php echo ($_user['is_author']?"checked":"")?>/><label>Is Author </label><br />
        <input type="checkbox" name="is_active" <?php echo ($_user['is_active']?"checked":"")?>/><label>Is Active </label><br />

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
<?php
require_once '../helpers/config.php';
require_once($base_path.'helpers/users.php');
protect();
require_once $base_path . 'helpers/posts.php';

if(isset($_POST['title']) && isset($_POST['content'])  && isset($_POST['category_id']) && isset($_FILES['image'])){
  $image=uploadPhoto($_FILES['image']);
  if(!$image){
    $errorMessage="Error while uploading";
  }
  else{
    $title=$_POST['title'];
    $content=$_POST['content'];
    $user_id=$_SESSION['user_data']['id'];
    $category_id=$_POST['category_id'];    
      if(addPost($title,$content,$user_id,$category_id,$image)){
          header('Location:'.$base_url.'admin/posts.php');
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
              <h1>Add New Post</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
<div class="container">
<div class="row">
        <div class="col-md-12">
        <form action="addPost.php" method="POST" enctype="multipart/form-data">
        <input class="form-control" name="title" placeholder="title">
        <textarea class="form-control" name="content" placeholder="content"></textarea>       
        <select  class="form-control" name="category_id">
          <?php
          foreach($categories as $cat){            
            echo "<option value='".$cat['id']."'>".$cat['name']."</option>";
          }
          ?>
        </select>      
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
<?php
require_once '../helpers/config.php';
require_once($base_path.'helpers/users.php');
protect();
require_once $base_path . 'helpers/posts.php';

if(isset($_POST['title']) && isset($_POST['content']) 
 && isset($_POST['category_id'])){
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
    $title=$_POST['title'];
    $content=$_POST['content'];    
    $category_id=$_POST['category_id'];    
      if(editPost($id,$title,$content,$category_id,$image)){
          header('Location:'.$base_url.'admin/posts.php');
          die();
      }
      else{
          $errorMessage="Error while adding";
      }
  }
}
$post=null;
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $post = getPost($id);
}
if($post==null){
  header('Location:'.$base_url.'admin/posts.php');
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
              <h1>Edit Post</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
<div class="container">
<div class="row">
        <div class="col-md-12">
        <form action="editPost.php?id=<?php echo $post['id']?>" method="POST" enctype="multipart/form-data">
        <input class="form-control" name="title" placeholder="title" value="<?php echo $post['title'];?>">
        <textarea class="form-control" name="content" placeholder="content"><?php echo $post['content'];?></textarea>       
        <select  class="form-control" name="category_id">
          <?php
          foreach($categories as $cat){   
            $attr="";
            if($cat['id']==$post['category_id']){
             $attr="selected='selected'"; 
            }
            echo "<option value='".$cat['id']."' $attr>".$cat['name']."</option>";
          }
          ?>
        </select>
        <input type="file" name="image"><br />
        <img src="<?php echo $base_url.$post['image']?>" width="250" height="250" />
        <input type="hidden" name="id" value="<?php echo $post['id']?>" />
        <input type="hidden" name="old_image" value="<?php echo $post['image']?>" />
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
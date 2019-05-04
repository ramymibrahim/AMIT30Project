<?php
require_once('helpers/config.php');
require_once('helpers/database.php');
$id=$_GET['id'];
$query ="SELECT posts.*,users.name as posted_by FROM posts inner join users on users.id=posts.user_id where posts.id=$id";
$post=getRow($query);
if($post==null){
  header('Location:index.php');
  die();
}
require_once('layouts/header.php');
?>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo $post['image']?>')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?php echo $post['title']?></h1>              
              <span class="meta">Posted by
                <a href="users.php?id=<?php echo $post['user_id']?>"><?php echo $post['posted_by']?></a>
                on <?php echo $post['created_at']?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
           <?php echo $post['content'];?>
          </div>
        </div>
      </div>
    </article>

    <hr>

<?php
require_once('layouts/footer.php');
?>
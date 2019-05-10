<?php
require_once('helpers/config.php');
require_once($base_path.'helpers/posts.php');
$cat_id=null;
if(isset($_GET['cat_id'])){
  $cat_id=$_GET['cat_id'];  
}
$posts=getPosts($cat_id);
require_once('layouts/header.php');
?>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Clean Blog</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php 
          foreach($posts as $post){
?>
          <div class="post-preview">
            <a href="post.php?id=<?php echo $post['id']?>">
              <h2 class="post-title">
                <?php echo $post['title'];?>
              </h2>
              <h3 class="post-subtitle">
              <?php echo $post['content'];?>
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="users.php?id=<?php echo $post['user_id']?>"><?php echo $post['posted_by'];?></a>
              on <?php echo $post['created_at'];?></p>
          </div>
          <hr>
<?php
          }
          ?>


          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>
    <?php
    require_once('layouts/footer.php');
    ?>
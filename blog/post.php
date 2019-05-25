<?php
require_once('helpers/config.php');
require_once('helpers/posts.php');
$id = $_GET['id'];
$post = getPostView($id);
if ($post == null) {
  header('Location:index.php');
  die();
}

$comments = getComments($id);
require_once('layouts/header.php');
?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo $post['image'] ?>')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1><?php echo $post['title'] ?></h1>
          <span class="meta">Posted by
            <a href="users.php?id=<?php echo $post['user_id'] ?>"><?php echo $post['posted_by'] ?></a>
            on <?php echo $post['created_at'] ?></span>
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
        <?php echo $post['content']; ?>
      </div>
    </div>
  </div>
</article>
<hr>
<?php
foreach($comments as $c){
  ?>
<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="comment">
      <div class="comment-header">
        <div class="img">
          <img src="<?php echo $base_url.$c['image'];?>" width="100" height="100">
        </div>
        <div>
          <b><a href="<?php echo $base_url.'users.php?id='.$c['id']?>"><?php echo $c['name'];?></a></b><br />
          <b><?php echo $c['created_at'];?></b>
        </div>
      </div>
      <div class="comment-body">
        <?php echo $c['comment'];?>
      </div>
    </div>
  </div>
</div>

  <?php
}
?>
<?php
require_once('layouts/footer.php');
?>
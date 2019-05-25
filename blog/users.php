<?php
require_once('helpers/config.php');
require_once('helpers/users.php');
$id = $_GET['id'];
$_user = getUser($id);
if ($_user == null) {
  header('Location:index.php');
  die();
}
require_once('layouts/header.php');
?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo $base_url.$_user['image'] ?>')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1><?php echo $_user['name'] ?></h1>
          <span class="meta">Posts: <?php echo getPostsCount($id)[0]?></span>
          <span class="meta">Comments: <?php echo getCommentsCount($id)[0]?></span>
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
      </div>
    </div>
  </div>
</article>
<hr>
<?php
require_once('layouts/footer.php');
?>
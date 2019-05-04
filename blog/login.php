<?php

require_once('helpers/database.php');
if(isset($_POST['username']) && isset($_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $q="SELECT * FROM users WHERE username='$username' AND password='$password' AND is_active=1";
    $user=getRow($q);
    if($user==null){
        $errorMessage="Please enter a valid data";
    }
    else{
        session_start();
        $_SESSION['user_data']=$user;     
        header('Location:index.php');
        die();
    }
}
require_once 'layouts/header.php';
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

<div class="row">
    <div class="offset-md-2 col-md-8">
        <form method="POST" action="login.php">
        <input class="form-control" name="username" />
        <input class="form-control" name="password" type="password"/>
        <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <?php
if (isset($errorMessage)) {
    echo "<div class='alert alert-danger'>$errorMessage</div>";
}
?>
    </div>
   
</div>

<?php
require_once 'layouts/footer.php';
?>
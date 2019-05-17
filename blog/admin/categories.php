<?php
require_once('../helpers/config.php');
require_once($base_path.'helpers/users.php');
protect();
require_once($base_path.'helpers/categories.php');
$categories = getCategories();
require_once($base_path.'layouts/header.php');
?>
<style>

</style>
   <!-- Page Header -->
   <header class="masthead" style="background-image: url('<?php echo $base_url?>img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Categories</h1>              
            </div>
          </div>
        </div>
      </div>
    </header>
<div class="container">
<div class="row">
        <div class="col-md-12">
        <a href="<?php echo $base_url?>admin/addCategory.php" class="btn btn-success">Add</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10%;">id</th>
                        <th>Name</th>
                        <th colspan="2" style="width: 10%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($categories as $cat){
                    ?>
                          
                    <tr>
                        <td scope="row"><?php echo $cat['id'];?></td>
                        <td><?php echo $cat['name'];?></td>
                        <td><a class="btn btn-primary" href="<?php echo $base_url?>admin/editCategory.php?id=<?php echo $cat['id'];?>">Edit</a></td>
                        <td><button class="btn btn-danger">Delete</button></td>
                    </tr>     
                    <?php
                }
                ?>             
                </tbody>
            </table>
        </div>
    </div>
</div>
  
<?php
require_once('../layouts/footer.php');
?>
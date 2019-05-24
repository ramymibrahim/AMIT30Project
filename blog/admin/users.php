<?php
require_once('../helpers/config.php');
require_once($base_path.'helpers/users.php');
protect();
require_once($base_path.'layouts/header.php');
if(isset($_POST['id'])){
  deleteUser($_POST['id']);
}
$users = getUsers();
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
              <h1>Users</h1>              
            </div>
          </div>
        </div>
      </div>
    </header>
<div class="container">
<div class="row">
        <div class="col-md-12">
        <a href="<?php echo $base_url?>admin/addUser.php" class="btn btn-success">Add</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10%;">id</th>                        
                        <th>Name</th>
                        <th>User Name</th>
                        <th>Image</th>
                        <th>Admin</th>
                        <th>Author</th>
                        <th>Active</th>
                        <th colspan="2" style="width: 10%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($users as $user){
                    ?>
                          
                    <tr>
                        <td scope="row"><?php echo $user['id'];?></td>
                        <td><?php echo $user['name'];?></td>
                        <td><?php echo $user['username'];?></td>
                        <td><img src="<?php echo $base_url.$user['image'];?>" width="100" height="100" /></td>
                        <td><?php echo ($user['is_admin']?"Admin":"Not Admin");?></td>
                        <td><?php echo ($user['is_author']?"Author":"Not Author");?></td>
                        <td><?php echo ($user['is_active']?"Active":"Not Active");?></td>
                        <td><a class="btn btn-primary" href="<?php echo $base_url?>admin/editUser.php?id=<?php echo $user['id'];?>">Edit</a></td>
                        <td>
                        <form action="users.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $user['id'];?>" />
                          <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure ?')">Delete</button>
                          </form>
                        </td>
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
<?php
include('../database/db.php');

?>

<?php
if(isset($_POST['create_admin']))
{

    $admin_firstname=$_POST['admin_firstname'];
    $admin_lastname=$_POST['admin_lastname'];
    $admin_username = $_POST['admin_username'];
    
    
    
    $admin_image = $_FILES['admin_image']['name'];
    $admin_image_temp = $_FILES['admin_image']['tmp_name'];
    
    
    $admin_password = $_POST['admin_password'];
    
    // $post_comment_count = 4;
    
    move_uploaded_file($admin_image_temp, "../images/admin/$admin_image");
    
    $query = "INSERT INTO airlines_reservation_system.admin(admin_username,admin_firstname, admin_lastname,  admin_password, admin_image)";
    $query .= "VALUES('{$admin_username}', '{$admin_firstname}' , '{$admin_lastname}', '{$admin_password}', '{$admin_image}') ";
    
    $add_admin_query = mysqli_query($connection , $query);
    
  
  echo "Admin created"." "."<a href='admin.php'> View Admin</a>";
    
}


?>
   

   
   
   <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="admin_firstname">Firstname</label>
        <input type="text" class="form-control" name="admin_firstname" id="admin_firstname">
    </div>

    <div class="form-group">
        <label for="admin_lastname">Lastname</label>
        <input type="text" class="form-control" name="admin_lastname" id="admin_lastname">
    </div>
    
    
   <!--  <div class="form-group">
        <select name="user_role" id="">
            <option value="subscriber">Select Option</option>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
        </select>
    </div> -->

    <div class="form-group">
        <label for="admin_username">Admin Username</label>
        <input type="text" class="form-control" name="admin_username" id="admin_username">
    </div>
    
    
    
    <br>
    <div class="form-group">
        <label for="admin_image">Admin Image</label>

        <input type="file" name="admin_image" id="admin_image">
    </div>
    
 


    <div class="form-group">
        <label for="admin_password">Password</label>
        <input type="password" class="form-control" name="admin_password" id="admin_password">
            
    </div>
    
  <!--   <div class="form-group">
        <label for="content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
        </textarea>
    </div>
     -->
    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="create_admin" value="Add Admin">
    </div>
    
</form>
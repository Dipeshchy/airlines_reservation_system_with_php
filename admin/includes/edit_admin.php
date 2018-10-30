<?php
include('../database/db.php');

?>

<?php 

include('../functions.php');
 ?>
<?php 

if(isset($_GET['edit_admin']))
{
    $the_edit_admin_id = $_GET['edit_admin'];

    $query1= "SELECT * FROM airlines_reservation_system.admin WHERE admin_id = '{$the_edit_admin_id}' ";
    $execute_query1= mysqli_query($connection , $query1);
    if(!$execute_query1)
    {
        die('Error'.mysqli_error($connection));
    }

    while($row=mysqli_fetch_array($execute_query1))
    {
     $admin_firstname=$row['admin_firstname'];
    
  
    $admin_lastname=$row['admin_lastname'];
    $admin_username = $row['admin_username'];
    $admin_password = $row['admin_password'];
    $admin_image = $row['admin_image'];
}
}


 ?>

<?php
if(isset($_POST['edit_admin']))
{

    $admin_firstname=$_POST['admin_firstname'];
    $admin_lastname=$_POST['admin_lastname'];
    $admin_username = $_POST['admin_username'];
    
    
    
    $admin_image = $_FILES['admin_image']['name'];
    $admin_image_temp = $_FILES['admin_image']['tmp_name'];
    
    
    $admin_password = $_POST['admin_password'];
    
    // $post_comment_count = 4;
    
    move_uploaded_file($admin_image_temp, "../images/admin/$admin_image");
    
    $query = "UPDATE airlines_reservation_system.admin SET admin_username='{$admin_username}' ,admin_firstname='{$admin_firstname}' , admin_lastname='{$admin_lastname}' ,  admin_password='{$admin_password}' , admin_image='{$admin_image}' WHERE admin_id='{$the_edit_admin_id}' WHERE admin_id = '{$the_edit_admin_id}' ";
   
    
    $edit_admin_query = mysqli_query($connection , $query);
    if(!$edit_admin_query)
    {
        die('Error '.mysqli_error($connection));
    }
    
  
header('Location:admin.php');
    
}


?>
   

   
   
   <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="admin_firstname">Firstname</label>
        <input type="text" class="form-control" name="admin_firstname" id="admin_firstname" value="<?php echo $admin_firstname; ?>">
    </div>

    <div class="form-group">
        <label for="admin_lastname">Lastname</label>
        <input type="text" class="form-control" name="admin_lastname" id="admin_lastname" value="<?php echo $admin_lastname; ?>">
    </div>
    
    
   

    <div class="form-group">
        <label for="admin_username">Admin Username</label>
        <input type="text" class="form-control" name="admin_username" id="admin_username" value="<?php echo $admin_username; ?>">
    </div>
    
    
    
    <br>
    <div class="form-group">
        <label for="admin_image">Admin Image</label>
        <img width="100px" height="100px" src="../images/admin/<?php echo $admin_image; ?>">
        <input type="file" name="admin_image" id="admin_image">
    </div>
    
 


    <div class="form-group">
        <label for="admin_password">Password</label>
        <input type="password" class="form-control" name="admin_password" id="admin_password" value="<?php echo $admin_password; ?>">
            
    </div>
    
  <!--   <div class="form-group">
        <label for="content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
        </textarea>
    </div>
     -->
    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="edit_admin" value="Edit Admin">
    </div>
    
</form>
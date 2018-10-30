 <?php
include('../database/db.php');

?>

<?php 
    include('../functions.php');

 ?>

 <?php 

 if(isset($_GET['edit_passenger']))
 {
    $the_passenger_id = $_GET['edit_passenger'];

    $query1=execute_query("SELECT * FROM airlines_reservation_system.passengers WHERE passenger_id = '{$the_passenger_id}' ");
    confirm($query1);
    while($row=fetch_array($query1))
    {
        $username = $row['username'];
        $passenger_firstname = $row['passenger_firstname'];
        $passenger_lastname = $row['passenger_lastname'];
        $passenger_age = $row['passenger_age'];
        $passenger_address = $row['passenger_address'];
        $passenger_email = $row['passenger_email'];
        $passenger_image = $row['passenger_image'];
        $passenger_mobno = $row['passenger_mobno'];
        $passenger_nationality = $row['passenger_nationality'];
        $passenger_image =$row['passenger_image'];
        $passenger_password =$row['passenger_password'];

    }
 }
  ?>

<?php
if(isset($_POST['edit_passenger']))
{

    $passenger_firstname=$_POST['passenger_firstname'];
    $passenger_lastname=$_POST['passenger_lastname'];
    $username = $_POST['username'];
    $passenger_age= $_POST['passenger_age'];
    
    $passenger_address = $_POST['passenger_address'];
    
    $passenger_image = $_FILES['passenger_image']['name'];
    $passenger_image_temp = $_FILES['passenger_image']['tmp_name'];
    
    $passenger_email = $_POST['passenger_email'];
    $passenger_password = $_POST['passenger_password'];
    $passenger_mobno = $_POST['passenger_mobno'];
    $passenger_nationality = $_POST['passenger_nationality'];
    // $post_comment_count = 4;
    
    move_uploaded_file($passenger_image_temp, "../images/passengers/$passenger_image");
    
    $query = execute_query("UPDATE airlines_reservation_system.passengers SET username='{$username}'  ,passenger_firstname='{$passenger_firstname}' , passenger_lastname='{$passenger_lastname}'  , passenger_age='{$passenger_age}' , passenger_email='{$passenger_email}' ,  passenger_password='{$passenger_password}' , passenger_mobno='{$passenger_mobno}' , passenger_address='{$passenger_address}' ,passenger_nationality='{$passenger_nationality}' , passenger_image='{$passenger_image}' WHERE passenger_id='{$the_passenger_id}' ");
    
    
    confirm($query);
    
 

  header('Location:passengers.php');
    
}


?>
   

   
   
   <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="passenger_firstname">Firstname</label>
        <input type="text" class="form-control" name="passenger_firstname" id="passenger_firstname" value="<?php echo $passenger_firstname; ?>">
    </div>

    <div class="form-group">
        <label for="passenger_lastname">Lastname</label>
        <input type="text" class="form-control" name="passenger_lastname" id="passenger_lastname" value="<?php echo $passenger_lastname; ?>">
    </div>

    <div class="form-group">
        <label for="passenger_age">Age</label>
        <input type="number" class="form-control" name="passenger_age" id="passenger_age" value="<?php echo $passenger_age; ?>">
    </div>

     <!-- <div  class="form-group text-left">
                 <label for="passenger_age">Lastname</label>
        <input type="number" class="form-control" name="age" id="passenger_age">
                 
                </div> -->
    
    
  

    <div class="form-group">
        <label for="username">username</label>
        <input type="text" class="form-control" name="username" id="username" value="<?php echo $username; ?>">
    </div>
    
    
    
    <br>
    <div class="form-group">
        <label for="passenger_image">passenger Image</label>
        <img width="100px" height="100px" src="../images/passengers/<?php echo $passenger_image; ?>">
        <input type="file" name="passenger_image" id="passenger_image">
    </div>
    
    <div class="form-group">
        <label for="passenger_email">Email</label>
        <input type="email" class="form-control" name="passenger_email" id="passenger_email" value="<?php echo $passenger_email; ?>">
    </div>
<div class="form-group">
        <label for="passenger_address">Address</label>
        <input type="text" class="form-control" name="passenger_address" id="passenger_address" value="<?php echo $passenger_address; ?>">
    </div>

    <div class="form-group">
        <label for="passenger_mobno">Mobile Number</label>
        <input type="number" class="form-control" name="passenger_mobno" id="passenger_mobno" value="<?php echo $passenger_mobno; ?>">
    </div>
     <div class="form-group">
        <label for="passenger_mobno">Nationality</label>
        <input type="text" class="form-control" name="passenger_nationality" id="passenger_nationality" value="<?php echo $passenger_nationality; ?>">
    </div>

    <div class="form-group">
        <label for="passenger_password">Password</label>
        <input type="password" class="form-control" name="passenger_password" id="passenger_password" value="<?php echo $passenger_password; ?>">
            
    </div>
    
 
    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="edit_passenger" value="Edit passenger">
    </div>
    
</form> 
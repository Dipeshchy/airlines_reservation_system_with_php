<!-- <?php
include('../database/db.php');

?>

<?php
if(isset($_POST['create_passenger']))
{

    $passenger_firstname=$_POST['passenger_firstname'];
    $passenger_lastname=$_POST['passenger_lastname'];
    $username = $_POST['username'];
    $passenger_age= $_POST['age'];
    
    $passenger_address = $_POST['passenger_address'];
    
    $passenger_image = $_FILES['passenger_image']['name'];
    $passenger_image_temp = $_FILES['passenger_image']['tmp_name'];
    
    $passenger_email = $_POST['passenger_email'];
    $passenger_password = $_POST['passenger_password'];
    $passenger_mobno = $_POST['passenger_mobno'];
    $passenger_nationality = $_POST['passenger_nationality'];
    // $post_comment_count = 4;
    
    move_uploaded_file($passenger_image_temp, "../images/passengers/$passenger_image");
    
    $query = "INSERT INTO airlines_reservation_system.passengers(username,passenger_firstname, passenger_lastname, passenger_age , passenger_email ,  passenger_password, passenger_mobno , passenger_address ,passenger_nationality, passenger_image)";
    $query .= "VALUES('{$username}', '{$passenger_firstname}' ,'{$passenger_age}' , '{$passenger_lastname}','{$passenger_email}', ' {$passenger_password}', '{$passenger_mobno}' , '{$passenger_address}', '{$passenger_nationality}' , '{$passenger_image}') ";
    
    $add_passenger_query = mysqli_query($connection , $query);
    
 

  echo "passenger created"." "."<a href='passengers.php'>View passengers</a>";
    
}


?>
   

   
   
   <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="passenger_firstname">Firstname</label>
        <input type="text" class="form-control" name="passenger_firstname" id="passenger_firstname">
    </div>

    <div class="form-group">
        <label for="passenger_lastname">Lastname</label>
        <input type="text" class="form-control" name="passenger_lastname" id="passenger_lastname">
    </div>

     <div  class="form-group text-left">
                 <label for="passenger_age">Lastname</label>
        <input type="number" class="form-control" name="age" id="passenger_age">
                 
                </div>
    
    
   <!--  <div class="form-group">
        <select name="passenger_role" id="">
            <option value="subscriber">Select Option</option>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
        </select>
    </div> -->

    <div class="form-group">
        <label for="username">username</label>
        <input type="text" class="form-control" name="username" id="username">
    </div>
    
    
    
    <br>
    <div class="form-group">
        <label for="passenger_image">passenger Image</label>

        <input type="file" name="passenger_image" id="passenger_image">
    </div>
    
    <div class="form-group">
        <label for="passenger_email">Email</label>
        <input type="email" class="form-control" name="passenger_email" id="passenger_email">
    </div>
<div class="form-group">
        <label for="passenger_address">Address</label>
        <input type="text" class="form-control" name="passenger_address" id="passenger_address">
    </div>

    <div class="form-group">
        <label for="passenger_mobno">Mobile Number</label>
        <input type="number" class="form-control" name="passenger_mobno" id="passenger_mobno">
    </div>
     <div class="form-group">
        <label for="passenger_mobno">Nationality</label>
        <input type="text" class="form-control" name="passenger_nationality" id="passenger_nationality">
    </div>

    <div class="form-group">
        <label for="passenger_password">Password</label>
        <input type="password" class="form-control" name="passenger_password" id="passenger_password">
            
    </div>
    
  <!--   <div class="form-group">
        <label for="content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
        </textarea>
    </div>
     -->
    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="create_passenger" value="Add passenger">
    </div>
    
</form> -->
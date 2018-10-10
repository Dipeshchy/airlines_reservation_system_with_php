<?php
include('../database/db.php');

?>

<?php
if(isset($_POST['add_announcement']))
{

    $announcement_title=$_POST['announcement_title'];
    $announcement_detail=$_POST['announcement_detail'];
    
  
    
    
$announcement_image = $_FILES['announcement_image']['name'];
    $announcement_image_temp = $_FILES['announcement_image']['tmp_name'];
    
   
    
   
    
    move_uploaded_file($announcement_image_temp, "../images/announcements/$announcement_image");
    
    
    
    $query = "INSERT INTO airlines_reservation_system.announcements(announcements_title, announcements_image, announcements_detail)";
    $query .= "VALUES('{$announcement_title}' ,'{$announcement_image}' , '{$announcement_detail}') ";
    
    $add_announcement_query = mysqli_query($connection , $query);
    if(!$add_announcement_query)
    {
        die('failed'.mysqli_error($connection));
    }
 

  echo "Announcement added"." "."<a href='announcements.php'> View announcements</a>";
    
}


?>
   

   
   
   <form action="" method="post" enctype="multipart/form-data">
    
    
    
 

    <div class="form-group">
        <label for="announcement_title">Announcement Title</label>
        <input type="text" class="form-control" name="announcement_title" id="announcement_title">
    </div>
    
    
    
 
    <br>
    <div class="form-group">
        <label for="announcement_image">Announcement Image</label>

        <input type="file" name="announcement_image" id="announcement_image">
    </div>
    

    
     <div class="form-group">
        <label for="announcement_detail">Announcement Detail</label>
       <textarea class="form-control" name="announcement_detail" id="announcement_detail" cols="30" rows="10">
        </textarea>
    </div>

   
    
  <!--   <div class="form-group">
        <label for="content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
        </textarea>
    </div>
     -->
    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="add_announcement" value="Add announcement">
    </div>
    
</form> 
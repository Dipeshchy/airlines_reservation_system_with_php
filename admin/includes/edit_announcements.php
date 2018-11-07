<?php
include('../database/db.php');

?>
<?php 

include('../functions.php');
 ?>

 <?php 

 	if(isset($_GET['edit_announcement']))
 	{
 		$the_announcement_id = $_GET['edit_announcement'];

 		$query1 = execute_query("SELECT * FROM airlines_reservation_system.announcements WHERE announcements_id = '{$the_announcement_id}' ");
 		confirm($query1);
 		while($row = fetch_array($query1))
 		{
 			$announcements_title = $row['announcements_title'];
 			$announcement_image = $row['announcements_image'];
 			$announcement_detail = $row['announcements_detail'];
 		}
 	}


  ?>

<?php
if(isset($_POST['edit_announcement']))
{

    $announcement_title=$_POST['announcement_title'];
    $announcement_detail=$_POST['announcement_detail'];
    
  
    
    
$announcement_image = $_FILES['announcement_image']['name'];
    $announcement_image_temp = $_FILES['announcement_image']['tmp_name'];
    
   
    
   
    
    move_uploaded_file($announcement_image_temp, "../images/announcements/$announcement_image");
    
    
    
    $query = execute_query("UPDATE airlines_reservation_system.announcements SET announcements_title='{$announcement_title}' , announcements_image='{$announcement_image}'  , announcements_detail='{$announcement_detail}' WHERE announcements_id = '{$the_announcement_id}' ");
    confirm($query);
    
   

  header('Location:announcements.php');
    
}


?>
   

   
   
   <form action="" method="post" enctype="multipart/form-data">
    
    
    
 

    <div class="form-group">
        <label for="announcement_title">Announcement Title</label>
        <input type="text" class="form-control" name="announcement_title" id="announcement_title" value="<?php echo $announcements_title; ?>">
    </div>
    
    
    
 
    <br>
    <div class="form-group">
        <label for="announcement_image">Announcement Image</label>
        <img width="100px" height="100px" src="../images/announcements/<?php echo $announcement_image; ?>">
        <input type="file" name="announcement_image" id="announcement_image">
    </div>
    

    
     <div class="form-group">
        <label for="announcement_detail">Announcement Detail</label>
       <textarea class="form-control" name="announcement_detail" id="announcement_detail" cols="30" rows="10">
        <?php echo $announcement_detail; ?>
        </textarea>
    </div>

   
    
 
    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="edit_announcement" value="Edit announcement">
    </div>
    
</form> 
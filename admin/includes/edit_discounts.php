<?php
include('../database/db.php');

?>

<?php 

include('../functions.php');
 ?>

<?php 
    if(isset($_GET['edit_discount']))
    {
        $the_discount_id = $_GET['edit_discount'];

        $query1 = execute_query("SELECT * FROM airlines_reservation_system.discounts WHERE discount_id='{$the_discount_id}' ");
        confirm($query1);
        while($row= fetch_array($query1))
        {
            $discount_title = $row['discount_title'];
            $discount_amount = $row['discount_amount'];
            $discount_description = $row['discount_description'];
        }
    }



 ?>


<?php
if(isset($_POST['edit_discount']))
{

    $discount_title=$_POST['discount_title'];
    $discount_amount=$_POST['discount_amount'];
    $discount_description = $_POST['discount_description'];
    
    
    
    
    
    
    
    $query = execute_query("UPDATE airlines_reservation_system.discounts SET discount_title='{$discount_title}' ,discount_amount='{$discount_amount}' , discount_description='{$discount_description}' WHERE discount_id='{$the_discount_id}'  ");
    
    
    confirm($query);
    
  
  header('Location:discounts.php');
}


?>
   

   
   
   <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="discount_title">Discount Title</label>
        <input type="text" class="form-control" name="discount_title" id="discount_title" value="<?php echo $discount_title; ?>">
    </div>

    <div class="form-group">
        <label for="discount_amount">Amount</label>
        <input type="number" class="form-control" name="discount_amount" id="discount_amount" value="<?php echo $discount_amount;  ?>" >
    </div>
    
    
 

    <div class="form-group">
    	<label for="discount_description">Discount Description</label>
        <textarea class="form-control" name="discount_description" id="discount_description" cols="30" rows="10"><?php echo $discount_description; ?>
        </textarea>
    </div>
    
    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="edit_discount" value="Edit discount">
    </div>
    
</form>
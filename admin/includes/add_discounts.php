<?php
include('../database/db.php');

?>

<?php
if(isset($_POST['create_discount']))
{

    $discount_title=$_POST['discount_title'];
    $discount_amount=$_POST['discount_amount'];
    $discount_description = $_POST['discount_description'];
    
    
    
    
    
    
    
    $query = "INSERT INTO airlines_reservation_system.discounts(discount_title,discount_amount, discount_description)";
    $query .= "VALUES('{$discount_title}', '{$discount_amount}' , '{$discount_description}') ";
    
    $add_discount_query = mysqli_query($connection , $query);
    
  
  echo "Discount Offer created"." "."<a href='discounts.php'> View discount</a>";
    
}


?>
   

   
   
   <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="discount_title">Discount Title</label>
        <input type="text" class="form-control" name="discount_title" id="discount_title">
    </div>

    <div class="form-group">
        <label for="discount_amount">Amount</label>
        <input type="number" class="form-control" name="discount_amount" id="discount_amount">
    </div>
    
    
   <!--  <div class="form-group">
        <select name="user_role" id="">
            <option value="subscriber">Select Option</option>
            <option value="discount">discount</option>
            <option value="subscriber">Subscriber</option>
        </select>
    </div> -->

    <div class="form-group">
    	<label for="discount_description">Discount Description</label>
        <textarea class="form-control" name="discount_description" id="discount_description" cols="30" rows="10">
        </textarea>
    </div>
    
    
    
   
 


   
  <!--   <div class="form-group">
        <label for="content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
        </textarea>
    </div>
     -->
    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="create_discount" value="Add discount">
    </div>
    
</form>
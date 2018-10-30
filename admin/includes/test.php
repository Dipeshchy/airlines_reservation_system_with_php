<?php 
session_start();

 ?>
<?php
include('../../database/db.php');

?>
<?php 

include('../../functions.php');
$_SESSION['vacant_seats']=0;

 ?>

        <?php 
        $query1 = execute_query("SELECT * FROM airlines_reservation_system.aeroplanes");

        confirm($query1);

        while($row = fetch_array($query1))
        {

                       
                        $aeroplane_number = $row['aeroplane_number'];
                        $aeroplane_brand = $row['aeroplane_brand'];
                        $aeroplane_capacity = $row['aeroplane_capacity'];  
                        $aeroplane_id = $row['aeroplane_id'];  
                            
                        
                 
                           
        }

         ?>
<?php if(isset($_POST['add_flight']))
{

    
    

    $reserved_seats = $_POST['reserved_seats'];
    echo $reserved_seats."<br>";
    $vacant_seats = $_SESSION['vacant_seats'];
    // echo $vacant_seats;
    echo $aeroplane_capacity."<br>";
    $_SESSION['vacant_seats'] = $aeroplane_capacity - $reserved_seats;
    echo $_SESSION['vacant_seats'];
    unset($_SESSION['vacant_seats']);

}
?>

 
   <form action="" method="post" enctype="multipart/form-data">

   	 
       


            
        
         <div class="form-group">
        <label for="reserved_seats">Reserved Seats</label>
        <br>
        <select name='reserved_seats'>
        <?php
            for($i=0 ; $i<= $aeroplane_capacity ; $i=$i+1)
            {
                echo "<option value='{$i}'>{$i}</option>";
            }
            $_SESSION['reserved_seats'] = $i;
            


        ?>
        </select>
    </div>
        <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="add_flight" value="Add flight">
    </div>
    
</form> 
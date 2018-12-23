<?php
include('../database/db.php');

?>

<?php 
include('../functions.php');

 ?>

 <?php 
    if(isset($_GET['edit_flight']))
    {
        $the_flight_id = $_GET['edit_flight'];
        $query1 = execute_query("SELECT * FROM airlines_reservation_system.flights WHERE flight_id='{$the_flight_id}' ");
        confirm($query1);
        while($row=fetch_array($query1))
        {
            $aeroplane_id = $row['aeroplane_id'];
            $aeroplane_capacity = $row['aeroplane_capacity'];
            $reserved_seats = 0;
            $vacant_seats = $row['vacant_seats'];
            $flight_date = $row['flight_date'];
            $departure_time = $row['departure_time'];
            $arrival_time = $row['arrival_time'];
            $route_id = $row['route_id'];
            $airfare = $row['airfare'];
            $discount_id = $row['discount_id'];
        }
    }

  ?>

 <?php
if(isset($_POST['edit_flight']))
{
            $aeroplane_id=$_POST['aeroplane_id'];
    

    $reserved_seats = $_POST['reserved_seats'];
    

    $aeroplane_capacity = $_POST['aeroplane_capacity'];
    
    if($reserved_seats > $aeroplane_capacity || $reserved_seats < 0)
    {
        die("Error Reserved Seats Number");
    }
    $_SESSION['vacant_seats'] = $aeroplane_capacity - $reserved_seats;
    $vacant_seats = $_SESSION['vacant_seats'];
    
    


    $flight_date = $_POST['flight_date'];
    $departure_time = $_POST['departure_time'];
    $arrival_time = $_POST['arrival_time'];
    $route_id = $_POST['route_id'];
    $airfare = $_POST['airfare'];
    $discount_id = $_POST['discount_id'];

    
    
    
    $query = execute_query("UPDATE airlines_reservation_system.flights SET aeroplane_id='{$$aeroplane_id}', aeroplane_capacity='{$aeroplane_capacity}' ,reserved_seats='{$reserved_seats}', vacant_seats = '{$vacant_seats}' , flight_date='{$flight_date}' , departure_time='{$departure_time}' , arrival_time='{$arrival_time}' , route_id='{$route_id}' , airfare='{$airfare}' , discount_id='{$discount_id}' WHERE flight_id='{$the_flight_id}' ");
    
    
    confirm($query);
    
 

header('Location:flights.php');
    
}


?>
   

   
   
    <form action="" method="post" enctype="multipart/form-data">
    
    
    
     <div class="form-group">
     <label>Aeroplane </label>
     <br>
        <select name="aeroplane_id" id="">

        <?php 
        $query1 = execute_query("SELECT * FROM airlines_reservation_system.aeroplanes");

        confirm($query1);

        while($row = fetch_array($query1))
        {

                       
                        $aeroplane_number = $row['aeroplane_number'];
                        $aeroplane_brand = $row['aeroplane_brand'];
                         
                        $aeroplane_id = $row['aeroplane_id'];  
                            
                        
                            echo "<option value='{$aeroplane_id}'>{$aeroplane_number} {$aeroplane_brand}</option>";
                           
        }

         ?>

            
        </select>

    </div> 

    <div class="form-group">
        <label for="aeroplane_capacity">Aeroplane Capacity</label>
        <input type="number" class="form-control" name="aeroplane_capacity" id="aeroplane_capacity" value="<?php echo $aeroplane_capacity; ?>">
    </div>

   <!--  <div class="form-group">
        <label for="reserved_seats">Reserved Seats</label>
        <input type="number" name="reserved_seats" id="reserved_seats" class="form-control" value="<?php echo $reserved_seats; ?>">
    </div> -->

    <div class="form-group">
        <label for="flight_date">Flight Date</label>
        <input type="date" class="form-control" name="flight_date" id="flight_date" value="<?php echo $flight_date; ?>">
    </div>
    
    
    
    
<div class="form-group">
        <label for="flight_departure">Flight Departure Time</label>
        <input type="time" class="form-control" name="departure_time" id="flight_departure" value="<?php echo $departure_time; ?>">
    </div>

    
     <div class="form-group">
        <label for="flight_arrival">Flight Arrival Time</label>
        <input type="time" class="form-control" name="arrival_time" id="flight_arrival" value="<?php echo $arrival_time; ?>">
    </div>

    

    <div class="form-group">
        <label for="route_id">Route</label>
        <br>
        <select name="route_id">
        <?php
            $query2 = execute_query("SELECT * FROM airlines_reservation_system.routes");

            confirm($query2);

            while($row2=fetch_array($query2))
            {
                $starting_airport = $row2['starting_airport'];
                $destination = $row2['destination'];
                $route_id = $row2['route_id'];

                echo "<option value='{$route_id}'>{$starting_airport} To {$destination}</option>";
            }


        ?>
        </select>
        
    </div>
    
    
    
    
 <div class="form-group">
        <label for="airfare">Airfare</label>
       

          
                <input type='number' class='form-control' name='airfare' id='airfare' value="<?php echo $airfare; ?>">
            
         
        
    </div> 

    
     <div class="form-group">
        <label for="discount">Discount offer</label>
        <br>
        <select name="discount_id">
            <?php 
                $query3 = execute_query("SELECT * FROM airlines_reservation_system.discounts");
                confirm($query3);
                while($row3=fetch_array($query3)) {
                    $discount_id = $row3['discount_id'];
                    $discount_title=$row3['discount_title'];

                    echo "<option value='{$discount_id}'>{$discount_title}</option>";
                }

             ?>
            
        </select>
        <!-- <input type="text" class="form-control" name="flight_capacity" id="flight_capacity"> -->
    </div>

   
    

    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="edit_flight" value="Edit flight">
    </div>
    
</form> 
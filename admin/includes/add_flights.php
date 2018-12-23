<!-- font awesome cdn -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


<?php
include('../database/db.php');

?>
<?php 

include('../functions.php');

 ?>

<?php
if(isset($_POST['add_flight']))
{

    $aeroplane_id=$_POST['aeroplane_id'];
    

    $reserved_seats = 0;
    

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
    $status = "pending";

    
    
    
    
    // $post_comment_count = 4;
    
    
    
    $query = execute_query("INSERT INTO airlines_reservation_system.flights(aeroplane_id, aeroplane_capacity, reserved_seats, vacant_seats ,  flight_date , departure_time , arrival_time , route_id , airfare , discount_id,status) VALUES('{$aeroplane_id}', '{$aeroplane_capacity}', '{$reserved_seats}',$vacant_seats ,'{$flight_date}','{$departure_time}','{$arrival_time}','{$route_id}', '{$airfare}','{$discount_id}','{$status}') ");

        confirm($query);
    
    
   
    
 

  echo "Flight added"." "."<a href='flights.php'> View flights</a>";
    
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
                        $aeroplane_capacity = $row['aeroplane_capacity'];  
                        $aeroplane_id = $row['aeroplane_id'];  
                            
                        
                            echo "<option value='{$aeroplane_id}'>{$aeroplane_number} {$aeroplane_brand}</option>";
                           
        }

         ?>

            
        </select>

    </div> 

    <div class="form-group">
        <label for="aeroplane_capacity">Aeroplane Capacity</label>
        <input type="number" class="form-control" name="aeroplane_capacity" id="aeroplane_capacity"
        ">
    </div>

   <!--  <div class="form-group">
        <label for="reserved_seats">Reserved Seats</label>
        <input type="number" name="reserved_seats" id="reserved_seats" class="form-control">
    </div> -->

    <div class="form-group">
        <label for="flight_date">Flight Date</label>
        <input type="date" class="form-control" name="flight_date" id="flight_date" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" max="2018-12-30">
    </div>
    
    
    
    
<div class="form-group">
        <label for="flight_departure">Flight Departure Time</label>
        <input type="time" class="form-control" name="departure_time" id="flight_departure">
    </div>

    
     <div class="form-group">
        <label for="flight_arrival">Flight Arrival Time</label>
        <input type="time" class="form-control" name="arrival_time" id="flight_arrival">
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
       

          
                <input type='number' class='form-control' name='airfare' id='airfare'>
            
         
        
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
        
        <input type="submit" class="btn btn-primary" name="add_flight" value="Add flight">
    </div>
    
</form> 
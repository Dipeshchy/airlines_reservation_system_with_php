<?php

include('database/db.php');
?>
<?php
    include_once('link_container.php');
    include_once('functions.php');
    session_start();
?>

<?php 
passenger_login();


 ?>
 <body>
     <div class="">
        
        <?php 

            include('includes/header.php');

         ?>
            
     </div>
 </body>
 <div class="container">
<div class="row">
<div class="col-lg-8">
</div>

 <div class="col-lg-7 card mb-2 mt-5">
    <h2 class="text-center mt-2 text-success">Flights</h2>
    <hr>

    <div>
        <?php 

        $query = execute_query("SELECT * FROM airlines_reservation_system.flights");
        confirm($query);
        if (mysqli_num_rows($query) == 0) {
            echo "<h3 class='text-danger'>No Flights</h3>";
        }
        while($row=fetch_array($query))
        {
            $flight_id = $row['flight_id'];

            $aeroplane_id = $row['aeroplane_id'];
            $reserved_seats = $row['reserved_seats'];
            $vacant_seats = $row['vacant_seats'];
            $flight_date = $row['flight_date'];
            $departure_time = $row['departure_time'];
            $arrival_time = $row['arrival_time'];
            $route_id = $row['route_id'];
            $airfare = $row['airfare'];
            $discount_id = $row['discount_id'];
            $status = $row['status'];
            if($status == 'pending'){

            $query1 = execute_query("SELECT * FROM airlines_reservation_system.aeroplanes WHERE aeroplane_id = {$aeroplane_id} ");
            confirm($query1);
            while($row1 = fetch_array($query1))
            {
                $aeroplane_number = $row1['aeroplane_number'];
                $aeroplane_brand = $row1['aeroplane_brand'];

                
            }
             $query2 = execute_query("SELECT * FROM airlines_reservation_system.routes WHERE route_id = {$route_id} ");
            confirm($query2);
            while($row2 = fetch_array($query2))
            {
                $starting_airport = $row2['starting_airport'];
                $destination = $row2['destination'];

                
            }

             $query3 = execute_query("SELECT * FROM airlines_reservation_system.discounts WHERE discount_id = {$discount_id} ");
            confirm($query3);
            while($row3 = fetch_array($query3))
            {
                $discount_title = $row3['discount_title'];
                $discount_amount = $row3['discount_amount'];
                $discount_description = $row3['discount_description'];

                
            }

            ?>
            <h5 style="color:red;"><?php echo $aeroplane_brand; ?></h5>
            <table>
                <tr>
                    <th>From <i class="fas fa-plane-departure"></i></th>
                    <th><i class="fas fa-arrows-alt-h"></i></th>
                    <th>&nbsp;&nbsp;&nbsp;To <i class="fas fa-plane-arrival"></i></th>
                </tr>
                <tr>
                    <th><?php echo $starting_airport; ?></th>
                    <td></td>
                    <th><?php echo $destination; ?></th>
                </tr>
            </table>
            Vacant Seats :<?php echo $vacant_seats; ?><br>
            Flight Date : <?php echo $flight_date; ?>
            &nbsp; &nbsp; &nbsp; 
            <i class="fas fa-plane-departure"></i> Departure Time: <?php echo $departure_time; ?>
            &nbsp; &nbsp; &nbsp; 
            <i class="fas fa-plane-arrival"></i> Arrival Time: <?php echo $arrival_time; ?>
            <br>
            AirFare : &#8377; <?php echo $airfare; ?>
            <br>
            Discount Offer : <?php echo $discount_title; ?>
            &nbsp;&nbsp; &nbsp; &nbsp; &#8377; <?php echo $discount_amount; ?>
            <br>
            <b>Total Fare : &#8377; <?php echo $airfare-$discount_amount; ?></b>
           
            <br>
            <?php if(isset($_SESSION['username']))
            {
                ?>
            
            <div class="text-center"><a href="checkout.php?flight_id=<?php echo $flight_id; ?>"><button class="btn btn-primary">Book Tickets</button></a> </div>
            <?php
            }
            else {
                echo "<h6 class='text-center text-warning'>Please login to book flights</h6>";
            }
            ?>
            
            <hr>
            <?php
}
        }


         ?>
    </div>


    </div>

    <div class="col-md-5"><?php 

            include('includes/flights_side_bar.php');

             ?>
                 
             </div>    
 			<!--  -->


 			
            
            </div>
            </div>
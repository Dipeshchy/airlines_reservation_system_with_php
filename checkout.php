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
     <div class="container">
        
        <?php 

            include('includes/header.php');

         ?>
            
     </div>
     <div class="card container">
     	<table class="table table-striped table-responsive col-md-12" style="width: 100%;">
     		<thead>
     			<tr>
     			<th>Name</th>
     			<th>Number of Tickets</th>
     			<th>Total Fare</th>
     			</tr>		
     		</thead>
     		<tbody>
     			<tr>
     				<td><?php 
     				$username = $_SESSION['username'];
     				
     					$query = execute_query("SELECT * FROM airlines_reservation_system.passengers WHERE username='{$username}' ");
     					confirm($query);
     					while($row=fetch_array($query))
     					{
     						$passenger_firstname = $row['passenger_firstname'];
     						$passenger_lastname = $row['passenger_lastname'];
     						$passenger_age = $row['passenger_age'];
     						$passenger_email = $row['passenger_email'];
     						$passenger_mobno = $row['passenger_mobno'];
     						$passenger_address = $row['passenger_address'];
     						$passenger_nationality = $row['passenger_nationality'];
     						$passenger_image = $row['passenger_image'];

     						echo $passenger_firstname." ".$passenger_lastname;
     					}
     				 ?>
     				 	
     				 </td>
     				 <td>
     				 		<form method="post" class="form-group">
     				 		<select name="seats" class="form-control">
     				 				<?php 
     				 				$flight_id = $_GET['flight_id'];

     				 				$query1 = execute_query("SELECT * FROM airlines_reservation_system.flights WHERE flight_id={$flight_id} ");
     				 				confirm($query1);
     				 				while($row=fetch_array($query1))
     				 				{
     				 					$aeroplane_capacity = $row['aeroplane_capacity'];
     				 					$airfare= $row['airfare'];
     				 					$discount_id =$row['discount_id'];
     				 					$flight_date = $row['flight_date'];
     				 					$departure_time = $row['departure_time'];
     				 					$arrival_time = $row['arrival_time'];
     				 					$aeroplane_id = $row['aeroplane_id'];
     				 					$route_id = $row['route_id'];
     				 					// ***** Getting Aeroplanes Details****************
     				 					$query3 = execute_query("SELECT * FROM airlines_reservation_system.aeroplanes WHERE aeroplane_id={$aeroplane_id} ");
     				 					confirm($query3);
     				 					while($row3=fetch_array($query3))
     				 					{
     				 						 $aeroplane_number = $row3['aeroplane_number'];

     				 						$aeroplane_brand = $row3['aeroplane_brand'];

     				 					}

     				 					// ************* Getting Route Details *************
     				 					$query4 = execute_query("SELECT * FROM airlines_reservation_system.routes WHERE route_id={$route_id} ");
     				 					confirm($query4);
     				 					while($row4=fetch_array($query4))
     				 					{
     				 						$starting_airport = $row4['starting_airport'];
     				 						$destination = $row4['destination'];
     				 					}
     				 					// ************* Getting Discounts Details *************
     				 					$query2 = execute_query("SELECT * FROM airlines_reservation_system.discounts WHERE discount_id={$discount_id} ");
     				 					confirm($query2);
     				 					while($row2 = fetch_array($query2))
     				 					{
     				 						$discount_amount = $row2['discount_amount'];
     				 						$discount_title = $row2['discount_title'];
     				 					}

     				 					for($i=1;$i<=$aeroplane_capacity;$i++)
     				 					{
     				 						echo "<option value={$i}>$i</option>";
     				 					}
     				 				}
     				 			 ?>
     				 		</select>
     				 		<input type="submit" name="sure" value="OK" class="btn btn-success">
     				 	</form>
     				 </td>
     				 <!-- Calculating Total fare -->
     				 <td><?php 
     				 if(isset($_POST['sure']))
     				 {
     				 	$seats = $_POST['seats'];
     				 	$total = $airfare - $discount_amount; 
     				 	$grand_total = $seats * $total;
     				 	?> &#8377; <?php echo $grand_total;
     				 }
     				 else
     				 {
     				 	$total = $airfare - $discount_amount; 
     				 	echo $total;
     				 }
     				 	
     				  ?></td>
     				 <td> <button class="btn btn-success" id="displayform">Confirm</button> </td>
     			</tr>
     		</tbody>
     	</table>
     	<hr>
     	<!-- Payment Form -->
     	<div id="showform" style="display: block; text-align: center; display: none;"><h3 class="text-center text-primary"><i class="far fa-credit-card"></i> Payment</h3>
     	<form class="form-group" style="display: inline-block; margin-left: auto; margin-right: auto; text-align: left;" method="post" target="_blank" action="tickets_pdf.php">
     		
     		<input type="username" name="username" class="form-control" placeholder="Dhukuti Username">
     		<input type="password" name="password" class="form-control" placeholder="Dhukuti Password">
     		<input type="number" name="airfare_total" class="form-control" placeholder="&#8377; <?php echo $grand_total; ?>" readonly value="<?php echo $grand_total; ?>">
     		<input type="hidden" name="passenger_firstname" value="<?php echo $passenger_firstname; ?>">
     		<input type="hidden" name="passenger_lastname" value="<?php echo $passenger_lastname; ?>">	
     		<input type="hidden" name="passenger_image" value="<?php echo $passenger_image; ?>">
     		<input type="hidden" name="passenger_nationality" value="<?php echo $passenger_nationality; ?>">
     		<input type="hidden" name="passenger_address" value="<?php echo $passenger_address; ?>">
     		<input type="hidden" name="passenger_mobno" value="<?php echo $passenger_mobno; ?>">
     		<input type="hidden" name="passenger_email" value="<?php echo $passenger_email; ?>">
     		<input type="hidden" name="starting_airport" value="<?php echo $starting_airport; ?>">
     		<input type="hidden" name="destination" value="<?php echo $destination; ?>">
     		<input type="hidden" name="aeroplane_number" value="<?php echo $aeroplane_number; ?>">
     		<input type="hidden" name="aeroplane_brand" value="<?php echo $aeroplane_brand; ?>">
     		<input type="hidden" name="flight_date" value="<?php echo $flight_date; ?>">
     		<input type="hidden" name="departure_time" value="<?php echo $departure_time; ?>">
     		<input type="hidden" name="arrival_time" value="<?php echo $arrival_time; ?>">
               <input type="hidden" name="noofseats" value="<?php echo $seats; ?>">
               <input type="hidden" name="airfare" value="<?php echo $airfare; ?>">
                <input type="hidden" name="discount" value="<?php echo $discount_amount; ?>">
     		<br>
     		<div class="text-center"><input type="submit" name="pay" value="Pay" class="btn btn-warning"></div>
     	</form>
     	</div>
     </div>


     <script>
    $(document).ready(function(){
        $('#displayform').on('click',function(){
            $('#showform').show();
        });
    });
</script>
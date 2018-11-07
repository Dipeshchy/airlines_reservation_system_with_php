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
     				 					$query2 = execute_query("SELECT * FROM airlines_reservation_system.discounts WHERE discount_id={$discount_id} ");
     				 					confirm($query2);
     				 					while($row2 = fetch_array($query2))
     				 					{
     				 						$discount_amount = $row2['discount_amount'];
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
     				 <td><?php 
     				 if(isset($_POST['sure']))
     				 {
     				 	$seats = $_POST['seats'];
     				 	$total = $airfare - $discount_amount; 
     				 	$grand_total = $seats * $total;
     				 	echo $grand_total;
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
     	
     	<div id="showform" style="display: block; text-align: center; display: none;"><h3 class="text-center text-primary"><i class="far fa-credit-card"></i> Payment</h3>
     	<form class="form-group" style="display: inline-block; margin-left: auto; margin-right: auto; text-align: left;">
     		
     		<input type="username" name="username" class="form-control" placeholder="Dhukuti Username">
     		<input type="password" name="password" class="form-control" placeholder="Dhukuti Password">
     		<input type="number" name="amount" class="form-control" placeholder="&#8377; <?php echo $grand_total; ?>" readonly>
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
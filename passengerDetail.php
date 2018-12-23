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
  <?php 

            include('includes/header.php');

         ?>
         <div class="row">
         <div class="col-md-7">
         	<h3 style="margin-left: 90px;" class="mt-4">Fill Up Passenger's Detail</h3>
         <form method="post" class="form-group" action="payment.php">
   <?php
     if (isset($_POST['confirmCount'])) {
      $passengerNumber = $_POST['passengerNumber'];
      // $_SESSION['passengerNumber'] = $passengerNumber;

      for ($i=1; $i <= $passengerNumber ; $i++) { 
      	
      	?>
      	<div class="form-group">
      	<label>Passenger <?php echo $i;  ?> Name: </label>
      	<input type="text" name="name<?php echo $i; ?>" class="form-control">
      	</div>


      	<div class="form-group">
      	<label>Passenger <?php echo $i;  ?> Age: </label>
      	<input type="number" name="age<?php echo $i; ?>" class="form-control">
      	</div>

      	<div class="form-group">
      	<label>Passenger <?php echo $i;  ?> Seat Number: </label>
      	
    <select name="seat<?php echo $i; ?>" class="form-control">
      	<?php 

			 $flight_id = $_SESSION['flight_id'];

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
			}
			for($j=1;$j<=$aeroplane_capacity;$j++) {
    	?>
      	<option value="<?php echo $j; ?>"><?php echo $j; ?></option>

   	<?php 
      }
      ?>
</select> 
        </div>

      	<?php 
      }
  
     }
?>
<input type="hidden" name="passengerNumber" value="<?php echo $passengerNumber; ?>">
<input type="submit" name="confirmPassenger" value="Confirm" class="btn btn-success">
</form>
</div>
<div class="col-md-3">
	<div class="card mt-4">
		<h1 style="padding-left: 20px;">Vacant Seats</h1>
	</div>
</div>
</div>
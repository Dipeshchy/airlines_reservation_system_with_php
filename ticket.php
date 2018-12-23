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
if(isset($_POST['pay']))
{



	$flight_id = $_POST['flight_id'];
	$passenger_id = $_POST['passenger_id']; 
	
	$airfare_total = $_POST['airfare_total'];
	$passenger_firstname = $_POST['passenger_firstname'];
	$passenger_lastname = $_POST['passenger_lastname'];
	$passenger_nationality = $_POST['passenger_nationality'];
	
	$passenger_address = $_POST['passenger_address'];
	$passenger_mobno = $_POST['passenger_mobno'];
	$passenger_email = $_POST['passenger_email'];
	$starting_airport = $_POST['starting_airport'];
	$destination = $_POST['destination'];
	$aeroplane_number = $_POST['aeroplane_number'];
	$aeroplane_brand = $_POST['aeroplane_brand'];
	$flight_date = $_POST['flight_date'];
	$arrival_time = $_POST['arrival_time'];
	$departure_time = $_POST['departure_time'];
	$seats = $_POST['noofseats'];


	$airfare = $_POST['airfare'];
	$discount = $_POST['discount'];
	$total = $_POST['total'];
	$discount_total = $_POST['discount_total'];
	$seat1 = $_POST['seat1'];
	$seat2 = $_POST['seat2'];
	$seat3 = $_POST['seat3'];
	$seat4 = $_POST['seat4'];
	$seat5 = $_POST['seat5'];

	$name1 = $_POST['name1'];
	$name2 = $_POST['name2'];
	$name3 = $_POST['name3'];
	$name4 = $_POST['name4'];
	$name5 = $_POST['name5'];
	

	$age1 = $_POST['age1'];
	$age2 = $_POST['age2'];
	$age3 = $_POST['age3'];
	$age4 = $_POST['age4'];
	$age5 = $_POST['age5'];
	
}



?>



<div class="container card">
	<h2 class="text-center" style="padding-top: 20px;">Airlines Ticket</h2>
	
	<hr>
	
	<h4 style="text-decoration: underline;">Airlines Detail</h4>
	<?php
	echo "<b>$aeroplane_brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $aeroplane_number</b>";
	 ?>
	 <b>From : <?php echo $starting_airport; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 	To : <?php echo $destination; ?> </b>
	 <b>Flight Date : <?php echo $flight_date; ?> </b>
	 <b>Departure Time : <?php echo $departure_time; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 	Arrival Time : <?php echo $arrival_time; ?> </b>
	 <b>Number of Seats : <?php echo $seats; ?> </b>
	 <b>Airfare per person : &#8377; <?php echo $airfare; ?> </b>
	 <b>Discount : &#8377; <?php echo $discount; ?> </b>
	 <b>Total Airfare : &#8377; <?php echo $airfare_total; ?> </b>

		<hr>
		<h4 style="text-decoration: underline;">Passenger Detail</h4>
		
		<table>
			<thead>
				<tr>
					<th>Passenger's Name </th>
					<th>Passenger's Age </th>
					<th>Seat Number </th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $name1; ?> </td>
					<td><?php echo $age1; ?> </td>
					<td><?php echo $seat1; ?> </td>

					<?php



					$query1 = "INSERT INTO airlines_reservation_system.tickets(flight_id,passenger_id,passenger_name,passenger_age,seat_number,status) VALUES('{$flight_id}' , '{$passenger_id}' , '{$name1}','{$age1}', '{$seat1}' , 'confirmed' )";
					$execute_query1 = mysqli_query($connection , $query1);
					if(!$execute_query1) {
						die("Error ".mysqli_error($connection));
					}

					?>
				</tr>

				<?php 
					if(isset($seat2)) {
						?>
				<tr>
					<td><?php echo $name2; ?> </td>
					<td><?php echo $age2; ?> </td>
					<td><?php echo $seat2; ?> </td>
				</tr>
						<?php
						$query2 = "INSERT INTO airlines_reservation_system.tickets(flight_id,passenger_id,passenger_name,passenger_age,seat_number,status) VALUES('{$flight_id}' , '{$passenger_id}' , '{$name2}','{$age2}', '{$seat2}' , 'confirmed' )";
					$execute_query2 = mysqli_query($connection , $query2);
					if(!$execute_query2) {
						die("Error ".mysqli_error($connection));
					}
					}
				?>

				<?php 
					if(isset($seat3)) {
						?>
				<tr>
					<td><?php echo $name3; ?> </td>
					<td><?php echo $age3; ?> </td>
					<td><?php echo $seat3; ?> </td>
				</tr>
						<?php
						$query3 = "INSERT INTO airlines_reservation_system.tickets(flight_id,passenger_id,passenger_name,passenger_age,seat_number,status) VALUES('{$flight_id}' , '{$passenger_id}' , '{$name3}','{$age3}', '{$seat3}' , 'confirmed' )";
					$execute_query3 = mysqli_query($connection , $query3);
					if(!$execute_query3) {
						die("Error ".mysqli_error($connection));
					}
					}
				?>

				<?php 
					if(isset($seat4)) {
						?>
				<tr>
					<td><?php echo $name4; ?> </td>
					<td><?php echo $age4; ?> </td>
					<td><?php echo $seat4; ?> </td>
				</tr>
						<?php
						$query4 = "INSERT INTO airlines_reservation_system.tickets(flight_id,passenger_id,passenger_name,passenger_age,seat_number,status) VALUES('{$flight_id}' , '{$passenger_id}' , '{$name4}','{$age4}', '{$seat4}' , 'confirmed' )";
					$execute_query4 = mysqli_query($connection , $query4);
					if(!$execute_query4) {
						die("Error ".mysqli_error($connection));
					}
					}
				?>

				<?php 
					if(isset($seat5)) {
						?>
				<tr>
					<td><?php echo $name5; ?> </td>
					<td><?php echo $age5; ?> </td>
					<td><?php echo $seat5; ?> </td>
				</tr>
						<?php
						$query5 = "INSERT INTO airlines_reservation_system.tickets(flight_id,passenger_id,passenger_name,passenger_age,seat_number,status) VALUES('{$flight_id}' , '{$passenger_id}' , '{$name5}','{$age5}', '{$seat5}' , 'confirmed' )";
					$execute_query5 = mysqli_query($connection , $query5);
					if(!$execute_query5) {
						die("Error ".mysqli_error($connection));
					}
					}
				?>


			</tbody>
		</table>	
			
	<b><u>Booked By :</u><br> <?php echo $_SESSION['username']; ?> </b>
	<b>Name : <?php echo $passenger_firstname." ".$passenger_lastname; ?> </b>
	<b>Email : <?php echo $passenger_email; ?> </b>
	<b>Phone : <?php echo $passenger_mobno; ?> </b>
		


<?php


		$query1 = execute_query("SELECT * FROM airlines_reservation_system.flights WHERE flight_id={$flight_id} ");
		confirm($query1);
		while($row=fetch_array($query1))
		{
		$aeroplane_capacity1 = $row['aeroplane_capacity'];
		$reserved_seats = $row['reserved_seats'];
		$vacant_seats = $row['vacant_seats'];
		
	}
	
	$reserved_seats1 = $reserved_seats + $seats;
	$vacant_seats1 = $aeroplane_capacity1 - $reserved_seats1;
	$query6 = execute_query("UPDATE airlines_reservation_system.flights SET reserved_seats = {$reserved_seats1} ");
	confirm($query6);

	$query7 = execute_query("UPDATE airlines_reservation_system.flights SET vacant_seats = {$vacant_seats1} ");
	confirm($query7);

?>
<form method="post" action="tickets_pdf.php" target="_blank" class="mb-5">
	
			<input type="hidden" name="passenger_firstname" value="<?php echo $passenger_firstname; ?>">
     		<input type="hidden" name="passenger_lastname" value="<?php echo $passenger_lastname; ?>">	
         	<input type="hidden" name="passenger_id" value="<?php echo $passenger_id; ?>">
        	<input type="hidden" name="flight_id" value="<?php echo $flight_id; ?>">
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
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <input type="hidden" name="discount_total" value="<?php echo $discount_total; ?>">
            <input type="hidden" name="discount" value="<?php echo $discount; ?>">
            <input type="hidden" name="seat1" value="<?php echo $seat1; ?>">
            <input type="hidden" name="seat2" value="<?php echo $seat2; ?>">
            <input type="hidden" name="seat3" value="<?php echo $seat3; ?>">
            <input type="hidden" name="seat4" value="<?php echo $seat4; ?>">
            <input type="hidden" name="seat5" value="<?php echo $seat5; ?>">

            <input type="hidden" name="name1" value="<?php echo $name1; ?>">
            <input type="hidden" name="name2" value="<?php echo $name2; ?>">
            <input type="hidden" name="name3" value="<?php echo $name3; ?>">
            <input type="hidden" name="name4" value="<?php echo $name4; ?>">
            <input type="hidden" name="name5" value="<?php echo $name5; ?>">

            <input type="hidden" name="age1" value="<?php echo $age1; ?>">
            <input type="hidden" name="age2" value="<?php echo $age2; ?>">
            <input type="hidden" name="age3" value="<?php echo $age3; ?>">
            <input type="hidden" name="age4" value="<?php echo $age4; ?>">
            <input type="hidden" name="age5" value="<?php echo $age5; ?>">

            <div class="text-center">
            <input type="submit" name="generateticket" value="Generate Ticket PDF" class="btn btn-success">
        </div>
</form>
</div>

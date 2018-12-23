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

    <?php

    if (isset($_POST['confirmPassenger'])) {

    	$passengerNumber = $_POST['passengerNumber'];
    	
    		if(isset($_POST['name1'])){
    		$name1 = $_POST['name1'];
    		}
    		else {
    			$name1 = '';
    		}

 
    		if(isset($_POST['name2'])){
    		$name2 = $_POST['name2'];
  			}
  			else {
    			$name2 = '';
    		}

    	

    	if(isset($_POST['name3'])){
    		$name3 = $_POST['name3'];
}
else {
    			$name3 = '';
    		}


if(isset($_POST['name4'])){
    		$name4 = $_POST['name4'];
    	}
    	else {
    			$name4 = '';
    		}



    		if(isset($_POST['name5'])){
    		$name5 = $_POST['name5'];
 }
 else {
    			$name5 = '';
    		}



 if(isset($_POST['age1'])){
    		$age1 = $_POST['age1'];
    }
else {
	$age1 ='';
}


    if(isset($_POST['age2'])){
    		$age2 = $_POST['age2'];
    	}
    	else {
	$age2 ='';
}
    	
    	
if(isset($_POST['age3'])){
    		$age3 = $_POST['age3'];
    }
    else {
	$age3 ='';
}

    	if(isset($_POST['age4'])){
    		$age4 = $_POST['age4'];
    }
    else {
	$age4 ='';
}
    	

    if(isset($_POST['age5'])){	
    		$age5 = $_POST['age5'];
    }
    else {
	$age5 ='';
}
    
    if(isset($_POST['seat1'])){
    		 $seat1 = $_POST['seat1'];
    }
else {
	$seat1 = '';
}

    if(isset($_POST['seat2'])){
    		$seat2 = $_POST['seat2'];
}
else {
	$seat2 = '';
}

if(isset($_POST['seat3'])){
    		$seat3 = $_POST['seat3'];

    }
    else {
	$seat3 = '';
}

if(isset($_POST['seat4'])){
    		$seat4 = $_POST['seat4'];
    }
else {
	$seat4 = '';
}

    if(isset($_POST['seat5'])){
    		$seat5 = $_POST['seat5'];
    }
    else {
	$seat5 = '';
}


$passengerNo = $_POST['passengerNumber'];
    }


    ?>


    <?php 
			$username = $_SESSION['username'];

			$query = execute_query("SELECT * FROM airlines_reservation_system.passengers WHERE username='{$username}' ");
			confirm($query);
			while($row=fetch_array($query))
			{
			$passenger_id = $row['passenger_id'];
			$passenger_firstname = $row['passenger_firstname'];
			$passenger_lastname = $row['passenger_lastname'];
			$passenger_age = $row['passenger_age'];
			$passenger_email = $row['passenger_email'];
			$passenger_mobno = $row['passenger_mobno'];
			$passenger_address = $row['passenger_address'];
			$passenger_nationality = $row['passenger_nationality'];
			$passenger_image = $row['passenger_image'];

			}

     ?>

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

			$query2 = execute_query("SELECT * FROM airlines_reservation_system.discounts WHERE discount_id={$discount_id} ");
			confirm($query2);
			while($row2 = fetch_array($query2))
			{
			   $discount_amount = $row2['discount_amount'];
			   $discount_title = $row2['discount_title'];
			}

			$total = $airfare * $passengerNo;
			$discount_total = $discount_amount * $passengerNo;
			$grand_total = $total - $discount_total;

     		?>


     	
     		<?php
				$query4 = execute_query("SELECT * FROM airlines_reservation_system.routes WHERE route_id={$route_id} ");
				confirm($query4);
				while($row4=fetch_array($query4))
				{
				     $starting_airport = $row4['starting_airport'];
				     $destination = $row4['destination'];
				}


     		?>




     <?php
			$query3 = execute_query("SELECT * FROM airlines_reservation_system.aeroplanes WHERE aeroplane_id={$aeroplane_id} ");
			confirm($query3);
			while($row3=fetch_array($query3))
			{
			$aeroplane_number = $row3['aeroplane_number'];

			$aeroplane_brand = $row3['aeroplane_brand'];

			}



     ?>




    	<div id="showform" style="display: block; text-align: center; width: 500px;margin: auto;" class="card mt-5">
    		<h3 class="text-center text-primary" style="padding-top: 10px;"><i class="far fa-credit-card"></i> Payment</h3>
     	<form class="form-group" style="display: inline-block; margin-left: auto; margin-right: auto; text-align: left;" method="post" action="ticket.php" target="_blank">
     		
     		<input type="username" name="username" class="form-control" placeholder="Esewa Username">
     		<input type="password" name="password" class="form-control" placeholder="Esewa Password">
			<input type="number" name="airfare_total" class="form-control" placeholder="<?php echo $grand_total; ?>" readonly value="<?php echo $grand_total; ?>">


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
            <input type="hidden" name="noofseats" value="<?php echo $passengerNumber; ?>">
            <input type="hidden" name="airfare" value="<?php echo $airfare; ?>">
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <input type="hidden" name="discount_total" value="<?php echo $discount_total; ?>">
            <input type="hidden" name="discount" value="<?php echo $discount_amount; ?>">
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
            
     		




     		

     		
     		<br>
     		<div class="text-center"><input type="submit" name="pay" value="Pay" class="btn btn-warning"></div>
     	</form>



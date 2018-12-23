<?php

include('database/db.php');
?>

<?php 


if(isset($_POST['generateticket']))
{
	$flight_id = $_POST['flight_id'];
	$passenger_id = $_POST['passenger_id']; 
	
	
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





require("fpdf/fpdf.php");
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",24);
$pdf->Cell(50,20,'Airlines Ticket','B',1,'C');
$pdf->SetFont("Arial","B",18);
$pdf->Cell(50,20,$aeroplane_brand,0,0);
$pdf->Cell(50,20,$aeroplane_number,0,1);
$pdf->SetFont("Arial","B",16);
$pdf->Cell(45,10,"From  ",0,0);
$pdf->Cell(30,10,$starting_airport,0,1);
$pdf->Cell(45,10,"To  ",0,0);
$pdf->Cell(30,10,$destination,0,1);

$pdf->Cell(45,10,"Flight Date  ",0,0);
$pdf->Cell(30,10,$flight_date,0,1);
$pdf->Cell(45,10,"Departure Time  ",0,0);
$pdf->Cell(30,10,$departure_time,0,1);
$pdf->Cell(45,10,"Arrival Time  ",0,0);
$pdf->Cell(30,10,$arrival_time,0,1);

$pdf->Cell(50,10,"Number Of Seats",0,0);
$pdf->Cell(30,10,$seats,0,1);


$pdf->Cell(45,10,"Airfare",0,0);
$pdf->Cell(10,10,'Rs.',0,0);
$pdf->Cell(30,10,$airfare,0,1);

$pdf->Cell(45,10,"Discount",0,0);
$pdf->Cell(10,10,'Rs.',0,0);
$pdf->Cell(30,10,$discount,0,1);

$pdf->Cell(45,10,'Total Fare','B',0);
$pdf->Cell(10,10,'Rs.','B',0);
$pdf->Cell(30,10,$total,'B',1);

$pdf->SetFont("Arial","B",20);
$pdf->Cell(30,15,"Passenger Detail",0,1);
$pdf->SetFont("Arial","B",18);

$pdf->Cell(65,10,"Passenger 1",'B',1);
$pdf->Cell(45,10,"Name",0,0);
$pdf->Cell(60,10,$name1,0,1);
$pdf->Cell(40,10,"Age",0,0);
$pdf->Cell(30,10,$age1,0,1);
$pdf->Cell(45,10,"Seat Number",'B',0);
$pdf->Cell(30,10,$seat1,'B',1);
if(isset($name2))
{
$pdf->Cell(65,10,"Passenger 2",'B',1);
$pdf->Cell(45,10,"Name",0,0);
$pdf->Cell(60,10,$name2,0,1);
$pdf->Cell(40,10,"Age",0,0);
$pdf->Cell(30,10,$age2,0,1);
$pdf->Cell(45,10,"Seat Number",'B',0);
$pdf->Cell(30,10,$seat2,'B',1);
}

if(isset($name3))
{
	$pdf->Cell(65,10,"Passenger 3",'B',1);
$pdf->Cell(45,10,"Name",0,0);
$pdf->Cell(60,10,$name3,0,1);
$pdf->Cell(40,10,"Age",0,0);
$pdf->Cell(30,10,$age3,0,1);
$pdf->Cell(45,10,"Seat Number",'B',0);
$pdf->Cell(30,10,$seat3,'B',1);
}

if(isset($name4))
{
	$pdf->Cell(65,10,"Passenger 4",'B',1);
$pdf->Cell(45,10,"Name",0,0);
$pdf->Cell(60,10,$name4,0,1);
$pdf->Cell(40,10,"Age",0,0);
$pdf->Cell(30,10,$age4,0,1);
$pdf->Cell(45,10,"Seat Number",'B',0);
$pdf->Cell(30,10,$seat4,'B',1);
}

if(isset($name5))
{
	$pdf->Cell(65,10,"Passenger 5",'B',1);
$pdf->Cell(45,10,"Name",0,0);
$pdf->Cell(60,10,$name5,0,1);
$pdf->Cell(40,10,"Age",0,0);
$pdf->Cell(30,10,$age5,0,1);
$pdf->Cell(45,10,"Seat Number",'B',0);
$pdf->Cell(30,10,$seat5,'B',1);
}
// if(isset($seat3))
// {
// 	$pdf->Cell(10,10,$seat3,0,0);
// }
// if(isset($seat4))
// {
// 	$pdf->Cell(10,10,$seat4,0,0);
// }
// if(isset($seat5))
// {
// 	$pdf->Cell(10,10,$seat5,0,0);
// }








$pdf->Cell(30,10,"Booked By :  ",'B',1);
$pdf->Cell(35,10,"Firstname  ",'T',0);
$pdf->Cell(30,10,$passenger_firstname,'T',1);
$pdf->Cell(35,10,"Lastname  ",0,0);
$pdf->Cell(30,10,$passenger_lastname,0,1);
$pdf->Cell(30,10,"Address  ",0,0);
$pdf->Cell(30,10,$passenger_address,0,1);
$pdf->Cell(30,10,"Mobile  ",0,0);
$pdf->Cell(30,10,$passenger_mobno,0,1);
$pdf->Cell(30,10,"Email  ",0,0);
$pdf->Cell(30,10,$passenger_email,0,1);


$pdf->Output();
}


 ?>

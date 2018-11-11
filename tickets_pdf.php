<?php 

session_start();


if(isset($_POST['pay']))
{
	
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
	$seat1 = $_POST['seat1'];
	$seat2 = $_POST['seat2'];
	$seat3 = $_POST['seat3'];
	$seat4 = $_POST['seat4'];
	$seat5 = $_POST['seat5'];
	$seat6 = $_POST['seat6'];
	$seat7 = $_POST['seat7'];
	$seat8 = $_POST['seat8'];
	$seat9 = $_POST['seat9'];
	$seat10 = $_POST['seat10'];



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

$pdf->Cell(50,10,"Seat Number",0,0);
$pdf->Cell(10,10,$seat1,0,0);

if(isset($seat2))
{
	$pdf->Cell(10,10,$seat2,0,0);
}
if(isset($seat3))
{
	$pdf->Cell(10,10,$seat3,0,0);
}
if(isset($seat4))
{
	$pdf->Cell(10,10,$seat4,0,0);
}
if(isset($seat5))
{
	$pdf->Cell(10,10,$seat5,0,0);
}
if(isset($seat6))
{
	$pdf->Cell(10,10,$seat6,0,0);
}

if(isset($seat7))
{
	$pdf->Cell(10,10,$seat7,0,0);
}
if(isset($seat8))
{
	$pdf->Cell(10,10,$seat8,0,0);
}
if(isset($seat9))
{
	$pdf->Cell(10,10,$seat9,0,0);
}
if(isset($seat10))
{
	$pdf->Cell(10,10,$seat10,0,0);
}




$pdf->Cell(45,10,"",0,1);
$pdf->Cell(45,10,"Airfare",0,0);
$pdf->Cell(10,10,'Rs.',0,0);
$pdf->Cell(30,10,$airfare,0,1);

$pdf->Cell(45,10,"Discount",0,0);
$pdf->Cell(10,10,'Rs.',0,0);
$pdf->Cell(30,10,$discount,0,1);

$pdf->Cell(45,10,'Total Fare','B',0);
$pdf->Cell(10,10,'Rs.','B',0);
$pdf->Cell(30,10,$airfare_total,'B',1);

$pdf->Cell(30,15,"Passenger Detail",0,1);
$pdf->SetFont("Arial","",16);
$pdf->Cell(30,10,"Firstname  ",'T',0);
$pdf->Cell(30,10,$passenger_firstname,'T',1);
$pdf->Cell(30,10,"Lastname  ",0,0);
$pdf->Cell(30,10,$passenger_lastname,0,1);
$pdf->Cell(30,10,"Address  ",0,0);
$pdf->Cell(30,10,$passenger_address,0,1);
$pdf->Cell(30,10,"Mobile  ",0,0);
$pdf->Cell(30,10,$passenger_mobno,0,1);
$pdf->Cell(30,10,"Email  ",0,0);
$pdf->Cell(30,10,$passenger_email,0,1);
$pdf->Cell(30,10,"Nationality  ",0,0);
$pdf->Cell(30,10,$passenger_nationality,0,1);

$pdf->Output();
}

unset($_SESSION['seat1']);
unset($_SESSION['seat2']);
unset($_SESSION['seat3']);
unset($_SESSION['seat4']);
unset($_SESSION['seat5']);
unset($_SESSION['seat6']);
unset($_SESSION['seat7']);
unset($_SESSION['seat8']);
unset($_SESSION['seat9']);
unset($_SESSION['seat10']);
unset($_SESSION['seats']);
unset($_SESSION['grand_total']);
 ?>

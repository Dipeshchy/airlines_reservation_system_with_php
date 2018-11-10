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
	$seatselected1 = $_POST['seatselected1'];
	$seatselected2 = $_POST['seatselected2'];
	$seatselected3 = $_POST['seatselected3'];
	$seatselected4 = $_POST['seatselected4'];
	$seatselected5 = $_POST['seatselected5'];
	$seatselected6 = $_POST['seatselected6'];
	$seatselected7 = $_POST['seatselected7'];
	$seatselected8 = $_POST['seatselected8'];
	$seatselected9 = $_POST['seatselected9'];
	$seatselected10 = $_POST['seatselected10'];


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
$pdf->Cell(10,10,$seatselected1,0,0);

// if(!empty($seatselected2))
// {
// 	$pdf->Cell(10,10,$seatselected2,0,0);
// }

// if(!empty($seatselected3))
// {
// 	$pdf->Cell(10,10,$seatselected3,0,0);
// }
// if(!empty($seatselected4))
// {
// 	$pdf->Cell(10,10,$seatselected4,0,0);
// }
// if(!empty($seatselected5))
// {
// 	$pdf->Cell(10,10,$seatselected5,0,0);
// }
// if(!empty($seatselected6))
// {
// 	$pdf->Cell(10,10,$seatselected6,0,0);
// }
// if(!empty($seatselected7))
// {
// 	$pdf->Cell(10,10,$seatselected7,0,0);
// }
// if(!empty($seatselected8))
// {
// 	$pdf->Cell(10,10,$seatselected8,0,0);
// }
// if(!empty($seatselected9))
// {
// 	$pdf->Cell(10,10,$seatselected9,0,0);
// }
// if(!empty($seatselected10))
// {
// 	$pdf->Cell(10,10,$seatselected10,0,0);
// }





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

unset($_SESSION['seatselected1']);
unset($_SESSION['seatselected2']);
unset($_SESSION['seatselected3']);
unset($_SESSION['seatselected4']);
unset($_SESSION['seatselected5']);
unset($_SESSION['seatselected6']);
unset($_SESSION['seatselected7']);
unset($_SESSION['seatselected8']);
unset($_SESSION['seatselected9']);
unset($_SESSION['seatselected10']);
unset($_SESSION['seats']);
unset($_SESSION['grand_total']);
 ?>

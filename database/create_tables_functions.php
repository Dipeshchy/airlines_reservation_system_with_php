<?php

// ******** HELPING FUNCTIONS ******************

function execute_query1($query)
{
    global $connection;
    return mysqli_query($connection,$query);
}


function confirm1($result)
{
    global $connection;
    if(!$result)
    {
        return die("Failed".mysqli_error($connection));
    }
}


// ***************** CREATE TABLE FUNCTIONS ******************
function admin_table()
{
	 global $connection;
$query_create_admin_table = execute_query1("CREATE TABLE IF NOT EXISTS airlines_reservation_system.admin (
	admin_id int AUTO_INCREMENT PRIMARY KEY,
	admin_username varchar(255),
	admin_firstname varchar(255),
	admin_lastname varchar(255),
	admin_password varchar(255),
	admin_image text
	)");

confirm1($query_create_admin_table);
}

function passengers_table()
{

global $connection;
$query_create_passengers_table = execute_query1("CREATE TABLE IF NOT EXISTS airlines_reservation_system.passengers (
	passenger_id int AUTO_INCREMENT PRIMARY KEY,
	username varchar(255),
	passenger_firstname varchar(255),
	passenger_lastname varchar(255),
	passenger_age int(3),
	passenger_email varchar(255),
	passenger_password varchar(255),
	passenger_mobno varchar(255),
	passenger_address varchar(255),
	passenger_nationality varchar(255),

	passenger_image text
	)");

confirm1($query_create_passengers_table);
}



function aeroplane_table()
{

global $connection;
$query_create_aeroplane_table = execute_query1("CREATE TABLE IF NOT EXISTS airlines_reservation_system.aeroplanes(
aeroplane_id int AUTO_INCREMENT PRIMARY KEY,
aeroplane_number varchar(32),
aeroplane_brand varchar(255)
)
");
confirm1($query_create_aeroplane_table);
}


function route_table()
{
global $connection;
$query_create_route_table = execute_query1("CREATE TABLE IF NOT EXISTS airlines_reservation_system.routes(
route_id int AUTO_INCREMENT PRIMARY KEY UNIQUE,
starting_airport varchar(255),
destination varchar(255)
) ");
confirm1($query_create_route_table);
}

function airfare_table()
{
global $connection;
$query_create_airfare_table = execute_query1("CREATE TABLE IF NOT EXISTS airlines_reservation_system.airfare(
airfare_id int AUTO_INCREMENT PRIMARY Key,
aeroplane_id int,
route_id int,
fare float
) ");
confirm1($query_create_airfare_table);
}


function flight_schedule_table()
{
global $connection;
$query_create_flightschedule_table = execute_query1("CREATE TABLE IF NOT EXISTS airlines_reservation_system.flightschedules(
flight_schedule_id int AUTO_INCREMENT PRIMARY KEY,
flight_date DATE,
departure TIME,
arrival TIME,
aeroplane_id int
) ");
confirm1($query_create_flightschedule_table);
}

function discounts_table()
{
global $connection;
$query_create_discounts_table = execute_query1("CREATE TABLE IF NOT EXISTS airlines_reservation_system.discounts(
discount_id int AUTO_INCREMENT PRIMARY KEY,
discount_title varchar(255),
discount_amount float,
discount_description varchar(255)
) ");
confirm1($query_create_discounts_table);
}

// function transaction_table()
// {
// global $connection;
// $query_create_transaction_table = execute_query1("CREATE TABLE IF NOT EXISTS airlines_reservation_system.transactions(
// transaction_id int AUTO_INCREMENT PRIMARY KEY,
// booking_date DATETIME,
// departure_date DATE,
// passenger_id int(32),
// number_of_passenger int,
// aeroplane_id int,
// status varchar(255),
// charges float,
// discount float,
// total_charge float
// ) ");
// confirm1($query_create_transaction_table);
// }


function announcements_table()
{
global $connection;
$query_create_announcements_table = execute_query1("CREATE TABLE IF NOT EXISTS airlines_reservation_system.announcements(
announcements_id int AUTO_INCREMENT PRIMARY KEY,
announcements_title varchar(255),
announcements_image text,
announcements_detail varchar(255)
)");
confirm1($query_create_announcements_table);
}


function airports_table()
{
global $connection;
$query_create_airports_table = execute_query1("CREATE TABLE IF NOT EXISTS airlines_reservation_system.airports(
airport_id int AUTO_INCREMENT PRIMARY KEY,
airport_location varchar(255)

) ");
confirm1($query_create_airports_table);
}

function flights_table()
{
	global $connection;
$query_create_flights_table = execute_query1("CREATE TABLE IF NOT EXISTS airlines_reservation_system.flights(
flight_id int AUTO_INCREMENT PRIMARY KEY,
aeroplane_id int,
aeroplane_capacity int,
reserved_seats int,
vacant_seats int,

flight_date DATE,
departure_time TIME,
arrival_time TIME,
route_id int,
airfare int,

discount_id int,
status varchar(255)

) ");
	confirm1($query_create_flights_table);
}


function faqs_table()
{
	$query_create_faqs_table = execute_query1("CREATE TABLE IF NOT EXISTS airlines_reservation_system.faqs(
		faq_id int AUTO_INCREMENT PRIMARY KEY,
		faq_question varchar(255),
		faq_answer varchar(255)
		) ");
	confirm1($query_create_faqs_table);
}

// function seats_table()
// {
// 	$query_create_seats_table = execute_query1("CREATE TABLE IF NOT EXISTS airlines_reservation_system.seats(
// 		seat_id int AUTO_INCREMENT PRIMARY KEY,
// 		aeroplane_id int,
// 		passenger_id int,
// 		aeroplane_capacity int,
// 		seat_number varchar(150)
// ) ");
// }

function tickets_table() {
	global $connection;
	$query_create_tickets_table = execute_query1("CREATE TABLE IF NOT EXISTS airlines_reservation_system.tickets(
ticket_id int AUTO_INCREMENT PRIMARY KEY,

flight_id int,
passenger_id int,
passenger_name varchar(255),
passenger_age int,
seat_number varchar(255),

status varchar(255) 
) ");
	confirm1($query_create_tickets_table);
}

?>
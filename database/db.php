<?php

$connection = mysqli_connect('localhost','root','');
mysqli_query($connection,"CREATE DATABASE IF NOT EXISTS airlines_reservation_system");
$query_create_admin_table = "CREATE TABLE IF NOT EXISTS airlines_reservation_system.admin (
	admin_id int AUTO_INCREMENT PRIMARY KEY,
	admin_username varchar(255),
	admin_firstname varchar(255),
	admin_lastname varchar(255),
	admin_password varchar(255),
	admin_image text
	)";
$create = mysqli_query($connection,$query_create_admin_table);
if(!$create)
{
	die('Failed'.mysqli_error($connection));
}

$query_create_passengers_table = "CREATE TABLE IF NOT EXISTS airlines_reservation_system.passengers (
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
	)";
$create = mysqli_query($connection,$query_create_passengers_table);
if(!$create)
{
	die('Failed'.mysqli_error($connection));
}

$query_create_aeroplane_table = "CREATE TABLE IF NOT EXISTS airlines_reservation_system.aeroplanes(
aeroplane_id int AUTO_INCREMENT PRIMARY KEY,
aeroplane_number varchar(32),
aeroplane_brand varchar(255),
aeroplane_capacity int(10)
)
";
$create = mysqli_query($connection,$query_create_aeroplane_table);
if(!$create)
{
	die('Failed'.mysqli_error($connection));
}

$query_create_route_table = "CREATE TABLE IF NOT EXISTS airlines_reservation_system.routes(
route_id int AUTO_INCREMENT PRIMARY KEY UNIQUE,
starting_airport varchar(255),
destination varchar(255)
) ";
$create = mysqli_query($connection,$query_create_route_table);
if(!$create)
{
	die('Failed'.mysqli_error($connection));
}

$query_create_airfare_table = "CREATE TABLE IF NOT EXISTS airlines_reservation_system.airfare(
airfare_id int AUTO_INCREMENT PRIMARY Key,
aeroplane_id int,
route_id int,
fare float
) ";
$create = mysqli_query($connection,$query_create_airfare_table);
if(!$create)
{
	die('Failed'.mysqli_error($connection));
}

$query_create_flightschedule_table = "CREATE TABLE IF NOT EXISTS airlines_reservation_system.flightschedules(
flight_schedule_id int AUTO_INCREMENT PRIMARY KEY,
flight_date DATE,
departure TIME,
arrival TIME,
aeroplane_id int
) ";
$create = mysqli_query($connection,$query_create_flightschedule_table);
if(!$create)
{
	die('Failed'.mysqli_error($connection));
}

$query_create_discounts_table = "CREATE TABLE IF NOT EXISTS airlines_reservation_system.discounts(
discount_id int AUTO_INCREMENT PRIMARY KEY,
discount_title varchar(255),
discount_amount float,
discount_description varchar(255)
) ";
$create = mysqli_query($connection,$query_create_discounts_table);
if(!$create)
{
	die('Failed'.mysqli_error($connection));
}

$query_create_transaction_table = "CREATE TABLE IF NOT EXISTS airlines_reservation_system.transactions(
transaction_id int AUTO_INCREMENT PRIMARY KEY,
booking_date DATETIME,
departure_date DATE,
passenger_id int(32),
number_of_passenger int,
aeroplane_id int,
status varchar(255),
charges float,
discount float,
total_charge float
) ";
$create = mysqli_query($connection,$query_create_transaction_table);
if(!$create)
{
	die('Failed'.mysqli_error($connection));
}


$query_create_announcements_table = "CREATE TABLE IF NOT EXISTS airlines_reservation_system.announcements(
announcements_id int AUTO_INCREMENT PRIMARY KEY,
announcements_title varchar(255),
announcements_image text,
announcements_detail varchar(255)
)";
$create = mysqli_query($connection , $query_create_announcements_table);
if(!$create)
{
	die('Failed'.mysqli_error($connection));
}
?>
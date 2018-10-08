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




?>
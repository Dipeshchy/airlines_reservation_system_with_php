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

$query_create_user_table = "CREATE TABLE IF NOT EXISTS airlines_reservation_system.user (
	user_id int AUTO_INCREMENT PRIMARY KEY,
	username varchar(255),
	user_firstname varchar(255),
	user_lastname varchar(255),
	user_email varchar(255),
	user_password varchar(255),
	user_mobno varchar(255),
	user_address varchar(255),

	user_image text
	)";
$create = mysqli_query($connection,$query_create_user_table);
if(!$create)
{
	die('Failed'.mysqli_error($connection));
}




?>
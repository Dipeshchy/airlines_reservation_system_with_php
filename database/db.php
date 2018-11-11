<?php

$connection = mysqli_connect('localhost','root','');
mysqli_query($connection,"CREATE DATABASE IF NOT EXISTS airlines_reservation_system");

include_once('create_tables_functions.php');


admin_table();
passengers_table();
aeroplane_table();
route_table();
airfare_table();
flight_schedule_table();
discounts_table();
transaction_table();
announcements_table();
airports_table();
flights_table();
faqs_table();
seats_table()

?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "barbershop_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("connect fialed . mysqli_connect_error()");
} else {
	echo "Успех";
}

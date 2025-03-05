<?php

require_once('db.php');

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) || empty($password)) {
	echo "заполните все поля";
} else {
	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			header("Location: admin.php");
		}
	} else {
		header("Location: login.php?error=" . urlencode("Неверное имя пользователя или пароль"));
	}
}

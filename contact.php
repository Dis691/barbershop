<?php
header('Content-Type: application/json');
$pdo = new PDO("mysql:host=localhost;dbname=barbershop_db", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$name = $_POST['name'] ?? '';
$number = $_POST['number'] ?? '';
$message = $_POST['message'] ?? '';

if (empty(trim($name)) || empty(trim($number)) || empty(trim($message))) {
	header("Location: contact.html");
}

$stmt = $pdo->prepare("INSERT INTO submission (name, number, message) VALUES (?, ?, ?)");
$stmt->execute([$name, $number, $message]);

header("Location: contact.html");

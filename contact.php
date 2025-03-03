<?php
header('Content-Type: application/json');
$pdo = new PDO("mysql:host=localhost;dbname=barbershop_db", "root", ""); // Убедитесь, что база данных — barbershop_db
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$name = $_POST['name'] ?? '';
$number = $_POST['number'] ?? '';
$message = $_POST['message'] ?? '';

if (empty(trim($name)) || empty(trim($number)) || empty(trim($message))) {
	echo json_encode(["success" => false, "message" => "All fields required"]);
	exit;
}

$stmt = $pdo->prepare("INSERT INTO submission (name, number, message) VALUES (?, ?, ?)");
$stmt->execute([$name, $number, $message]);

echo json_encode(["success" => true, "message" => "Saved successfully"]);

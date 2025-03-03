<?php
// Подключение к базе данных
$pdo = new PDO("mysql:host=localhost;dbname=barbershop_db", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Получение всех записей из таблицы submission
$stmt = $pdo->query("SELECT * FROM submission ORDER BY created_at DESC");
$submissions = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel</title>
	<!-- Подключение Bootstrap (опционально, для стилизации) -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container mt-5">
		<h2>Admin Panel</h2>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Number</th>
					<th>Message</th>
					<th>Created At</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($submissions as $submission): ?>
					<tr>
						<td><?php echo htmlspecialchars($submission['id']); ?></td>
						<td><?php echo htmlspecialchars($submission['name']); ?></td>
						<td><?php echo htmlspecialchars($submission['number']); ?></td>
						<td><?php echo htmlspecialchars($submission['message']); ?></td>
						<td><?php echo htmlspecialchars($submission['created_at']); ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<!-- Подключение Bootstrap JS (опционально) -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link
		href="https://fonts.googleapis.com/css2?family=Niramit:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap"
		rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="styles.css">
	<title>Login - Barbershop</title>
</head>

<body>
	<div class="adaptive">
		<nav class="navbar navbar-expand-md navbar-light">
			<a class="navbar-brand" href="#"><img src="images/logo.png" alt="navIcon"></a>
			<div class="container-fluid">
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0 top-menu">
						<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<main>
			<div class="login-page">
				<div class="wrapper">
					<form action="reg.php" method="POST">
						<h1>Login</h1>
						<div class="input-box">
							<input type="text" name="username" placeholder="Username" required>
							<i class="bx bxs-user"></i>
						</div>
						<div class="input-box">
							<input type="password" name="password" placeholder="Password" required>
							<i class="bx bxs-lock-alt"></i>
						</div>
						<button type="submit" class="btn">Login</button>
					</form>
				</div>
			</div>


		</main>

		<div class="toast-container position-fixed bottom-0 end-0 p-3">
			<div id="errorToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
				<div class="toast-header">
					<strong class="me-auto">Ошибка<strong>
							<small>Только что</small>
							<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Закрыть"></button>
				</div>
				<div class="toast-body">
					<?php echo isset($_GET['error']) ? htmlspecialchars($_GET['error']) : 'Произошла ошибка'; ?>
				</div>
			</div>
		</div>

	</div>

	<script>
		document.addEventListener('DOMContentLoaded', () => {
			const toastElement = document.getElementById('errorToast');
			const toast = bootstrap.Toast.getOrCreateInstance(toastElement);

			// Показываем тост, если есть параметр error в URL
			<?php if (isset($_GET['error'])): ?>
				toast.show();
			<?php endif; ?>
		});
	</script>
</body>

</html>
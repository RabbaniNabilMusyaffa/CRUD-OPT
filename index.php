<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
	<link rel="shortcut icon" href="foto/favicon.ico" type="image/x-icon">
</head>

<body>
	<div action="" class="login">
		<h1>Login</h1>
		<form method="post" action="login_request.php">
			<label for="username">
				<i class="fas fa-user">Username: </i>
			</label>
			<input type="text" name="username" placeholder="USERNAME" required>
			<label for="password">
				<i class="fas fa-lock">Password: </i>
			</label><br><br>
			<input type="password" name="password" placeholder="PASSWORD" required>
			<input type="submit" value="Login">
		</form>
	</div>
</body>

</html>
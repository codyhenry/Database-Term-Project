<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>	</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<nav>
			<div class="wrapper">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="events.php">Find Events </a></li>
					<li><a href="signup.php">Signup</a></li>
					<li><a href="login.php">Log in</a></li>
				</ul>
			</div>
		</nav>
	
		<!-- action will take you to the next page-->
		<form action="createUser.php" method="POST">
			<input type="text" name="first" placeholder="First Name">
			<input type="text" name="last" placeholder="Last Name">
			<input type="text" name="email" placeholder="E-mail">
			<br><input type="password" name="password" placeholder="password">
			<br><select name="security">
				<option value="student">Student</option>
				<option value="admin">Admin</option>
				<option value="superadmin">Super Admin</option>
				</select>
			<br><button type="submit" name="submit">Signup</button>
		</form>
	
	
	</body>
</html>
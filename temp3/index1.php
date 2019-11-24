
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login </title>
		<link rel="stylesheet" href="style1.css">
		<style>
body
{
	background-image: url("yy.jpg");
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
	min-height: 550px;
}
</style>
		
	</head>
	<body>
		<div class="login">
			<h1>Login page for SuperAdmin</h1>
			<form action="authentication.php" method="post">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
		    </form>
			
			
		</div>
		
		
		
	</body>
</html>
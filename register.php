<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title><center>
<link href="register.css" rel="stylesheet">
</head>
<img src="wmcct65.jpg" id="wmcct65logo">
<body><div>
<h1>
	WMCC <br>Database Registration
</h1>

	<form name="registration">
		<label>First Name:<br></label><br>
		<input type="text" name="firstname" id="firstnamefield"><br><br>
		<label>Last Name:<br></label><br>
		<input type="text" name="lastname" id="lastnamefield"><br><br>
		<label>Username: <br></label><br>
		<input type="text" name="username" id="usernamefield"><br><br>
		<label>Password: <br></label><br>
		<input type="password" name="password" id="passwordfield"><br><br>
		<label>Phone Number <br></label><br>
		<input type="text" name="phonenumber" id="passwordfield"><br><br>
		<label>E-Mail <br></label><br>
		<input type="email" name="email" id="passwordfield"><br><br>
		<label>Gender <br></label><br>
		<select name="gender">
			<option value="male">Male</option>
			<option value="female">female</option>
		</select><br><br> 
		<label>Grade <br></label><br>
		<select name="gender">
			<option value="senior">Senior(12)</option>
			<option value="female">Junior(11)</option>
		</select><br><br>
		<label>Session <br></label><br>
		<select name="gender">
			<option value="session1">Session 1</option>
			<option value="session2">Session 2</option>
		</select><br><br>
		<input type="submit" value="Register" id="button">
	</form>
    <br><a href="index.php">Back to Login</a>
</div></body></center>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<h1>Buat Account Baru</h1>
<h2>Sign Up Form</h2>
<form action="/welcome" method="POST">
	@csrf
	<label for="firstname">First Name: </label> <br><br>
	<input type="text" name="firstname" id="firstname"><br><br>

	<label for="lastname">Last Name: </label><br><br>
	<input type="text" name="lastname" id="lastname"><br><br>

	Gender: <br><br>
	<input type="radio" name="gender">Male<br>
	<input type="radio" name="gender">Female<br>
	<input type="radio" name="gender">Other<br>

	<br>Nationality:<br><br>
	<select name="nationality">
		<option>Indonesian</option>		
		<option>Singaporean</option>
		<option>Malaysian</option>
		<option>Australian</option>
	</select>

	<p>Language Spoken: </p>
	<input type="checkbox" name="language">Bahasa Indonesia <br>
	<input type="checkbox" name="language">English <br>
	<input type="checkbox" name="language">Other <br>

	<p>Bio:</p>
	<textarea style="resize:none;width:200px;height:100px;"></textarea><br>
	<button type="submit" name="signup">Sign Up</button>
</form>
</body>
</html>
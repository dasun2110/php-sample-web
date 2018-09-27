<?php 
	session_start();
?>
<table border="0" width="100%" bgcolor="#3b5998">
<tr><td height="10px"></td></tr>
	<tr>
		<td width="100px"></td>
		<td><font style="font-family:Algerian" size="+3" color="#FFFFFF">Android Tech Blogspot</font></td>
		<td></td>
	</tr>
</table>

<html>
	<head>
		<meta charset="utf-8">
		<title>documrnt</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style1.css">
	</head>
	<body>
	<header>
	<nav>
		<u1>
			<!--<form2>
			cyber tech blogspot
			</form2>-->
			<li><a href="index.php">HOME</a></li>
		
			<li><a href="signup.php">SIGNUP</a></li>
			
			
		
		</u1>
	</nav>
</header> 
	
	
		<div class="header1">
				<h2>Register</h2>
		
		</div>
		<form action="includes/signup.inc.php" method="post">
			<div class="input-group">
				<label>Firstname</label>
				<input type="text" name="first" >
			
			</div>
			<div class="input-group">
				<label>Lastname</label>
				<input type="text" name="last" >
			
			</div>
			<div class="input-group">
				<label>Username</label>
				<input type="text" name="uid" >
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="pwd" >
			</div>
			<div class="input-group">
			
				<button type="submit" class="btn" >SIGN UP</button>
			</div>
		</form>
	
	</body>

</html>
<?php
	include 'footer.php';
?>	
	
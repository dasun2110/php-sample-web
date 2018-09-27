<?php 
	session_start();
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>documrnt</title>
		<link rel="stylesheet" type="text/css" href="style.css">
			
	</head>
	<body>
	
<header>

	<nav>
		<u1>
		
			<li><a href="index.php">HOME</a></li>
			
			<?php
				echo "<form action='includes/login.inc.php' method='post'> 
					<input type='text' name='uid' placeholder='username'>
					<input type='Password' name='pwd' placeholder='password'>
					<button type='submit'>Log In</button>
				</form>";
			?>
			<?php
				echo "<form action='includes/logout.inc.php' method='post'>
					<button type='submit'>Log Out</button>
				</form>";
			?>
			<li><a href="signup.php">Sign Up</a></li>
			
			
		
		</u1>
		
		<form1>
		<?php
			if(isset($_SESSION['uid'])){
				echo $_SESSION['uid'];
			}
		else
			{ echo "You Are Not Logged In!!!";
				}
				
			?>
		</form1>
		
	</nav>
	
	
</header> 
	
	</body>
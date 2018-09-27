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
		
			<li><a href="index1.php">Home</a></li>
			
			
			<?php
				echo "<form action='includes/logout.inc.php' method='post'>
					<button type='submit'>LogOut</button>
				</form>";
			?>
			
			
			
		
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
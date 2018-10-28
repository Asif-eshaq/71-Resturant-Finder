<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	if(isset($_POST['submit']))
	{
		$time = $_POST['time'];
		$date = $_POST['date'];
		$person = $_POST['person'];


		include("database.php");
	
		$time = $_POST['time'];
		$date = $_POST['date'];
		$person = $_POST['person'];

		
		$conn = connect();

		if(($time!="") && ($date!="") && ($person!=""))
		{
			$query  = "INSERT INTO `booking` (`time`, `date`, `person`) VALUES ('$time', '$date', '$person')";
			$res = mysqli_query($conn,$query);


			echo("Thank you for booking");
			echo("<br>");

			echo "Time : ".$time;
			echo("<br>");
			echo "Date : ".$date;
			echo("<br>");
			echo "Person : ".$person;
			echo("<br>");
		}

	}

	?>
	<div>
		<form action="index.php" method="POST">
			<input type="submit" name="name" value="Go Back">
		</form>
	</div>
</body>
</html>
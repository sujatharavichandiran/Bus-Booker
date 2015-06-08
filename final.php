<head>
<link rel="stylesheet" type="text/css" href="signupcss.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<img src="http://www.clker.com/cliparts/W/A/Y/u/H/u/blue-bus-hi.png"/>
<?php

$host = "mysql3.000webhost.com";
$pd = "appoyy1!";
$db = "a6770246_bus";
$user = "a6770246_loki";
	echo "<h1 class= \"text-success text-center\"> Congratulations! Booking  Successful!! </h1>";
	$mysqli=mysqli_connect($host,$user,$pd,$db);
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$tid = $_GET['tid'];
	$ress = mysqli_query($mysqli, "Select * FROM route WHERE `TransId`='$tid'");
	$row = mysqli_fetch_assoc($ress);
	echo '<div class="well carousel-search hidden-sm">';
	echo '<h4 class = "text-primary " style="padding:3px;">Transaction Id : '. $tid;
	echo '</h4><h4 class = "text-primary " style="padding:3px;"><br>From : ' . $row['from'];
	echo '</h4><h4 class = "text-primary " style="padding:3px;"><br>To : ' . $row['to'];
	echo '</h4><h4 class = "text-primary " style="padding:3px;"><br>Date : ' . $row['date'];
	echo '</h4><h4 class = "text-primary " style="padding:3px;"><br>Time : ' . $row['time'];
	echo '</h4><h4 class = "text-primary " style="padding:3px;"><br>Amount : ' . $_GET['amt'] . "<br>";
	echo "</h4></div>";
?>
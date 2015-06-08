<?php
 
	$fname = $_REQUEST["firstname"]; 	$lname = $_REQUEST["lastname"]; 	$email = $_REQUEST["email"]; 	$pass = $_REQUEST["password"];
	
	$host = "mysql3.000webhost.com";
	$user = "a6770246_loki"; 
	$pd = "appoyy1!";
	$db = "a6770246_bus";
	$con=mysqli_connect($host,$user,$pd,$db);
// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	 //$conn = mysql_connect("mysql1.000webhost.com","a3914887_loki","appoyy!1");
 
	//mysql_select_db("a3914887_sdd");
	mysqli_query($con,"Insert into user(Fname,Lname,email,pass) values('$fname','$lname','$email','$pass')");
	mysqli_close($con);
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Successfully registered!!!')
    window.location.href='login.php';
    </SCRIPT>");	
?>
<?php
	$host = "sql4.000webhost.com";
	$user = "a4056526_loki"; 
	$pd = "appoyy1!";
	$db = "a4056526_bus";
		$uname = $_REQUEST["username"]; 	$pass = $_REQUEST["password"];

	$mysqli=mysqli_connect($host,$user,$pd,$db);
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
$query="SELECT * FROM user WHERE email = '$uname'";
$ress = mysqli_query($mysqli,$query);
if($ress ){
$row = mysqli_fetch_assoc($ress);
if($row['pass'] == $pass)
	header('Location: book.php?name='.$row['Fname']);

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid credentials!!')
    window.location.href='login.php';
    </SCRIPT>");	
}
}else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid credentials!!')
    window.location.href='login.php';
    </SCRIPT>");
}	
	 //$conn = mysql_connect("mysql1.000webhost.com","a3914887_loki","appoyy!1");
 
	//mysql_select_db("a3914887_sdd");
	
	//mysqli_close($con);

?>
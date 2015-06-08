<?php

	$host = "sql4.000webhost.com";
	$user = "a4056526_loki"; 
	$pd = "appoyy1!";
	$db = "a4056526_bus";
	 error_reporting(0);

	$from = $_REQUEST["dropdown1"]; 	$to = $_REQUEST["dropdown2"];
	$date = $_REQUEST["date"]; 				$time = $_REQUEST["dropdown3"];
	$num = $_REQUEST["dropdown4"];
	$mysqli=mysqli_connect($host,$user,$pd,$db);
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}



$ress = mysqli_query($mysqli, "Select `date`, `time`, TransId,count(TransId) as co FROM route WHERE `from` = '$from' and `to` = '$to' and `date` = '$date' and `time` = '$time'");
if($ress){
$row = mysqli_fetch_assoc($ress);
if($row["co"] + $num < 6 ){
	$n = rand(100000,999999);
	if(mysqli_query($mysqli,"Insert into route(`from`,`to`,`date`,`time`,`TransId`,`count`) values('$from','$to','$date','$time',$n,$num)")){
		 header('Location: pay.php?tid='.$n.'&nos='.$num);

	}
	//header('Location: book.php?name='.$row['Fname']);
}
	else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Not enough seat(s) available!')
    window.location.href='book.php';
    </SCRIPT>");
	}
}
else{ 
$n = rand(10000,999999);
	if(mysqli_query($mysqli,"Insert into route(`from`,`to`,`date`,`time`,`TransId`,`count`) values('$from','$to','$date','$time',$n,$num)")){
		echo "Done!!";

	}
}


	
	 //$conn = mysql_connect("mysql1.000webhost.com","a3914887_loki","appoyy!1");
	//mysql_select_db("a3914887_sdd");
	//mysqli_close($con);

?>
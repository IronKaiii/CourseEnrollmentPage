<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		body{
			font-family: sans-serif;
			font-size: 150%;
			background-image: url('testbg3.png');
			background-repeat: no-repeat;
			background-size: cover;
			-webkit-text-stroke: 0.1px white;
		}
		
	</style>


</head>

<body>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
   <meta name="GENERATOR" content="Mozilla/4.72 [en] (Windows NT 5.0; I) [Netscape]">
   <title>Course Update</title>
</head>


<?php

	define('DBSERVER',"172.16.39.2");
	define('DBUSER',"coursedb");
	define('DBPASS',"ktk020");
	define('DATABASE',"coursedb");

	if (!$connection = @ mysql_connect(DBSERVER, DBUSER, DBPASS))
	die("Cannot connect");

	@mysql_select_db(DATABASE) or die( "Unable to select database");

	$query	= "SELECT * FROM applytbl;";
	$result	= mysql_query($query);
	$num	= mysql_numrows($result);
	
	$courseno = $_POST['courseno'];
	$applyno = $courseno *1000 +$num +1;
	$name = $_POST['name'];
	$studentid = $_POST['studentid'];
	$hkid = $_POST['hkid'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];

	$check = 0;
	$i = 0;
	

	while ($i < $num) {
		if ($hkid == mysql_result($result, $i, "hkid") &&
		$courseno == mysql_result($result, $i, "courseno")) {
			echo "<h2><b>You have already registered this course.</b></h2>";
			$check = 1;
			break;
		}
		$i++;
	}
	
	if ($check == 0) {
		$insert = "insert into applytbl (applyno, name, studentid
		, hkid, email, tel, courseno) values ('$applyno', '$name', '$studentid'
		, '$hkid', '$email', '$tel', '$courseno');";
		
		if (mysql_query($insert)) {
			echo "<h2><b>Your Application is received.</b><br></br></h2>";
			echo "<h2><b>Your Appication Number is $applyno.</b><br></br></h2>";
			echo "<h2><b>Please note it down for changing your data afterward.</b><br></br></h2>";
		}
		
	}
	

	mysql_close();
?>


</body>
</html>


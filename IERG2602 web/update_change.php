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

	$applyno = $_POST['applyno'];
	$hkid    = $_POST['hkid'];
	$email   = $_POST['email'];
	$tel     = $_POST['tel'];
	

    $query_check = "SELECT * FROM applytbl WHERE applyno ='$applyno' AND hkid = '$hkid';";
    $check=mysql_query($query_check);
    $num=mysql_numrows($check);
    
    
    if ($num<1) {
        echo "<b>Your information is incorrect! Please check your information again!</b>";
        die();
    } else {
        $query	= "UPDATE applytbl SET email='$email', tel='$tel' WHERE applyno = '$applyno' AND hkid = '$hkid';";
        if (mysql_query($query)) {
            $sql = "SELECT * FROM applytbl WHERE applyno='$applyno' AND hkid='$hkid';";
            $show=mysql_query($sql);
            $updated_email = mysql_result($show, 0, "email");
            $updated_tel = mysql_result($show, 0, "tel");

            echo "<h2><b>Your information has been updated sucessfully!</b><br></br></h2>";
            echo "<h2><b>Your Application Number is $applyno.</b><br></br></h2>";
            echo "<h2><b>Your HKID is $hkid.</b><br></br></h2>";
            echo "<h2><b>New Email Address is $updated_email.</b><br></br></h2>";
            echo "<h2><b>New Contact Tel is $updated_tel.</b><br></br></h2>";
            
        }
    }

    mysql_close();
?>



</body>
</html>
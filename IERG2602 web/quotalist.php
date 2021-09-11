<html>
<head>
	<style type="text/css">

		body{
			padding-top: 50px;
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

<?php

		function authenticate() {
			if ($_SERVER['PHP_AUTH_USER'] !== 'admin' && $_SERVER['PHP_AUTH_PW'] !== 'admin')
			{
				header("WWW-Authenticate: Basic realm=\"Restricted Access\"");
				header("HTTP\ 1.0 401 Unauthorized");
				print 'Error: Wrong user/password';
				exit;
			}
		}

		authenticate();

define('DBSERVER',"172.16.39.2");
define('DBUSER',"coursedb");
define('DBPASS',"ktk020");
define('DATABASE',"coursedb");

if (!$connection = @ mysql_connect(DBSERVER, DBUSER, DBPASS))
  die("Cannot connect");

@mysql_select_db(DATABASE) or die( "Unable to select database");

$query="SELECT * FROM coursetbl;";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();
?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
   <meta name="GENERATOR" content="Mozilla/4.72 [en] (Windows NT 5.0; I) [Netscape]">
   <title>Quota List</title>
</head>


<h3 align="center">Department of Information Engineering, The Chinese University of Hong Kong</h3>
<center>
</center>

<center>
<h3>
Course Information for April 2020</h3></center>
<center><table BORDER >
<tr BGCOLOR="#F7F9F8">
      <td><b>Course</b><br>
        <b>Number</b></td>

<td>
<center><b>Course Title / Course Information</b></center>
</td>

      <td><b>Starting</b> <br>
        <b>Date</b></td>

      <td><b>Course</b> <br>
        <b>Fee</b></td>
	
	  <td><b>Quota</b> <br>
        <b>Left</b></td>

<td><b>Quota</b></td>
</tr>

<?php
$i=0;
while ($i < $num) {
	$courseno = mysql_result($result,$i,"courseno");
	$coursetitle = mysql_result($result,$i,"coursetitle");
	$startdate = mysql_result($result,$i,"startdate");
	$coursefee = mysql_result($result,$i,"coursefee");
	$quota = mysql_result($result,$i,"quota");
	$quotaused = mysql_result($result,$i,"quotaused");

	print '<tr BGCOLOR="#F2F5F4">';
	print "<td>".$courseno."</td>";
	print "<td>".$coursetitle."</td>";
	print "<td>".$startdate."</td>";
	print "<td>".$coursefee."</td>";

	if ( $quota > $quotaused ) {
		$quotaleft = $quota - $quotaused; 
	}
	else {
		$quotaleft = "0";
	}	

	print "<td>".$quotaleft."</td>";
	print "<td>".$quota."</td>";
	print "</tr>";
	$i++;
}
?>

</tr>
</table>

</body>
</html>


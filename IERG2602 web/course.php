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
   <title>Course Info</title>
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

<td><b>Status</b></td>
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
		$status = "OPEN"; 
	}
	else {
		$status = "CLOSED";
	}	

	print "<td>".$status."</td>";
	print "</tr>";
	$i++;
}
?>

</tr>
</table>
<p><strong>Click for the <a href="apply.php">Course Application Form </a>.</strong></p>
  <p><strong>Click for the particulars <a href="change_auth.php">change Form</a>.</strong></p>
  <p><strong>Click for the <a href="quotalist.php">quota list of courses</a> (Authorized Users Only)</strong></p>
</center>

</body>
</html>


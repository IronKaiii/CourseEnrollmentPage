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
   <title>Course Application</title>
</head>


<h3 align="center"><b>Department of Information Engineering, The Chinese University of Hong Kong</b></h3>
<center>
</center>


<div>
	<form  action="insert.php" method="post">
		<div class="container">
			<div class="row">
				<div class="clo-sm-3">
					<hr class="mb-3">
					<h3><b>Course Application Form for April 2020</b></h3>
					<p>Please fill up all the information below.</p>
					<hr class="mb-3">
					<label for="courseno"><b>Course No To enroll : </b></label>
					<input class="form-control" type="number" name="courseno" maxlength="4" required><br></br>

					<label for="name"><b>Name : </b></label>
					<input class="form-control" type="text" name="name" maxlength="30" required><br></br>

					<label for="studentid"><b>Staff/student ID : </b></label>
					<input class="form-control" type="text" name="studentid" maxlength="15" required><br></br>

					<label for="hkid"><b>HKID (Just the 6 digits) : </b></label>
					<input class="form-control" type="number" name="hkid" maxlength="6" required><br></br>

					<label for="email"><b>Email address : </b></label>
					<input class="form-control" type="text" name="email" maxlength="30" required><br></br>

					<label for="tel"><b>Contact Tel : </b></label>
					<input class="form-control" type="text" name="tel" maxlength="15" required><br></br>
					<hr class="mb-3">
					<input type="submit" name="Submit" value="Submit">
					<input type="reset" value="Reset">
				</div>
			</div>
		</div>
	</form>
</div>



</body>
</html>


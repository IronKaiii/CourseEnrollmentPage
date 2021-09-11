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
   <title>Course Update Auth</title>
</head>


<h3 align="center"><b>Department of Information Engineering, The Chinese University of Hong Kong</b></h3>
<center>
</center>

<div>
	<form  action="update_change.php" method="POST">
		<div class="container">
			<div class="row">
				<div class="clo-sm-3">
					<hr class="mb-3">
					<h3><b>Change of Course Application Data Form for April 2020</b></h3>
					<p>Please fill up all the information below for validation.</p>
					<hr class="mb-3">
					<label for="applyno"><b>Your Application No. : </b></label>
					<input class="form-control" type="number" name="applyno" required><br></br>

					<label for="hkid"><b> Your HKID (Just the 6 digits) : </b></label>
					<input class="form-control" type="number" name="hkid" required><br></br>

                    <label for="email"><b>New Email address : </b></label>
					<input class="form-control" type="text" name="email" maxlength="30" required><br></br>

					<label for="tel"><b>New Contact Tel : </b></label>
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
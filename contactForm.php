<?php
	$con=mysqli_connect("localhost","root","","infosys");
	mysqli_select_db($con,"infosys");
	
	
	if (isset($_POST['submit'])){
		$uName=$_POST['uName'];
		$cNo=$_POST['cNo'];
		$eMail=$_POST['eMail'];
		$ad1=$_POST['ad1'];
		$ad2=$_POST['ad2'];
		$ad3=$_POST['ad3'];
		
		if ( empty($uName) or  empty($cNo) or  empty($eMail) or empty($ad1)){
			echo '<script type="text/javascript">alert("Enter valid information");</script>';
		
		}
		else{
			$sql = "INSERT INTO contactinfo (uName,cNo,eMail,ad1,ad2,ad3) VALUES ( '$uName' , '$cNo' , '$eMail' , '$ad1' , '$ad2' , '$ad3')";
			mysqli_query($con,$sql);
			echo "Your information has been submitted!";
			echo $uName;
			// header("Location: https://www.google.com/");
			exit ();
		}
		
	}
	

?>



<!DOCTYPE html>
<html>
<head>
	<title>Contact Info</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="cForm">
		<img src="avatar2.svg" class="avatar">
		<h1>Contact Us</h1>
		<form id="contact-form" method="post" action="#">
			
			<label for="uName"> <img src="name.png" class="namPic"> </label>
			<input type="text" id="uName" name="uName" placeholder="Your Name" class="uName">

			<label for="cNo"> <img src="phone.png" class="conPic"> </label>
			<input type="text" id="cNo" name="cNo" placeholder="Your Contact No" class="cNo">

			<label for="eMail"> <img src="email.png" class="emPic"> </label>
			<input type="text" id="eMail" name="eMail" placeholder="Your Email" class="eMail">

			<label for="ad1"> <img src="address.png" class="adPic"> </label>
			<input type="text" id="ad1" name="ad1" placeholder="Address Line 1" class="ad1"> 
			<input type="text" name="ad2" placeholder="Address Line 2" class="ad2"> 
			<input type="text" name="ad3" placeholder="Address Line 3" >

			<input type="submit" name="submit" value="Submit" class="subButton">


			
		</form>
		
	</div>

</body>
</html>
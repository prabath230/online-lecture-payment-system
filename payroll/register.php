<?php
	require 'config.php';  
?>


<! Doctype html>



<html>

<head>
<title> Registration Page </title>
<link type="text/css" rel="stylesheet" href="stylesheet.css">
</head>
<body>
 <div id="header">
	<IMG id="tuna" SRC="University-of-Sri-Jayewardenepura-logo-1.png" WIDTH="800px" high="800px" >
</div>

<div id="title"> <h1> Visiting Lecture Payroll System </h1> </div>
<div id="main">

	<center>
		<h2> Registration Form </h2>
		<img src="man.png"class="avatar"/></center>
	</center>
 


 <form class="myform" action="register.php" method="post">
 	<label><b>Username</b></label> <br>
 	<input name="username" type="text" class="inputvalues" placeholder="Type Your Username" required/> <br>
 	<label><b>Password</b></label> <br>
 	<input name="password" type="password" class="inputvalues" placeholder="Your Password" required/> <br>
 	<label><b>Confirm Password</b></label> <br>
 	<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm Password " required/> <br>
 	<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br> 
 	<a href="index.php"><input type="button" id="back_btn" value="back"/> </a>

 </form>

 <?php
	 if(isset($_POST['submit_btn']))
	 {
	 	
	 	$username=$_POST['username'];
	 	$password=$_POST['password'];
	 	$cpassword=$_POST['cpassword'];


	 	if($password==$cpassword)
	 	{
	 		$query="select * from user WHERE username='$username'"; 
	 		$query_run=mysqli_query($con,$query);
	 			
	 			if(mysqli_num_rows($query_run)>0)
	 			{
	 				echo '<script type="text/javascript">alert("User already exsists.... try another username ") </script> ';
	 			}
				else
	 			{
	 				$query="insert into user (username,password ) values('$username','$password')";
	 				$query_run=mysqli_query($con,$query);

	 				if($query_run)
	 				{
	 					echo '<script type="text/javascript">alert("User Registered.. Go to Login Page ") </script> ';	
	 				}
	 				else
	 				{
	 					echo '<script type="text/javascript">alert("Error..") </script> ';
	 				}
	 			}
	 			
	 	}
	 	else
	 	{
	 		echo '<script type="text/javascript">alert("Password And Confirm Password does not match ") </script> ';
	 	}


	 }

?>
 	
 </div>

 <div class="footer">
 	
</div>
</body>


</html>
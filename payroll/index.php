<?php
	
	session_start();
	require 'config.php';  
?>



<! Doctype html>



<html>

<head>
<title>   </title>
<link type="text/css" rel="stylesheet" href="stylesheet.css">
</head>
<body>

<div id="header">
	<IMG id="tuna" SRC="University-of-Sri-Jayewardenepura-logo-1.png" WIDTH="800px" high="800px" >
</div>


<div id="title"> <h1> Visiting Lecture Payroll System </h1> </div>



<div id="main">
	
	<center>
		<h2> Login Form </h2>
		<img src="man.png"class="avatar"/></center>
	</center>
 


 <form class="myform" action="index.php" method="post">
 	<label><b>Username</b></label> <br>
 	<input name="username" type="text" class="inputvalues" placeholder="Type Your Username"/> <br>
 	<label><b>Password</b></label> <br>
 	<input name="password" type="password" class="inputvalues" placeholder="Type Your Password"/> <br>
 	<input name="login" type="submit" id="login_btn" value="Login"/><br> 
 	<a href="register.php"><input type="button" id="register_btn" value="Register"/> </a>

 </form>
 
	<?php
		 if(isset($_POST['login']))
		 {
			 $username=$_POST['username'];
	 	     $password=$_POST['password'];
			 
			 $query="select * from user WHERE username='$username' AND password='$password'";
			 
			 $query_run=mysqli_query($con,$query); 
			 if(mysqli_num_rows($query_run)>0)
			 {
				$_SESSION['username']=$username;
				header('location:homepage.php');
			 
			 }
			 else
			 {
				 echo '<script type="text/javascript">alert("Invalid user") </script> ';
			 }
		 }
?>

 </div>

 

 <div class="footer">
 	
</div>
</body>


</html>
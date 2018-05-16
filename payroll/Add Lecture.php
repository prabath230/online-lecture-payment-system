<?php
	session_start();
?>


<! Doctype html>



<html>

<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">  

<title> Home Page  </title>
<link type="text/css" rel="stylesheet" href="stylesheet.css">
</head>
<body>

<div id="header">
    <IMG id="tuna" SRC="University-of-Sri-Jayewardenepura-logo-1.png" WIDTH="100px" high="100px" >
</div>


<div id="title"> <h1> Visiting Lecture Payroll System </h1> </div>


<div id="main-wrapper.homepage">

	<center>
		<h2> Main Menu  </h2>
		<h3>Welcome 
			<?php echo $_SESSION['username']?>
		</h3>
		<img src="man.png"class="avatar"/></center>
	</center>
 
 		

 	

 </form>
	
	
	<?php
		if(isset($_POST['logout']))
		{
			session_destroy();
			header('location:index.php');
			
		}
    ?>





  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





<div class="container"><P><br><P>

 <CENTER>
  <a href="home.php" class="btn btn-primary btn-lg " role="button" aria-pressed="true">SEARCH</a>
  <a href="#" class="btn btn-primary btn-lg " role="button" aria-pressed="true">UPDATE SALARY</a>
  <a href="#" class="btn btn-primary btn-lg " role="button" aria-pressed="true">PAYMENT</a>
  <a href="#" class="btn btn-primary btn-lg " role="button" aria-pressed="true">DEDUCTION</a>
   <a href="index.php" class="btn btn-primary btn-lg " role="button" aria-pressed="true">LOG OUT</a>

</CENTER>
  

</div>

<div>
</P></br></P>

 </div>

 

 <div class="footer">
    
</div>

</body>


</html>
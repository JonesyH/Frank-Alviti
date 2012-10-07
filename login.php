<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>F H & J Alviti Limted</title>
<link rel="stylesheet" href="css/main-style.css">
</head>
<body>
<header class="header">
           <!--Header / Logo -->        
         <div class="logo">
         <a href="http://www.mcconnel.com"><div class="logo-link-1"></div></a>
         <a href="http://www.twose.com"><div class="logo-link-2"></div></a>
         </div>
</header>


<div class="main">





<form action="login.php" method="post">
	<div class="loginbox">
    		<div class='login-script'>
				<?php
					mysql_connect('localhost', 'root', 'server-pc')or die('could not connect' . mysql_error());
					mysql_select_db("login");
	
 	 			if(isset($_POST['submit_x']))
						{
 					 	$username = $_POST['username'];
 		 				$password = $_POST['password'];
 		 				$query = mysql_query("SELECT * FROM users WHERE username='$username'"); 
						
 	 				while($row = mysql_fetch_array($query)) {
  	 					if($row['password'] == $password){
   					   	 	header("Location: admin-pannel.php");
   					  	  	die();}
					  	else { echo "Wrong Login Credentials"; }
		 			  									 }
				
		 			 }
				?>
			</div>
        	<div class="input-box-heading">Username</div>
			<input class="input-box" type="text" name="username">
        	<div class="input-box-heading">Password</div>
			<input class="input-box" type="password" name="password">
            <input class="submit-box"  alt="submit" name="submit" type="image" src="media/images/Login-Button.png">
    </div>
</form>	

</div>
</body>
</html>

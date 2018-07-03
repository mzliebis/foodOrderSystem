<?php
		//session_start();
		//$_SESSION["username"]="isabelhao";
    	//echo 'hi' . $_SESSION['username'];
?>
<html>
	<head>
		<title> FOOD ORDERING </title>
		<style>
		h1{
			color:rgb(0,0,139)
			}
		h1{
			font-size:300%
			}
		}
		input{
			font-size:200%
		}
		
		</style>
	</head>
	<body>
	<div style="position:absolute;z-index:-1;width:100%;height:100%;">
    	<img src="images/background_page.jpg" width="100%" height="100%" />
</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<center><h1>Food Ordering System</h1></center>
	<center><p>
	<img src="images/school_logo.jpg" width="180" height="180"/>
	<br>
	<br>
	
	<form action="Client.php" onSubmit="return validate_form(this)" method="post">
	<font size="5" >
	Username:<input type="text" name="user_name" id="user_name" size="15" maxlength="30"/>
	<br>
	<br>
	Password:<input type="password" name="password" id="password" size="15" maxlength="30"/>
	<br>
	<br>
	<br> 
	<input type="submit" name="login_event" value="Login" style="width: 85px; height: 30px;">
	</form>
	<a href=register_page.html>
	<button type="button" style="width: 85px; height: 30px;">Register</button>
	</a>
	</font>
	</p></center>
	
	</body>
</html>

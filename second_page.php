<html>
	<head>
		<title> FOOD ORDERING </title>
		<style>
	h2{
		font-family:Times
	}
	h2{
		font-size:200%
	}
	h3.button {text-align:right}
	table{
		font-family:Times
	}
	table{
		font-size:120%
	}
	table{
		width:2px;
	}

		</style>
	</head>
	<body>
	
	<?php
	echo "hi, " . $_SESSION['user_name'];
	?>
	

	

	<br>
	<br>
	<br>
	<br>
	<h2><div class="text" style="text-align:center">MENU</div></h2>
<center><table border="5" bgcolor="#F3F3FA">
	<tr>
	<form action="Client.php" onSubmit="return validate_form(this)" method="post">
	<input type="hidden" name="product" id="product" value="eggtart">
	<input type="hidden" name="price" id="price" value="6">
		<td><img src="images/egg tart.jpg" width="160" height="220"><br><br>
		<center>Egg Tart</center>
		<center>6.00 RMB</center>
		<center><select name="quantity" id="quantity">
  			<option name="quantity" value="1">1</option>
  			<option name="quantity" value="2">2</option>
  			<option name="quantity" value="3">3</option>
  			<option name="quantity" value="4">4</option>
		</select></center>
		<center><input name="order_event" type="submit" value="BUY"></center>
		<br>
		</td>
	</form>
		
		
	<form action="Client.php" onSubmit="return validate_form(this)" method="post">	
	<input type="hidden" name="product" id="product" value="muffin">
	<input type="hidden" name="price" id="price" value="8">
		<td><img src="images/Muffin.jpg" width="160" height="220"><br><br>
		<center>Muffin</center>
		<center>8.00 RMB</center>
		<center><select name="quantity" id="quantity">
  			<option name="quantity" value="1">1</option>
  			<option name="quantity" value="2">2</option>
  			<option name="quantity" value="3">3</option>
  			<option name="quantity" value="4">4</option>
		</select></center>
		<center><input name="order_event" type="submit" value="BUY"></center>
		<br>
		</td>
	</form>

	<form action="Client.php" onSubmit="return validate_form(this)" method="post">	
	<input type="hidden" name="product" id="product" value="waffle.">
	<input type="hidden" name="price" id="price" value="12">
		<td><img src="images/Waffle.jpg" width="160" height="220"><br><br>
		<center>Waffle</center>
		<center>12.00 RMB</center>
		<center><select name="quantity" id="quantity">
  			<option name="quantity" value="1">1</option>
  			<option name="quantity" value="2">2</option>
  			<option name="quantity" value="3">3</option>
  			<option name="quantity" value="4">4</option>
		</select></center>
		<center><input name="order_event" type="submit" value="BUY"></center>
		<br>
		</td>
	</form>
	<form action="Client.php" onSubmit="return validate_form(this)" method="post">	
	<input type="hidden" name="product" id="product" value="cookie">
	<input type="hidden" name="price" id="price" value="6">
		<td><img src="images/cookie.jpg" width="160" height="220"><br><br>
		<center>Cookie</center>
		<center>6.00 RMB</center>
		<center><select name="quantity" id="quantity">
  			<option name="quantity" value="1">1</option>
  			<option name="quantity" value="2">2</option>
  			<option name="quantity" value="3">3</option>
  			<option name="quantity" value="4">4</option>
		</select></center>
		<center><input name="order_event" type="submit" value="BUY"></center>
		<br>
		</td>
	</form>
		
	<form action="Client.php" onSubmit="return validate_form(this)" method="post">	
	<input type="hidden" name="product" id="product" value="cupcake">
	<input type="hidden" name="price" id="price" value="8">
		<td><img src="images/cupcake.jpg" width="160" height="220"><br><br>
		<center>Cupcake</center>
		<center>8.00 RMB</center>
		<center><select name="quantity" id="quantity">
  			<option name="quantity" value="1">1</option>
  			<option name="quantity" value="2">2</option>
  			<option name="quantity" value="3">3</option>
  			<option name="quantity" value="4">4</option>
		</select></center>
		<center><input name="order_event"  type="submit" value="BUY"></center>
		<br>
		</td>
	</form>
	</tr>
</table></center>

	<br>
	<br>
	<br>

	<h3 class="button"><a href=log_out.php>
		<center><button type="button" style="width: 85px; height: 30px;">Log out</button></center>
	</a></h3>
	

	</body>
</html>

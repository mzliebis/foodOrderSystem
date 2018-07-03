<html>

<?php

class Order extends Connect_To_Database{

	private $name;
	private $price;

	public function __construct($n)
	{	 	
	
       $this->connect_to_db();
       $this->update_field_variables();

               	
	}

	private function update_field_variables(){
  	
  		$this->name = mysqli_real_escape_string($this->link,$_REQUEST['product']);
  		//echo $this->name;
  		$this->id = mysqli_real_escape_string($this->link,$_REQUEST['product']);
  		//echo $this->id;
  		
  		
  		//session_start();
//if (isset($_REQUEST['user_name'])){	
	//$_SESSION['user_name'] = $_REQUEST['user_name'];
	//echo "hi, " . $_SESSION['user_name'];
		$username =  $_SESSION['user_name'];
	//	echo "username" . $username;
  		//$product = $_REQUEST['id'];
  		//echo "prrrr";
  		//echo $product;
  		$link = mysqli_connect("localhost","root","root","users");

		 
		if (mysqli_connect_errno()){
            die("ERROR: Could not connect. " . mysqli_connect_error());
		} 
		$this->quantity = mysqli_real_escape_string($this->link,$_REQUEST['quantity']);
  		//echo "quantity: ";
  		//echo $this->quantity;
  		$this->price = mysqli_real_escape_string($this->link,$_REQUEST['price']);
  		//echo "price: ";
  		//echo $this->price;
  		$totalprice = $this->quantity * $this->price;
  		//echo "totalprice: ";
  		//echo $totalprice;
		
  		$sql = "INSERT INTO `Orders`(user_name, product_name, price, amount, time) VALUES ('$username','$this->name','$totalprice', '$this->quantity', NOW())";
  		//echo $sql;
  		if (!mysqli_query($link, $sql)){
    		echo "No connection.";
		}else{
			echo "<center>The order will be sent to the staffs' email</center>";
		}
	}
}
?>


<center><a href=sendemail.php>
	<button type="button" style="width: 85px; height: 30px;">Confirm</button>
</center></a>
</html>





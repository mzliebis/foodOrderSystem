<?php


class Connect_To_Database{

	 //Variable for MySql connection
	 protected $link;

	

	protected function connect_to_db(){

		 $this->link = mysqli_connect("localhost","root","root","users");

		 
		if (mysqli_connect_errno()){
            die("ERROR: Could not connect. " . mysqli_connect_error());
		} 
	
		
		
  	}

}
?>
<?php



class Register extends Connect_To_Database{
    //Variable for MySql connection
	//private $link;
	
	
	//Field Variables
	private $user_name;
	private $first_name;
	private $last_name;
	private $email;
	private $password;
	
	
 
       
	public function __construct()
	{	     
       $this->connect_to_db();
       $this->update_field_variables(); 
       $this->insert_into_table();       
        	
	}
	

  	private function update_field_variables(){
  	
  		$this->user_name = mysqli_real_escape_string($this->link,$_REQUEST['user_name']);
  		$this->first_name = mysqli_real_escape_string($this->link,$_REQUEST['first_name']);
  		$this->last_name = mysqli_real_escape_string($this->link,$_REQUEST['last_name']);
  		$this->email = mysqli_real_escape_string($this->link,$_REQUEST['email']);
  		$this->password = mysqli_real_escape_string($this->link,$_REQUEST['password']);
  		
	       
  	}
  	
  	private function insert_into_table(){
  	
  		
  		$sql = "INSERT INTO users (user_name, first_name, last_name, email, password) VALUES ('$this->user_name','$this->first_name', '$this->last_name', '$this->email', '$this->password')";


		if (!mysqli_query($this->link, $sql)){
    		include('register_page.html');/// add something to show that there was a problem
		}else{
			include('first_page.php');
		}
  	
  	
  	}
  	
  
  	
	
	
	
	
}

?>



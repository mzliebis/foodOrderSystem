<?php


//$link = mysqli_connect("localhost","root","root","users");

		 
//		if (mysqli_connect_errno()){
//            die("ERROR: Could not connect. " . mysqli_connect_error());
//		} 
//session_destroy();
//$username = mysqli_real_escape_string($link,$_REQUEST['user_name']);
//echo $username;
//session_start();
 //   	$_SESSION['username']=$username;
class Login extends Connect_To_Database{

	 //Variable for MySql connection
	 
	 
	//Field Variables
	private $user_name;
	private $password;
	private $tbl_name="users";


	public function __construct(){	 
	    
		$this->connect_to_db();
		$this->update_field_variables();
		$this->switch_page();
		
		
    	 
        	
	}

	private function update_field_variables(){
	
		
  	
  		$this->user_name = mysqli_real_escape_string($this->link,$_REQUEST['user_name']);
  		$username = mysqli_real_escape_string($this->link,$_REQUEST['user_name']);
  		//echo "username";
  		//echo $username;
  		//session_start();
    	//$_SESSION['username']=$username;
    	//echo "hi". $_SESSION["username"];
  		$this->password = mysqli_real_escape_string($this->link,$_REQUEST['password']);
  		$this->user_name = stripslashes($this->user_name);
		$this->password = stripslashes($this->password);
  		
  		
		
	}  	
	
	private function check_login_correct(){
	
		
		
  		$sql2="SELECT * FROM $this->tbl_name WHERE user_name='$this->user_name' and password='$this->password'";
  		$result = mysqli_query($this->link, $sql2);
  	
  		
  		
    	if(mysqli_num_rows($result) > 0){
    		return True;
    	}else{
    		return False;
		}
		
	}  	
	
	private function switch_page(){
	
		if($this->check_login_correct()){
	
			include('second_page.php');
		}else{
			include('first_page.php');
	
		}

		
}  	

}

?>
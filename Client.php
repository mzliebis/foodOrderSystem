<?php
session_start();
//session_destroy();
if (isset($_REQUEST['user_name'])){	
	$_SESSION['user_name'] = $_REQUEST['user_name'];
}


function __autoload($class_name) 
{
    include $class_name . '.php';
}

class Client
{
        //Variable to select the correct class
	private $task;
 
        //Which submit button used?
	public function __construct($n)
	{
	    if(isset($_REQUEST['register_event']))
            {
            	
               unset($_REQUEST['register_event']);
               $this->task= new Register(); 
            }
            
     	else if(isset($_REQUEST['login_event']))
            {
            	
               unset($_REQUEST['login_event']);
               	$this->task= new Login(); 
               
               //$this->task= new Register(); 
            }
            
          else if(isset($_REQUEST['order_event']))
            {
            	
               unset($_REQUEST['order_event']);
               	$this->task= new Order($n); 
               
               //$this->task= new Register(); 
            }  
        
            else
            {
            	echo "yo yo coco2";
           
			}		
	}
}

if (isset($_SESSION['user_name'])){	
    $worker = new Client($_SESSION['user_name']);
	
}else{

	$worker = new Client("empty");
}





?>

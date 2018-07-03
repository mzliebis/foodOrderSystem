<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';




$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {

$link = mysqli_connect("localhost","root","root","users");

		 
		if (mysqli_connect_errno()){
            die("ERROR: Could not connect. " . mysqli_connect_error());
		} 
	

$sql = "SELECT user_name, product_name, price,amount, time FROM 	Orders order by invoice_number desc limit 1";
$result = mysqli_query($link, $sql);
  	
  		while ($row = mysqli_fetch_assoc($result)){
  		$user_name = $row['user_name'];
  		$amount = $row['amount'];
  		$product_name = $row['product_name'];
  		$price = $row['price'];
  		$time = $row['time'];
  		}

    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'foodorderingsystem2018';                 // SMTP username
    $mail->Password = 'foodorderingsystem';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('foodorderingsystem2018@gmail.com', 'FOOD ORDER');
    $mail->addAddress('foodorderingsystem2018@gmail.com', 'FOOD ORDER');     // Add a recipient
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Food Order';
    $mail->Body    = 'Hi cafeteria staff, here is an order from ' . $user_name . '. He ordered '. $amount . ' ' . $product_name . '. He paid ' . $price . 'RMB at ' . $time .'.';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Your orders have been sent! Do you want to buy another product?';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}?>

	<a href=second_page.php>
		<button type="button" style="width: 85px; height: 30px;">Yes</button>
	</a>
	
	<a href=log_out.php>
		<button type="button" style="width: 85px; height: 30px;">No</button>
	</a></h3>
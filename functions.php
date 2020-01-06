<?php 

function generateStatus($statusCode=0){
	$status = [
		'0' => "", 
		'1' => "Email or Password Empty", 
		'2' => "User doesn't exists" ,
		'3' => "Email and Password didn't match", 
		'4' => "User created successfully", 
		'5' => "Duplicate Email", 
	];	
	return $status[$statusCode];
}

?>
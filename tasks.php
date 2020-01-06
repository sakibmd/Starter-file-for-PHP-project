<?php 
session_start();
include_once "config.php";
$status = 0;
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$connection){
	throw new Exception("Not Connected<br>");
}
else{
	$action = $_POST['action'] ?? '';
	if(!$action){
		header('Location: index.php');
		die();
	}
	elseif ('register' == $action) {
		$name = $_POST['name'] ?? '';
		$email = $_POST['email'] ?? '';
		$password = $_POST['password'] ?? '';
		$roll = $_POST['roll'] ?? '';
		$cgpa = $_POST['cgpa'] ?? '';
		$gender = $_POST['gender'] ?? '';
		if($email && $password){
			$hash = password_hash($password, PASSWORD_BCRYPT);
			$query = "INSERT INTO myclass(name,email,password,roll,cgpa,gender) VALUES ('{$name}','{$email}','{$hash}','{$roll}','{$cgpa}','{$gender}')";
				mysqli_query($connection, $query);
				if(mysqli_error($connection)){
					$status = 5; //Duplicate Email
				}
				else{
					$status = 4; //created successfully
				}
		}
		else{
			$status =  1;  //username or password empty
		}
		header("Location: index.php?status={$status}");
	}
	else if('login' == $action){
		$email = $_POST['email'] ?? '';
		$password = $_POST['password'] ?? '';
		if($email && $password){
			$query = "SELECT id,password FROM myclass WHERE email='{$email}'";
			$result = mysqli_query($connection, $query);
			if(mysqli_num_rows($result)>0){
				$data = mysqli_fetch_assoc($result);
				$_password = $data['password'];
				$_userId = $data['id'];
				if(password_verify($password, $_password)){
					$_SESSION['id'] = $_userId;
					header("Location: home.php");
					die();
				}
				else{
					$status = 3; //userid & pass didn't match
				}
			}
			else{
				$status = 2;  //User doesn't exists
			}
		}
		else{
			$status =  1;  //username or password empty
		}
		header("Location: index.php?status={$status}");
	}
}

 ?>
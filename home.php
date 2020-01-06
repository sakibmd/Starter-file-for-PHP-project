<?php 
session_start();
$sessionActive = $_SESSION['id'] ?? '';
if(!$sessionActive){
	header('Location: index.php');
	die();
}
include_once  "config.php";
include_once  "functions.php";
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$connection){
	throw new Exception("Not Connected<br>");
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/design.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <title>Student Management | Home</title>
  </head>
  <body>
    <div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  
	  <a href="home.php">Home</a>
	  <a href="about.php">About</a>
	  <a href="records.php">Records</a>
	  <a href="contact.php">Contact</a>
	  <a href="logout.php">Logout</a>
	</div>

	<br>
	<span style="padding-left: 45%;font-size:30px;cursor:pointer;font-weight: bold;" onclick="openNav()">&#9776; Menu</span>
	<section id="cover">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
				<h1 class="head text-center">Hello Sakib</h1>
					<p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<button class="btn-default py-3 px-5"><b>Your Profile</b></button>
			</div>
			<div class="col-md-6">
				
			</div>
			</div>
		</div>
	</section>
	

	<div class="container">
		<div class="row">
			<h2 style="margin: 0 auto; color: grey;font-weight: bold; padding: 70px 0px 30px 0px;">Our Student Details</h2>
		</div>
	</div>

	<div class="container-fluid" style="padding-bottom: 60px;">
		<div class="row">
			<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
			
			</div>
			<div class="col-md-8 col-lg-8  col-sm-8 col-xs-8">
				<div class="table-responsive">
				  <table class="table table-bordered table-striped table-hover ">
				    <thead>
				      <tr style="background: grey;color: white">
				        <th scope="col">Id</th>
				        <th scope="col">Name</th>
				        <th scope="col">Gender</th>
				        <th scope="col">Cgpa</th>
				        <th scope="col">Action</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>42</td>
				        <td>Sakib</td>
				        <td>Mail</td>
				        <td>3.86</td>
				        <td>
				        	<a href="#" class="btn btn-info">Edit</a>
				        	<a href="#" class="btn btn-danger">Delete</a>
				        	<a href="#" class="btn btn-success">Mark as admin</a>
				        </td>
				      </tr>
				      <tr>
				        <td>42</td>
				        <td>Sakib</td>
				        <td>Mail</td>
				        <td>3.86</td>
				        <td>
				        	<a href="#" class="btn btn-info">Edit</a>
				        	<a href="#" class="btn btn-danger">Delete</a>
				        	<a href="#" class="btn btn-success">Mark as admin</a>
				        </td>
				      </tr>
				      <tr>
				        <td>42</td>
				        <td>Sakib</td>
				        <td>Mail</td>
				        <td>3.86</td>
				        <td>
				        	<a href="#" class="btn btn-info">Edit</a>
				        	<a href="#" class="btn btn-danger">Delete</a>
				        	<a href="#" class="btn btn-success">Mark as admin</a>
				        </td>
				      </tr>
				    </tbody>
				  </table>
				</div>
			</div>
			<div class="col-md-2 col-lg-2  col-sm-2 col-xs-2">
				
			</div>
		</div>
	</div>

<section id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3 class="head">Contact</h3>
					<p><i class="fas fa-check"></i>House No 90, Housing Estate</p>
					<p><i class="fas fa-check"></i>+8801670605075</p>
					<p><i class="fas fa-check"></i>sakibmd.cse@gmail.com</p>
					<p><i class="fas fa-check"></i>github.com/sakibmd</p>

					</div>
			<div class="col-md-4">
				<h3 class="head">Recent News</h3>
				<p class="para">
					Footer with solid color background and a contact form, Easily add subscribe and contact forms without any server-side integration. 
				</p>
				<p class="para">
					Footer with solid color background and a contact form, Easily add subscribe and contact forms without any server-side integration. 
				</p>
			</div>
			<div class="col-md-4">
				<h3 class="head">Subscribe</h3>
				<p class="para">Get monthly updates and free resources.</p>
				<div class="text-center">
					<input type="text" class="form-control py-2 px-4" placeholder="Email">
				<button class="btn btn-default text-center">Subscribe</button>
				</div>
				<h2>+88 0167 060 5075</h2>
				<h2>+88 0161 230 6575</h2>
				
			</div>
		</div>
		<hr>
		<p class="credit text-center">Credit Goes To <strong>Shakib Mohammed</strong></p>
	</div>
</section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
		function openNav() {
		  document.getElementById("mySidenav").style.width = "250px";
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		}
	</script>
  </body>
</html>
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
	  <a href="record.php">Records</a>
	  <a href="contact.php">Contact</a>
	  <a href="logout.php">Logout</a>
	</div>

	<br>
	<span style="padding-left: 45%;font-size:30px;cursor:pointer;font-weight: bold;" onclick="openNav()">&#9776; Menu</span>
	
	
	<div class="container" style="padding-bottom: 60px;">
			<h2 style="margin: 0 auto; color: grey; padding: 40px 0px 25px 0px;"> Some Information about out students</h2> 
	    <div class="row"> 
	 		<div class="col-md-8">
	 			<table class="table table-bordered" style="border: 2px solid grey;">
			    <thead>
			      <tr style="background: grey;color:white;">
			        <th>Name</th>
			        <th>Cgpa</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			      		<td>Doe</td>
			        	<td>3.55</td>
			      </tr>
			      <tr>
			      		<td>Doe</td>
			        	<td>3.55</td>
			      </tr>
			      <tr>
			      		<td>Doe</td>
			        	<td>3.55</td>
			      </tr>
			      <tr>
			      		<td>Doe</td>
			        	<td>3.55</td>
			      </tr>
			      
			    </tbody>
			  </table>
	 		</div>
	 		<div class="col-md-4">
			    		<ul class="list-group list-hover">
    						<li  class="list-group-item list-group-item-success">Top 10 cgpa holder</li>
    						<li  class="list-group-item list-group-item-info">Male Students List</li>
   							<li  class="list-group-item list-group-item-warning">Female Students</li>
   							<li  class="list-group-item list-group-item-danger">Top 5 male students</li>
   							<li  class="list-group-item list-group-item-success">Top 3 female students</li>
 				 		</ul>
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
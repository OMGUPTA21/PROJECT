<?php
	include 'conection.php';


	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$id=$_POST["id"];
		$name=$_POST["name"];
		$address=$_POST["address"];
		$contact=$_POST["contact"];
		$email=$_POST["email"];
	
		
		if(isset($_POST["category"])){
			$category=$_POST["category"];

			$sql = "INSERT INTO `doctor123` (`id`, `name`, `address`, `contact`, `email`, `category`) 
			VALUES ( '$id', '$name', '$address', '$contact', '$email', '$category')";

			$x = mysqli_query($conn,$sql);
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css" type="text/css">

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Docto <span>Care</span></h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href="index3.php">Add/Delete Doctor</a></li>
			<li><a href="display.php">View Doctors</a></li>
			

  			<li><a href="DoctoCare.php">Logout</a></li>

			



	
			

		</ul>
		



	</nav>




</header>
<body>

		<div class="headerA">
	<h2>Add Doctor</h2>
</div>

<form method="post">

	<?php ?>

	<div class="input-groupA">
		<label>Doctor ID</label>
		<input type="text" name="id" >

	</div>


	<div class="input-groupA">
		<label>Doctor Name</label>
		<input type="text" name="name" >


	</div>

	<div class="input-groupA">
		<label>Address</label>
		<input type="text" name="address">

	</div>

	<div class="input-groupA">
		<label>Contact Number</label>
		<input type="text" name="contact">


	</div>


	<div class="input-groupA">
		<label>Email address</label>
		<input type="text" name="email">

	</div>

	
<div class="input-groupA">
	<label>Category</label>
	   	<select name="category" class="xd">
	   		<option value="bone" >bones</option>
	   		<option value="heart">heart</option>
	   		<option value="Dentistry">Dentistry</option>
	   		<option value="MentalHealth">Mental Health</option>
	   		<option value="Surgery">Surgery</option>

	   		


	   	</select>
	   	</div>

	<div class="input-groupA">
		<button type="submit" name="Add" class="btnA">Add Doctor</button>
	</div>


	




</form>
	<div class="headerAD">
	<h2>Delete Doctor</h2>
</div>

<form method="post" action="index3.php" class="delete">

	<div class="input-groupA">
		<label>Doctor ID</label>
		<input type="text" name="deleteID" >

	</div>

	<div class="input-groupA">
		<button type="submit" name="Delete" class="btnA">Delete</button>
	</div>

</form>





	

</body>
</html>
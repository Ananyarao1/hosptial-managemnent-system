<?php include ('../../datalayer/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet"  href="style3.css">
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1 >Doctor<span>Patient</span></h1>
		<nav>
		


		
		<ul > 
			
		
			<li><a href="index2.php">MyInfo</a></li>
			<li><a href="doctorapp.php">My Appointments</a></li>
			<li><a href=" searchpatient.php">Search Patient</a></li>
			<li><a href="add.php">Add Description</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
			
			



	
			

		</ul>
		



	</nav>




</header>
<body >

	<div class="header">
	<h2>My Information</h2>
</div>
<form method="post" action="index2.php" class="info">


 


<div class="Dcontent">



<?php 
	$temp=$_SESSION['DoctorID'];
	$mysqli = new mysqli("localhost","root","","registration");
	$sql = "SELECT * FROM doctor where DoctorID=$temp"; 
	$result = mysqli_query($mysqli, $sql); 
 
if (mysqli_num_rows($result) > 0) { 
    // output data of each row 
    while($row = mysqli_fetch_assoc($result)) { 
        $Demail=$row['email'];
		$Dname=$row['Doctorname'];
		$DID=$row['DoctorID'];
		$add=$row['Address'];
		$contact=$row['ContactNumber'];
		$cat=$row['categorey'];
		
    } 
} else { 
    echo "0 results"; 
} 
	?>

	<label>ID: <?php echo $DID; ?></label>

	 	   <br>
	 	   <br>
	 	   <label> Email :  <?php echo $Demail; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Name : <?php echo $Dname; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Address : <?php echo $add; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Contact Number : <?php echo $contact; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Specialized In : <?php echo $cat; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   



	
        
           
	
</div>

  



 


</form>









	






</body>
</html>
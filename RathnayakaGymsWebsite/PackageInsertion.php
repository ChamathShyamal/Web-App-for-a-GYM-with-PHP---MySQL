<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PackageInsert</title>
</head>
<body bgcolor="#BCB8B8">
	
<?php
if(isset($_POST['btnsub']))	
{
	//connection
	$con=mysqli_connect("localhost:3307","root","","rathnayakagymsdb");
	//passing variables and values
	$packname=$_POST['pkgname']; 
	$packprice=$_POST['pkgprice'];

	//product ID won't ask because it will autoincrement
	mysqli_query($con,"insert into fitnesspackages(PackageName,PackagePrice) values('$packname','$packprice')");
	
	echo "<div style='text-align:center; box-shadow:1px 1px 5px 1px #2FB3B5;'>Inserted Successfully...!</div>";
}	
?>
	<br>
	<br>
	<br>
	<div style="width: 40%; margin: 0 auto; border: 2px double #2C3538; background-color: ##91C43A; box-shadow: 1px 1px 10px 1px;">
	<h3 align="center">Add New Record To The Fitness Packages Table Here</h3>
	<br>
	<br>
	<form action="" method="post">
		 <div style="padding: 10px; text-align: center;">
			 <input type="text" name="pkgname" value="" placeholder="Enter Package Name" style="padding: 5px; width: 70%">
		 </div>
		 <div style="padding: 10px; text-align: center;">
			 <input type="text" name="pkgprice" value="LKR" placeholder="Enter Package Price" style="padding: 5px; width: 70%">
		 </div>
		 <br>
		 <br>
		<div style="padding: 10px; text-align: center;">
			 <input type="submit" name="btnsub" value="INSERT" style="padding: 5px; width: 20%">
		</div>
	</form>
	<br>
	<br>
	<br>
	   <center><a href="PackageMenuTable.php">Back To Package Records Table</a></center>
    <br>
	</div>	
</body>
</html>

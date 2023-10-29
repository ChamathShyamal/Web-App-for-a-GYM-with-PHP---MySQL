<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PackageTableMenu</title>
</head> 
<body bgcolor="#BCB8B8">
<?php
	$con=mysqli_connect("localhost:3307","root","","rathnayakagymsdb");
	$sql=mysqli_query($con,"select * from fitnesspackages");
?>

<!--Creating a table to display the data inside the product table which is inside the database-->
<br>
<br>
   <h1 align="center">Admin! This is the Packages Table Menu</h1> 
   <h3 align="center">Where you can add,update and delete packages</h3>
<br>
<table border="1" align="center" bgcolor="#2FB3B5">
    <tr>
		<th>Product Name</th>
		<th>Product Price</th>
		<th>Add New Packages</th>
		<th>Update/Edit Packages</th>
		<th>Delete Existing Records</th>
	</tr>
 
<?php
//Retrieving data using an array
while($row=mysqli_fetch_array($sql))	 
{
?> 	
    <tr>
		<td><?php echo $row['PackageName']; ?></td>
		<td><?php echo $row['PackagePrice']; ?></td>
		<td align="center"><a href="PackageInsertion.php">ADD</a></td>
		<td align="center"><a href="UpdatePackageFormDisplay.php">UPDATE</a></td>
		<td align="center"><a href="PackageDeletion.php?pkgdelvariable=<?php echo $row['PackageID']; ?>">DELETE</a></td>
	</tr>
<?php
}
?>
</table>
<br>
<br>
	<center><a href="AdminDashboard.html">Click here to Admin Dashboard</a></center>
<br>
<br>
</body>
</html>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ProductTableMenu</title>
</head> 
<body bgcolor="#BCB8B8">
<?php
	$con=mysqli_connect("localhost:3307","root","","rathnayakagymsdb");
	$sql=mysqli_query($con,"select * from product");
?>

<!--Creating a table to display the data inside the product table which is inside the database-->
<br>
<br>
   <h1 align="center">Admin! This is the Product Table Menu</h1> 
   <h3 align="center">Where you can add,update and delete products</h3>
<br>
<table border="1" align="center" bgcolor="#2FB3B5">
    <tr>
		<th>Product Name</th>
		<th>Product Price</th>
		<th>Quantity</th>
		<th>Image</th>
		<th>ProductTypeID<br>(Equipment=1 / Supplement=2)</th>
		<th>Add New Products</th>
		<th>Update/Edit Products</th>
		<th>Delete Existing Records</th>
	</tr>
 
<?php
//Retrieving data using an array
while($row=mysqli_fetch_array($sql))	 
{
?> 	
    <tr>
		<td><?php echo $row['Product_Name']; ?></td>
		<td><?php echo $row['Product_Price']; ?></td>
		<td align="center"><?php echo $row['Quantity']; ?></td>
		<td><?php echo $row['Image']; ?></td>
		<td align="center"><?php echo $row['TypeID']; ?></td>
		<td align="center"><a href="ProductInsertion.php">ADD</a></td>
		<td align="center"><a href="UpdateProductFormDisplay.php">UPDATE</a></td>
		<td align="center"><a href="ProductDeletion.php?delvariable=<?php echo $row['Product_ID']; ?>">DELETE</a></td>
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

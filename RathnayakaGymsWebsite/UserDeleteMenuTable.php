<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>UserDeleteMenu</title>
</head> 
<body bgcolor="#BCB8B8">
<?php
	$con=mysqli_connect("localhost:3307","root","","rathnayakagymsdb");
	$sql=mysqli_query($con,"select * from user");
?>

<!--Creating a table to display the data inside the product table which is inside the database-->
<br>
<br>
   <h1 align="center">Admin! This is the Users Table Menu</h1> 
   <h3 align="center">Where you can add,update and delete users</h3>
<br>
<table border="1" align="center" bgcolor="#2FB3B5">
    <tr>
		<th>Username</th>
		<th>Password</th>
		<th>Delete Existing Records</th>
	</tr>
 
<?php
//Retrieving data using an array
while($row=mysqli_fetch_array($sql))	 
{
?> 	
    <tr>
		<td><?php echo $row['Username']; ?></td>
		<td><?php echo $row['Password']; ?></td>
		<td align="center"><a href="UserDeletion.php?usrdelvariable=<?php echo $row['UserID']; ?>">DELETE</a></td>
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

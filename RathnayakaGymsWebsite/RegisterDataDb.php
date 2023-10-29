<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registered Info</title>
</head>
<body>
<?php
	$conn= mysqli_connect('localhost:3307','root','');
	if(!$conn){
		echo "Not connected to the server!";
	}
	if(!mysqli_select_db($conn,'rathnayakagymsdb'))
	{
	echo "Database not selected!!";	
	}
	
	$username=$_POST['uname'];
	$password=$_POST['passwd'];
	
	$sql="INSERT INTO user(Username,Password) VALUES ('$username','$password')";
	
	if(!mysqli_query($conn,$sql))
	{
		echo "Not Inserted";
	}
	else
	{
		echo "You are successfully Registered!";
	}
	header("refresh:2 url=Register.php");

?>
</body>
</html>
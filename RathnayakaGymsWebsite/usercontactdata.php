<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contacted Info</title>
</head>
<body>
	<?php
	$connection= mysqli_connect('localhost:3307','root','');
	if(!$connection){
		echo "Not connected to the server!!";
	}
	if(!mysqli_select_db($connection,'rathnayakagymsdb'))
	{
	echo "Database not selected!!";	
	}
	
	$FirstName=$_POST['FirstName'];
	$LastName=$_POST['LastName'];
	$Email=$_POST['Email'];
	$Message=$_POST['Message'];
	
	$sql="INSERT INTO usercontactdata(FirstName,LastName,Email,Message) VALUES ('$FirstName','$LastName','$Email','$Message')";
	
	if(!mysqli_query($connection,$sql))
	{
		echo "Not Inserted";
	}
	else
	{
		echo "Inserted successfully You will be redirected now";
	}
	header("refresh:2 url=ContactUs.php");
	?>
</body>
</html>
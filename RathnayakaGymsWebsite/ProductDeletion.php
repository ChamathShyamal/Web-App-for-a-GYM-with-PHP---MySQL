<?php
	
//Getting delvariable variables value
$proid=$_GET['delvariable'];

//connection
$con=mysqli_connect("localhost:3307","root","","rathnayakagymsdb");
$query="delete from product where Product_ID='$proid'";
$data=mysqli_query($con,$query);

header("location:ProductMenuTable.php");






//http://localhost:8077/RathnayakaGymsWebsite/ProductMenuTable.php
?> 
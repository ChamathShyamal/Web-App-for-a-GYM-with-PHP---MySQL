<?php
	
//Getting pkgdelvariable variables value
$pkgid=$_GET['pkgdelvariable'];

//connection
$con=mysqli_connect("localhost:3307","root","","rathnayakagymsdb");
$query="delete from fitnesspackages where PackageID='$pkgid'";
$data=mysqli_query($con,$query);

header("location:PackageMenuTable.php");

?>




<?php
//create database connection
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
       
//select database
    mysqli_select_db($conn,'rathnayakagymsdb');

//update query
   $sql = "UPDATE fitnesspackages SET PackageName='$_POST[pkgName]',PackagePrice='$_POST[pkgPrice]' WHERE PackageID='$_POST[pkgId]'";
       
//execute sql query
   if(mysqli_query($conn,$sql)) 
   {
	 echo "Record Successfully Updated...You will be redirected back now!";
     header("refresh:1 url=UpdatePackageFormDisplay.php");
   }

   else
   {
	  echo "Not Updated";   
   }
       
?>

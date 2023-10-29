<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ProductUpdate</title>
</head>
<body bgcolor="#BCB8B8">
<?php
  $servername = "localhost:3307";
  $username = "root";
  $password = "";
  $records=null;
  $conn = mysqli_connect($servername, $username, $password);
 
  if (!mysqli_select_db($conn,'rathnayakagymsdb')) 
  {
    echo("not selected");
  }
  else
 {
    $sql ="select * from fitnesspackages";
    $records = mysqli_query($conn,$sql);
 } 
?>
<br>
<br>
<br>
<br>
<br>
<br>
	<h3 align="center">Update Exisitng Records In The Package Table Here</h3>
<br>
<br>
<table border="1" align="center">
  <tr>
    <th>Package ID</th>
    <th>Package Name</th>
    <th>Package Price</th>
    <th>Update</th>
  </tr>
<?php 
while ($row = mysqli_fetch_array($records))
{
   echo("<tr><form action=PackageUpdation.php method=post>");
	    echo("<td><input type=text name =pkgId value='".$row['PackageID']."' readonly </td>");
        echo("<td><input type=text name=pkgName value='".$row['PackageName']."'</td>");
        echo("<td><input type=text name=pkgPrice value='".$row['PackagePrice']."'</td>");
        echo("<td><input type=submit value=UPDATE> ");
        echo("</form></tr>");
}
?>
</div>
</table>
    <br>
	<br>
	<br>
	   <center><a href="PackageMenuTable.php">Back To Product Records Table</a></center>
    <br>
</body>
</html>
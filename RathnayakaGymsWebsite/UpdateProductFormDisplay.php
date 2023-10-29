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
    $sql ="select * from product";
    $records = mysqli_query($conn,$sql);
 } 
?>
<br>
<br>
<br>
	<h3 align="center">Update Exisitng Records In The Product Table Here</h3>
<br>
<br>
<table border="1" align="center">
  <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Quantity</th>
    <th>Image</th>
    <th>Product Type ID<br>
    1=Equipment / 2=Supplement </th>
    <th>Update</th>
  </tr>
<?php 
while ($row = mysqli_fetch_array($records))
{
   echo("<tr><form action=ProductUpdation.php method=post>");
	    echo("<td><input type =text name =proId value='".$row['Product_ID']."' readonly </td>");
        echo("<td><input type=text name=proName value='".$row['Product_Name']."'</td>");
        echo("<td><input type=text name=proPrice value='".$row['Product_Price']."'</td>");
        echo("<td><input type=text name=proQuantity value='".$row['Quantity']."'</td>");
        echo("<td><input type=text name=proImage value='".$row['Image']."'</td>");
        echo("<td><input type=text name=proTypeId value='".$row['TypeID']."'</td>");
        echo("<td><input type=submit value=UPDATE> ");
        echo("</form></tr>");
}
?>
</div>
</table>
    <br>
	<br>
	<br>
	   <center><a href="ProductMenuTable.php">Back To Product Records Table</a></center>
    <br>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ProductInsert</title>
</head>
<body bgcolor="#BCB8B8">
	
<?php
if(isset($_POST['btnsub']))	
{
	//connection
	$con=mysqli_connect("localhost:3307","root","","rathnayakagymsdb");
	//passing variables and values
	$proname=$_POST['proname']; 
	$proprice=$_POST['proprice'];
	$proquantity=$_POST['proquantity'];
	$proimage=$_POST['proimage'];
	$protypeid=$_POST['protypeid'];

	//product ID won't ask because it will autoincrement
	mysqli_query($con,"insert into product(Product_Name,Product_Price,Quantity,Image,TypeID) values('$proname','$proprice','$proquantity','$proimage','$protypeid')");
	
	echo "<div style='text-align:center; box-shadow:1px 1px 5px 1px #2FB3B5;'>Inserted Successfully...!</div>";
}	
?>
	<br>
	<br>
	<br>
	<div style="width: 40%; margin: 0 auto; border: 2px double #2C3538; background-color: ##91C43A; box-shadow: 1px 1px 10px 1px;">
	<h3 align="center">Add New Record To The Product Table Here</h3>
	<br>
	<br>
	<form action="" method="post">
		 <div style="padding: 10px; text-align: center;">
			 <input type="text" name="proname" value="" placeholder="Enter Product Name" style="padding: 5px; width: 70%">
		 </div>
		 <div style="padding: 10px; text-align: center;">
			 <input type="text" name="proprice" value="LKR" placeholder="Enter Product Price" style="padding: 5px; width: 70%">
		 </div>
		 <div style="padding: 10px; text-align: center;">
			 <input type="number" name="proquantity" value="" placeholder="Select Product Quantity" style="padding: 5px; width: 70%">
		 </div>
		 <div style="padding: 10px; text-align: center;">
			 <input type="text" name="proimage" value="Images&#47" placeholder="Enter Product Image Path" style="padding: 5px; width: 70%">
		 </div>
		 <br>
		<div style="padding: 10px; text-align: center;">
			Choose the Product Type(1-Equipment / 2-Supplement):
            <select id="TypeID" name="protypeid">
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
		</div>
			<br>
		<div style="padding: 10px; text-align: center;">
			 <input type="submit" name="btnsub" value="INSERT" style="padding: 5px; width: 20%">
		</div>
	</form>
	<br>
	<br>
	<br>
	   <center><a href="ProductMenuTable.php">Back To Product Records Table</a></center>
    <br>
	</div>	
</body>
</html>

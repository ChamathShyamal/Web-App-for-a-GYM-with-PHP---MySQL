<?php

$servername='localhost:3307';
$username='root';
$password='';
$database_name='rathnayakagymsdb';

//creating the databse connection
$conn= mysqli_connect($servername, $username, $password, $database_name);

//checking the databse connection
if (!$conn) {
	die("Connection Failed: " . mysqli_connect_error());
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Products</title>
<link rel="stylesheet" type="text/css" href="Style.css">
<style>
 .structure{
     border: 1px solid #eaeaec;
     margin: 2px 2px 8px 2px;
     padding: 5px;
     text-align: center;
     background-color: #efefef;
	 width: 200px;
	 height: 400px;
}
.footer {
display: flex;
flex-flow: row wrap;
padding: 1px;
color: #fff;
background-color: #2C3538;
}

.footer > * {
flex:  1 100%;
}

.CompanySection {
margin-right: 5em;
margin-bottom: 2em;
}

.CompanySection p {
padding-right: 20%;
color: #999;
} 

.CompanySection {
flex: 1 0px;
}
	
h2 {
font-weight: 400;
font-size: 15px;
margin-left: 150px;	
}

.footer ul {
list-style: none;
padding-left: 0;
}

.footer li {
line-height: 2em;
}

.footer a {
text-decoration: none;
}

.NavSection {
display: flex;
flex-flow: row wrap;
}

.NavSection > * {
flex: 1;
}
	
.NavSection {
flex: 2 0px;
}

.boxnav{
	margin-left: 150px;
}
	
.AddressSection{
	margin-left: 150px;
}

.AddressSection li {
color: #999;
}

.Endfooter {
text-align: center;
color: #999;
padding-top: 50px;
}
a {
  color: #0C21E8;
}
</style>
</head>
<body bgcolor="#BCB8B8">
	
  <nav> 
	 <div class="logo">
     <img width="118px" src="Images/logo1.jpg">
	 </div>
	<ul>	
		
		  <li><a href="Index.php" class="active">Home</a></li>
		  <li><a href="AboutUs.php">About Us</a></li>
		  <li><a href="html_php_FitnesPackages.php">Fitness Packages</a></li>
		  <li><a href="Products.php">Products</a></li>
		  <li><a href="ContactUs.php">Contact Us</a></li> 
		  <li><a href="Login.php">Login/Register</a></li>
		 
	</ul>
 </nav>
	
    <div class="image">
	<img src="Images/forHomePage5.3.png">
	<div class="centered">PODUCTS</div>
	</div>
<br>
    <h1 style="text-align: center">Welcome to Rathnayaka Gym's Product Store!</h1>
    <h4 style="text-align: center; color: #100C50">Note that you can only view our products from here...If you want to buy these products, Login/Register first.</h4>

<br>
<form action="SearchProduct.php" method="post"> 
<h4 align="center">Enter the value you want to search about a product detail inside the following searching box and press on the search button below :</h4>
<form action="SearchProduct.php" method="post">
	<div class="searchbar">
      <input type="text" name="valueToSearch" placeholder="Enter value to Search Product Details....."/>
    </div>
	<br>
    <div class="searchbtn">
      <input type ="submit" name="search" value="SEARCH"/>
	</div>
</form>
<br>
<br>
<br>
        <?php
            $query = "select * from product order by Product_ID asc";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div class="col-md-3" style="float: left;">
                        <form method="post" action="ProductsCart.php?action=Product_ID=<?php echo $row["Product_ID"];?>">
                            <div class="structure">
                                <img src="<?php echo $row["Image"];?>" width="190px" height="200px">
                                <h5><?php echo $row["Product_Name"];?></h5>
                                <h5>LKR<?php echo $row["Product_Price"];?></h5>
                                <h5>Available Quantity<br><?php echo $row["Quantity"];?></h5>
                                <h5>1=Equipment / 2=Supplement<br><?php echo $row["TypeID"];?></h5>
                            </div>
                        </form>
                    </div>
              
        <?php
                }
            }
        ?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="footer">
<div class="CompanySection">
<h1><img width="118px" src="Images/logo1.jpg" alt="Logo Of Rathnayaka Gym"></h1>
<p>You have visited to one of the Sri Lanka's best Gyms' website. Rathnayaka GYMS is a fitness center, which has been grown rapidly throughout the country. They provide a quality healthcare service and give their members control over their health is paramount at all Rathnayaka GYMS.</p>
</div>
	
<ul class="NavSection">
<li>
<h2>Navigation</h2>
<ul class="boxnav">
<li><a href="AboutUs.php">About Us</a></li>
<li><a href="html_php_FitnesPackages.php">Fitness Packages</a></li>
<li><a href="Products.php">Products</a></li>
<li><a href="ContactUs.php">Contact Us</a></li>
<li><a href="Login.php">Login/Register</a></li>
<li><a href="AdminLogin.php">Admin Login</a></li>
</ul>
</li>
	
	
<li>
<h2>Our Address</h2>
<ul class="AddressSection">
<li>No.132/5</a></li>
<li>Rathnayaka Street</li>
<li>Colombo</li>
</ul>
</li>
</ul>
	
<div class="Endfooter">
<p>All rights reserved by ©Rathnayaka GYM 2021 </p>
</div>
</footer>
	
</body>
</html>
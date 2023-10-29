<?php

  if(isset($_POST['search'])){
     $valueToSearch = $_POST['valueToSearch'];
     $query = "SELECT * FROM fitnesspackages WHERE CONCAT(PackageID,PackageName,PackagePrice) LIKE '%".$valueToSearch."%'"; /*using percentage symbol as it does not matter what kind of content is searched, it will search any value from database entered by the user in the field*/
     $search_result = filterTable($query);
   }

  else {
     $query = "SELECT * FROM fitnesspackages";
     $search_result = filterTable($query);
   }

       /*creating a user defined function*/
        function filterTable($query) {
           $servername = "localhost:3307";
           $username = "root";
           $password = "";	
         $connect = mysqli_connect($servername, $username, $password,"rathnayakagymsdb");
         $filter_Result = mysqli_query($connect,$query);
         return $filter_Result;
         }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fitness Packages</title>
<link rel="stylesheet" type="text/css" href="Style.css">
<style>
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
	<img src="Images/forHomePage3.jpg">
	<div class="centered">FITNESS PACKAGES</div>
	</div>
<br>
<br>
<br>
<br>
<br>
<br>
<h4 align="center">Enter the value you want to search about a package detail inside the following searching box and press on the search button below :</h4>
<form action="html_php_FitnesPackages.php" method="post">
	<div class="searchbar">
      <input type="text" name="valueToSearch" placeholder="Enter value to Search Package Details....."/>
    </div>
	<br>
    <div class="searchbtn">
      <input type ="submit" name="search" value="SEARCH"/>
	</div>
<br>
<br>	
<br>
<br>

<table class="tbl">
<tr>
<th>Package ID</th>
<th>Package Name</th>
<th>Package Price</th>
</tr>
<?php while($row = mysqli_fetch_array($search_result)):?>
<tr>
<td><?php echo $row['PackageID'];?></td>
<td><?php echo $row['PackageName'];?></td>
<td><?php echo $row['PackagePrice'];?></td>
</tr>
<?php endwhile; ?>
</table>
</form>	
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
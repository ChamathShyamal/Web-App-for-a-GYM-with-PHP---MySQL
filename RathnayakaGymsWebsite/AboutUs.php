<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Us</title>
<link rel="stylesheet" type="text/css" href="Style.css">
<style>
#btnUnderline{
    text-decoration: none;
	color: #EFE1E1;
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
	<img src="Images/forHomePage4.jpg">
	<div class="centered">ABOUT US</div>
	</div>
<br>
<br>
<br>
<br>
<br>	

<!--heading of container---------------->	
<section class="services">
	
	<div class="s-heading">
	<h1>Here are our Services</h1>
	</div>
		
  <!--services-box-container------------------->
  <div class="s-box-container">
		
	<!--service-box-1---------------->	
	<div class="s-box">
	<div class="bar"></div>
	<!--servies-name---------->
	<h1>Fitness Packages</h1><br>
		<br><p>We provide various types of fitness packges which are the best for reasonable prices</p>
	    <button style="padding: 5px 10px; border-radius:20px; background-color: #100C50; font-size: 15px; margin: 4px 5px; cursor: pointer;"><a id="btnUnderline" href="html_php_FitnesPackages.php">VIEW PACKGES</a></button>
	</div>
		
	<!--service-box-2---------------->	
	<div class="s-box">
	<div class="bar"></div>
	<h1>Food Supplements</h1><br>
		<p>We are having a large number of food supplements store where customers are eligible to buy them online</p>
		<button style="padding: 5px 10px; border-radius:20px; background-color: #100C50; font-size: 15px; margin: 4px 5px; cursor: pointer;"><a id="btnUnderline" href="Products.php">VIEW SUPPLEMENTS</a></button>
	</div>
		
	<!--service-box-3---------------->	
	<div class="s-box">
	<div class="bar"></div>
	<h1>Fitness Equipments</h1><br>
		<p>We own various types of fitness equipments which are best in quality and ypu can order at a fair proce now trough this website</p>
		<button style="padding: 5px 10px; border-radius:20px; background-color: #100C50; font-size: 15px; margin: 4px 5px; cursor: pointer;"><a id="btnUnderline" href="Products.php">VIEW EQUIPMENTS</a></button>
	</div>		
  </div>
</section>

	
<div class="glry">GALLERY</div>
<br>
<br>
<br>
<div class="ImageContainer">
	<div class="images"><img src="Images/gallery1.jpg" alt="First Gallery Image" width="300" height="200"></div>
	<div class="images"><img src="Images/gallery2.jpeg" alt="Second Gallery Image" width="300" height="200"></div>
	<div class="images"><img src="Images/gallery3.jpg" alt="Third Gallery Image" width="300" height="200"></div>
	<div class="images"><img src="Images/gallery4.jpg" alt="Fourth Gallery Image" width="300" height="200"></div>
	<div class="images"><img src="Images/gallery5.jpg" alt="Fifth Gallery Image" width="300" height="200"></div>
	<div class="images"><img src="Images/gallery6.jpg" alt="Sixth Gallery Image" width="300" height="200"></div>
	<div class="images"><img src="Images/gallery7.jpg" alt="First Gallery Image" width="300" height="200"></div>
	<div class="images"><img src="Images/gallery8.jpg" alt="Second Gallery Image" width="300" height="200"></div>
	<div class="images"><img src="Images/gallery9.jpg" alt="Third Gallery Image" width="300" height="200"></div>
</div>
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
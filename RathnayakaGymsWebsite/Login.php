<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="Style.css">
<style>
	
.container {   
    padding: 25px;   
    background-color: #BCB8B8;  
	justify-content: center;
    align-items: center;
}  
form{
    align-items: center;
	justify-content: center;
    text-align: center;
}
button {   
    background-color: #100C50;
    color: white;
    padding: 13px 16px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 8%;
    opacity: 0.9;
    border-radius: 15px;
    color: #020000;
    box-shadow: 0px 0px 10px rgb(0%, 0%, 0%);
	font-size: 17px;
}   
#btnLog{
	text-decoration: none;
	color: #030303;	
}
input[type=text], input[type=password] {   
    width: 30%;   
    margin: 5px 0 22px 0;  
    padding: 10px 20px;   
    display: inline-block;   
    border: 2px solid black;   
    box-sizing: border-box;
	background: #4E4E4A;
	border-radius: 4px;
}  
button:hover {   
    opacity: 1;   
}    
/* Add a blue text color to links */
a {
  color: #0C21E8;
}
.ErrorMsg {
	color: #E01717;
}
.EmptyErr {
	color: #E01717;
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
<br>
<br>
<br>
<br>
<br>
<br>
	  
    <form action="Login.php" method="post">  
        <div class="container"> 
			<center> <h1>Login </h1> </center> 
<br>
<br>
<br>
<?php

   include("Config.php");
   session_start();
   
$ErrMsg = "";
$EmptyErrMsg = "";
			
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($connection,$_POST['Username']);
      $password = mysqli_real_escape_string($connection,$_POST['Password']); 
      
      $sql = "SELECT Username FROM user WHERE Username = '$username' and Password = '$password'";
      $result = mysqli_query($connection,$sql);
	  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      // If result matched $username and $password, table row must be 1 row
	 if(empty($username) || empty($password) )
	 {
		 $EmptyErrMsg = "Username and Password Fields Cannot Be Empty!";
	 }
	 else
	 {
      if($count == 1) {
         $_SESSION['Username'] = $username;
         
         header("location: ProductsCart.php");
      }
	   else {
         $ErrMsg = "You Entered Username or Password is invalid";
      } 
   }
}			
?>
<span class="EmptyErr">*<?php echo $EmptyErrMsg; ?></span><br>	
<span class="ErrorMsg">*<?php echo $ErrMsg; ?></span><br>
<br>
<br>
<br>
            Username : <br> 
            <input type="text" placeholder="Enter Username" name="Username">  <br>
            Password : <br>   
            <input type="password" placeholder="Enter Password" name="Password"> <br>
<br>
<br>
			<button type="submit"><a id="btnLog" href="ProductsCart.php">Login</a></button>  
<br>
<br>
<br>
<br>
			Do you want to Register?<a href="Register.php"> Register</a>
        </div>   
    </form>     
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
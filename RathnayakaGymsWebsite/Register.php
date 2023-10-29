<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
<link rel="stylesheet" type="text/css" href="Style.css">
<style>
/* Add padding to containers */
.container {
  padding: 16px;
  background-color: #BCB8B8;
  justify-content: center;
  align-items: center;
  text-align: center;
}

/* Full-width input fields */
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
/* Set a style for the submit button */
.buttonReg {
  background-color: #100C50;
  color: white;
  padding: 16px 20px;
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

.buttonReg:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color:  #0C21E8;
}

/* Set a grey background color and center the text of the "sign in" section */
.Login {
  text-align: center;
}
.error {
	color: #E01717;
}
.successUnsuccess {
	color: #070472;
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


<?php
//Register Form Validation
// define variables and set to empty values
$usernameErr = $usernameErrr = $passwordErr = $confirmPasswordErr = $PassConPassErr = "";
$username = $password = $confirmPassword = "";
$SuccessUnsuccessMsg="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	    if (empty($_POST["passwd"]) || empty($_POST["conpassword"]) || empty($_POST["uname"]) ) 
	     {
          $passwordErr = "Password is required";
	      $confirmPasswordErr = "Confirm Password is required";
	      $usernameErr = "Username is required";
         }
	     else if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['uname']))
         {
          $usernameErrr = "Only letters and white space allowed";
         }
	     else
	     {
			 	
            $password = test_input($_POST["passwd"]);
			$confirmPassword = test_input($_POST["conpassword"]);
		    $username = test_input($_POST["uname"]);
         
	        if($password!=$confirmPassword)
		     {
	         $PassConPassErr="Password & Confirm Password should match !";
             }
	          else{ 
              $conn= mysqli_connect('localhost:3307','root','');
			 
	             if(!$conn)
			     {
		           echo "Not connected to the server!";
	             }
			 
	                if(!mysqli_select_db($conn,'rathnayakagymsdb'))
	                 {
	                   echo "Database not selected!!";	
	                 }
				
	                   $sql="INSERT INTO user(Username,Password) VALUES ('$username','$password')";
	
	                    if(!mysqli_query($conn,$sql))
	                    {
	                      $SuccessUnsuccessMsg= "Not Inserted";
	                    }
	                    else
	                    {
	            	      $SuccessUnsuccessMsg= "You are successfully Registered!";
						  header("refresh:3 url=Login.php");
	                    }
	          }
	       } 
}	

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
	
	
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
<div class="container">
<form action="Register.php" method="post">

    <h1>Register</h1>
    <p>Create an account from here successfully to Login !</p>
<br>
<br>
	<span class="error">* <?php echo $PassConPassErr; ?></span><br>
	<span class="successUnsuccess"> <?php echo $SuccessUnsuccessMsg ?></span><br>
	
<br>
    <span class="error">* <?php echo $usernameErr; echo $usernameErrr;?></span><br>
    Username:<br> <input type="text" placeholder="Enter Username" name="uname" id="uname">
<br>
	<span class="error">* <?php echo $passwordErr;?></span><br>
    Password:<br> <input type="password" placeholder="Enter Password" name="passwd" id="passwd">
<br>
	<span class="error">* <?php echo $confirmPasswordErr;?></span><br>
    Confirm Password:<br> <input type="password" placeholder="Enter Confirm Password" name="conpassword" id="conpassword">
<br>
<br>
<br>
<br>
    <button type="submit" class="buttonReg">REGISTER</button>
  
  
  <div class="container Login">
    <p>Have you already created an account?<a href="Login.php"> Login</a>.</p>
  </div>
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
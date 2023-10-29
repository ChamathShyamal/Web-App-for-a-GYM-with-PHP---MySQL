<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
<link rel="stylesheet" type="text/css" href="Style.css">
<style>
.error {
	color: #E01717;
}
.successUnsuccess {
	color: #070472;
}
.emailrequired {
	color: #E01717;
}
.footer 
{
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
	<img src="Images/forHomePage.jpg">
	<div class="centered">CONTACT US</div>
	</div>
	<br>
<section class="contact">
	<div class="contact-heading"> 
	<h1>Now you can Contact Us !</h1>
	<p>This is the simplest, secured and fastest way to contact Rathnayaka GYM online</p>
	</div>
  <form action="ContactUs.php" method="post">  
<?php
$fieldsErr =  "";
$SuccessUnsuccessMsg = $emailErr = $invalidFormatErr = "";
	  
$connection= mysqli_connect('localhost:3307','root','');
	  
if(!$connection)
 {
  echo "Not connected to the server!!";
 }
else if(!mysqli_select_db($connection,'rathnayakagymsdb'))
{
 echo "Database not selected!!";	
}
else{  
	   
     if (isset($_POST['contact-btn']))
     {

         $firstname=$_POST['FirstName'];
         $lastname=$_POST['LastName'];
         $email=$_POST['Email'];
         $message=$_POST['Message'];

      if (empty($firstname)|| empty($lastname) || empty($message))
       {
        $fieldsErr= "Fields Can't Be Empty!";
       }
      else if (empty($email))
       {
        $emailErr = "Email is Requred !";
       }
	  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
       {
        $invalidFormatErr = "Invalid E-mail Format!";
       } 
      else{

        $sql="INSERT INTO usercontactdata(FirstName,LastName,Email,Message) VALUES ('$firstname','$lastname','$email','$message')";
	
	      if(!mysqli_query($connection,$sql))
	      {
	       $SuccessUnsuccessMsg = "Not Inserted";
	      }
	      else
	      {
           $SuccessUnsuccessMsg = "Inserted successfully...Thanks for contacting us!";
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
   <span class="successUnsuccess"> <?php echo $SuccessUnsuccessMsg ?></span><br>
   <span class="emailrequired">* <?php echo $emailErr; echo $invalidFormatErr;?></span><br>
<br>
	<div class="TextsOnFields">
	<span class="error">* <?php echo $fieldsErr;?></span><br>
	First Name:<input type="text" name="FirstName" placeholder="Enter your first name here">
	Last Name:<input type="text" name="LastName" placeholder="Enter your last name here">
	Email:<input type="text" name="Email" placeholder="Enter your E-mail here">
	<span class="error">* <?php echo $fieldsErr;?></span><br>
	Message:<textarea name="Message" placeholder="Type here the message you wanna send us...."></textarea>
	<center><button class="contact-btn" name="contact-btn" type="submit"><h1>Submit</h1></button></center>
  </form>
</section>

	
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
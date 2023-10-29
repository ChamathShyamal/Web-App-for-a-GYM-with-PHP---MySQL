<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Payment</title>
<link rel="stylesheet" type="text/css" href="Style.css">
<style>
/* Add padding to containers */
.container {
  padding: 16px;
  justify-content: center;
  align-items: center;
  text-align: center;
  background-color: #efefef;
}
label{
	width: 240px;
	display:inline-block;
}
/* Full-width input fields */
input[type=text] {
  width: 20%;   
  margin: 5px 0 20px 0;  
  padding: 10px 0px ;   
  display: inline-block;   
  border: 2px solid black;   
  box-sizing: border-box;
  background: #fff;
  border-radius: 4px;
}
input[type=number]{
  width: 12%;   
  margin: 5px 0 20px 0;  
  padding: 10px 0px ;   
  display: inline-block;   
  border: 2px solid black;   
  box-sizing: border-box;
  background: #fff;
  border-radius: 4px;
}
select{
  width: 8%;   
  margin: 5px 0 20px 0;  
  padding: 10px 0px;   
  display: inline-block;   
  border: 2px solid black;   
  box-sizing: border-box;
  background: #fff;
  border-radius: 4px;	
}
#stCode{
  width: 20%;   
  margin: 5px 0 20px 0;  
  padding: 10px 0px;   
  display: inline-block;   
  border: 2px solid black;   
  box-sizing: border-box;
  background: #fff;
  border-radius: 4px;		
}
/* Set a style for the submit button */
.buttonPay {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 8%;
  opacity: 0.9;
  background-color: #282A5;
  border-radius: 15px;
  color: #020000;
  box-shadow: 0px 0px 10px rgb(0%, 0%, 0%);
}

.buttonPay:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color:  #0C21E8;
}

</style>
</head>
<body>

<br>
<div class="container">
<form action="Payment.php" method="post">
<?php
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
	   
     if (isset($_POST['buttonPay']))
     {

     $custName=$_POST['name'];
	 $cardTp=$_POST['CrdType'];
     $cardNo=$_POST['CardNumber'];
	 $expDate=$_POST['ExpDate'];
	 $cvv=$_POST['cvv'];
	 $addNo=$_POST['stCode'];
	 $addSt=$_POST['stName'];
	 $addCity=$_POST['city'];
	
	
      if (empty($custName)|| empty($cardTp) || empty($cardNo) || empty($expDate)|| empty($cvv) || empty($addNo) || empty($addSt)|| empty($addCity))
       {
        echo "Fields Can't Be Empty!";
       }
      else{

        $sql="INSERT INTO payment (CustomerName,CardType,CardNumber,ExpiryDate,CVV,AddressNo,AddressStreet,AddressCity) VALUES ('$custName','$cardTp','$cardNo','$expDate','$cvv',' $addNo','$addSt','$addCity')";
	
	      if(!mysqli_query($connection,$sql))
	      {
	      echo "Not Inserted";
	      }
	      else
	      {
           echo "Inserted successfully...Thanks for contacting us!";
		   header('location: Payment.php');
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
	
	
<br>
<br>
<br>
<fieldset>
	<h1>Payment Details</h1>
    <p>Please fill the followig form to do the payment and place the order successfully!</p>
<br>
<br>
<br>
   <label>Your Name:</label> <input type="text" placeholder="Enter Your Name Here" name="name" id="name">
<br>
	<label>Card Type:</label> <input type="radio" name="CrdType" value="Visa">Visa<input type="radio" name="CrdType" value="Master Card">Master Card<input type="radio" name="CrdType" value="American Express">American Express<br>
<br>
    <label>Card Number:</label><input type="text" placeholder="Enter Your Card Number Here" name="CardNumber" id="CardNumber">
<br>
    <label>Expiry Date:</label>
	<select name="ExpDate" id="ExpDate">
        <option value="volvo">January</option>
        <option value="saab">February</option>
        <option value="mercedes">March</option>
        <option value="audi">April</option>
		<option value="audi">May</option>
		<option value="audi">June</option>
		<option value="audi">July</option>
		<option value="audi">August</option>
		<option value="audi">September</option>
		<option value="audi">October</option>
		<option value="audi">November</option>
		<option value="audi">December</option>
    </select> 
	<input type="number" placeholder="Provide the Date Here" name="ExpDate" id="ExpDate">
<br>
    <label>CVV:</label><input type="text" placeholder="xxxx" name="cvv" id="cvv">
<br>
    <label>Street Code:</label><input type="number" placeholder="Provide Your Street Number" name="stCode" id="stCode">
<br>
	<label>Street Name:</label><input type="text" placeholder="Enter Your Street Name Here" name="stName" id="stName">
<br>
    <label>City:</label><input type="text" placeholder="Enter the City Name Here" name="city" id="city">
<br>
    <label>Contact Number:</label><input type="text" placeholder="Enter Your Contact Number Here" name="cNo" id="cNo">
	
<br>
<br>
<br>
<br>
    <button type="reset" class="buttonPay" value="Reset">CLEAR</button>
    <button type="submit" name="buttonPay" class="buttonPay">PAY NOW</button>  
<br>
<br>
<br>
	<a href="ProductsCart.php">Back to Cart</a>
 </div>
</form>
<br>
</body>
</html>
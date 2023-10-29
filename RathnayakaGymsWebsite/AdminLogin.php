<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AdminLogin</title>
<style>
	
form {
    width: 1000px;
    border: 3px solid rgb(177, 142, 142);
    background-color: #BCB8B8;    
	border-radius: 20px;
}
h2 {
    text-align: center;
    margin-bottom: 40px;
}
input {
    display: block;
    border: 2px solid #777;
    width: 60%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
    background-color: #4E4E4A;
}
label {
    color: #050000;
    font-size: 18px;
    padding: 10px;
}
button {
    float: center;
    background-color: #100C50;
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
	cursor: pointer;
}
.ErrMsg {
  color: #E01717;
}
h4 {
    text-align: center;
    color: #090B72;
}

</style>
</head>
<body bgcolor="BCB8B8">
<br>
<br>
<div align="center"> 
 <form action="AdminLogin.php" method="post">

 <h2>Welcome to Rathnayaka Gym's Admin Login...!</h2>
 <h4>Ordinary Customers cannot Log from here. Note that only<br> Admin of the Rathnayaka Gym can Log In from here.</h4>
<br>
<?php
	
   include("Config.php");

$ErrMsg="";
	
if (isset($_POST['Adminuname']) && isset($_POST['Adminpassword'])) {

function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$uname = validate($_POST['Adminuname']);
$pass = validate($_POST['Adminpassword']);

    if (empty($uname)) 
	{
        $ErrMsg= "Admin Username Field Cannot Be Empty!";
		
    }
	else if(empty($pass))
	{
       $ErrMsg= "Admin Password Field Cannot Be Empty!";
    }
	else
	{
        $sql = "SELECT * FROM adminuser WHERE AdminUsername='$uname' AND AdminPassword='$pass'";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) === 1) 
		 {
            $row = mysqli_fetch_assoc($result);
            if ($row['AdminUsername'] === $uname && $row['AdminPassword'] === $pass) 
			{
                header("Location: AdminDashboard.html");
            }
			else
			{
                $ErrMsg= "Incorect Username or Password!";
            }

         }
		else
		{
            $ErrMsg= "Incorect Username or Password Entered!";
        }
    }

}
?>
<br>
 <span class="ErrMsg">*<?php echo $ErrMsg; ?></span><br>
<br>
<br>
        <label>Admin Username:</label>
        <input type="text" name="Adminuname" placeholder="Enter Admin Username Here"><br>
 
        <label>Admin Password:</label>
        <input type="password" name="Adminpassword" placeholder="Enter Admin Password Here"><br> 
<br>
<br>
<br>
        <button type="submit">LOG AS ADMIN</button>
<br>
<br>
<br>
<br>
	 <center><a href="Index.php">Click Here to Home Page</a></center><br>

     </form>
</div>
</body>
</html>
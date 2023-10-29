<?php

  if(isset($_POST['search'])){
     $valueToSearch = $_POST['valueToSearch'];
     $query = "SELECT * FROM product WHERE CONCAT(Product_ID,Product_Name,Product_Price,Quantity,Image,TypeID) LIKE '%".$valueToSearch."%'"; /*using percentage symbol as it does not matter what kind of content is searched, it will search any value from database entered by the user in the field*/
     $search_result = filterTable($query);
   }

  else {
     $query = "SELECT * FROM product";
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
<title>Products</title>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
        <?php
   
            if(mysqli_num_rows($search_result)>0){
                while($row = mysqli_fetch_array($search_result)){
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
	<center><a href="Products.php">Back</a></center>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Same Mistakes - Admin Panel</title>
</head>

<html>

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   
   <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/433b16cf83.js" crossorigin="anonymous"></script>
  
  
  <!-- Scripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body style="background-color:#f3e5e0">
<!--NAVBAR-------------------------------------------------------->

  <div class="topnav">
    <a href="index.html" class="active">same mistakes</a>
      <div id="myLinks">
          <a class="active" href="index.html"> Home</a>
          <a href="store.html"> Store</a>
          <a href="music.html"> Music</a>
          <a href="contact.php"> Contact</a>
      </div>
              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
              </a>
  </div>

<!--NAVBAR--------------------------------------------------------->
<div class="hero-image">
    </div>

</html>


<?php

$servername = "45.84.204.205";
$username = "u356620682_samemistakes";
$password = "8RNR47G/s[I";

// Create connection
$con = new mysqli($servername, $username, $password);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";

if($test != "")

{
  $CreateQuery = "INSERT INTO products (prod_name, colour, stock, description, image, size, price) VALUES ('', '', '', '', '$test', '', '')";
  mysqli_query($con, $CreateQuery);

};


if(isset($_POST['submit']))

{
    $UpdateQuery = "UPDATE products SET prod_name='$_POST[prod_name]' WHERE ID='$_POST[hidden]'";
    mysqli_query($con, $UpdateQuery);

    $UpdateQuery1 = "UPDATE products SET colour='$_POST[colour]' WHERE ID='$_POST[hidden]'";
    mysqli_query($con, $UpdateQuery1);

      $UpdateQuery2 = "UPDATE products SET stock='$_POST[stock]' WHERE ID='$_POST[hidden]'";
        mysqli_query($con, $UpdateQuery2);

          $UpdateQuery3 = "UPDATE products SET description='$_POST[description]' WHERE ID='$_POST[hidden]'";
            mysqli_query($con, $UpdateQuery3);

            $UpdateQuery4 = "UPDATE products SET image='$_POST[image]' WHERE ID='$_POST[hidden]'";
            mysqli_query($con, $UpdateQuery3);
            
                $UpdateQuery4 = "UPDATE products SET size='$_POST[size]' WHERE ID='$_POST[hidden]'";
                mysqli_query($con, $UpdateQuery3);
                    
                    $UpdateQuery5 = "UPDATE products SET price='$_POST[price]' WHERE ID='$_POST[hidden]'";
                    mysqli_query($con, $UpdateQuery3);
};

    if(isset($_POST['delete']))

{
    $DeleteQuery = "DELETE FROM products WHERE ID='$_POST[hidden]'";
    mysqli_query($con, $DeleteQuery);
};

    if(isset($_POST['add']))

{
    $CreateQuery = "INSERT INTO products (prod_name, colour, stock, description, image, size, price) VALUES ('', '', '', '', '', '', '')";
    mysqli_query($con, $CreateQuery);
};
?>
          <?php

          $result = mysqli_query($con,"SELECT * FROM products");
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
              ?>
					<tbody>
              <form action='admintest.php' method='post'>
						<tr>
							<td><input type='text' name='hidden' value= "<?php echo $row['ID'];?>"></td>
							<td><input type='text' name='prod_name' value= "<?php echo $row['prod_name'];?>"></td>
              <td><input type='text' name='colour' value= "<?php echo $row['colour'];?>"></td>
              <td><input type='text' name='stock' value= "<?php echo $row['stock'];?>"></td>
							<td><input type='text' name='description' value= "<?php echo $row['Description'];?>"></td>
							<td><input type='file' name='image' value= "<?php echo $row['image'];?>"></td>
              <td><input type='text' name='size' value= "<?php echo $row['size'];?>"></td>
              <td><input type='text' name='price' value= "<?php echo $row['price'];?>"></td>
              
							<td>
                
							</td>
						</tr>

					</tbody>
</form>
          <?php
      }
    ?>

    <form action='crud.php' method='post'>
    <tr>
    <td><input type='submit' name='add' value= 'add'></td>
    </form>
    </table>
				</table>
<?php mysqli_close($con); ?>
			</div>
		</div>
    </div>




<!--NAVBAR-->
<script>
  function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
  </script>
<!--NAVBAR-->

</body>
</html>

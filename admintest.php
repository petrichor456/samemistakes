<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Same Mistakes - Admin Panel</title>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();

	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;
			});
		} else{
			checkbox.each(function(){
				this.checked = false;
			});
		}
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>




<html>

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
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
  <br>
    <br>
      <br>
        <br>
          <br>  <br>
<form action="admintest.php" method="post" enctype="multipart/form-data">
  <label>Username</label>
  <input type="text" name="username">
  <br>
  <label>UploadImage</label>
  <input type="file" name='myfile'>
  <br/>
  <input type="submit" value="upload">
</form>
</html>

/*
<?php

$user=$_POST['username'];
$image=$_FILES['myfile'];
echo "Hello $user <br/>";
echo "File Name<b>::</b> ".$image['name'];
$_POST['test'] = $image['name'];
$test = $image['name'];
echo "File Name<b>::</b> ".$test;
echo "File Name<b>::</b> ".$_POST['test'];

move_uploaded_file($image['tmp_name'],"img/".$image['name']);
*/

$con = mysqli_connect('45.84.204.205', 'u356620682_samemistakes', '8RNR47G/s[I', 'u356620682_samemistakes') or die("Connection did not occur");


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







<body>
    <div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Stock Management</h2>
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">

					<thead>
						<tr>

							<th>ID</th>
							<th>Product Name</th>
                            <th>Colour</th>
                            <th>Stock</th>
							<th>Description</th>
							<th>Image</th>
							<th>Size</th>
                            <th>Price</th>
						</tr>
					</thead>




          <?php

          $result = mysqli_query($con,"SELECT * FROM products");
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
              ?>
					<tbody>
              <form action='crud.php' method='post'>;
						<tr>
							<td><input type='text' name='hidden' value= "<?php echo $row['ID'];?>"></td>
							<td><input type='text' name='prod_name' value= "<?php echo $row['prod_name'];?>"></td>
							<td><input type='text' name='description' value= "<?php echo $row['Description'];?>"></td>
							<td><input type='text' name='image' value= "<?php echo $row['image'];?>"></td>
              <td><input type='text' name='stock' value= "<?php echo $row['stock'];?>"></td>
							<td>
                <input type='submit' name='submit' value= 'update'>
								<input type='submit' name='delete' value= 'delete'>
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

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/crud.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-responsive {
        margin: 30px 0;
    }
	.table-wrapper {
		min-width: 1000px;
        background: #fff;
        padding: 20px 25px;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}
	.modal form label {
		font-weight: normal;
	}
</style>
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

<?php
session_start();
if(isset($_SESSION["admin"])){

} elseif(isset($_SESSION["adult"])){

header("Location:test.php");

} elseif(isset($_SESSION["child"])){
header("Location:child.php");

}else
header("Location:index_new.php");
?>


<html>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="test.php">Home</a></li>
              <li><a class="active" href="crud.php">Home</a></li>
                <li><a href="crud_child.php">Child Movies</a></li>
                <li><a href="crud_users.php">User Database</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </div>
    </div>
</nav>
  <br>
    <br>
      <br>
        <br>
          <br>  <br>
<form action="crud.php" method="post" enctype="multipart/form-data">
  <label>Username</label>
  <input type="text" name="username">
  <br>
  <label>UploadImage</label>
  <input type="file" name='myfile'>
  <br/>
  <input type="submit" value="upload">
</form>
</html>



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


$con = mysqli_connect('localhost', 'HNCWEBMR19', 'rAhXexAcqr', 'HNCWEBMR19')
or die("Connection did not occur");



if($test != "")

{
  $CreateQuery = "INSERT INTO films1 (title, image, stock) VALUES ('', '$test', '')";
  mysqli_query($con, $CreateQuery);

};


if(isset($_POST['submit']))

{
    $UpdateQuery = "UPDATE films1 SET title='$_POST[title]' WHERE ID='$_POST[hidden]'";
    mysqli_query($con, $UpdateQuery);

    $UpdateQuery1 = "UPDATE films1 SET image='$_POST[image]' WHERE ID='$_POST[hidden]'";
    mysqli_query($con, $UpdateQuery1);

      $UpdateQuery2 = "UPDATE films1 SET Description='$_POST[description]' WHERE ID='$_POST[hidden]'";
        mysqli_query($con, $UpdateQuery2);

          $UpdateQuery3 = "UPDATE films1 SET stock='$_POST[stock]' WHERE ID='$_POST[hidden]'";
            mysqli_query($con, $UpdateQuery3);
};

    if(isset($_POST['delete']))

{
    $DeleteQuery = "DELETE FROM films1 WHERE ID='$_POST[hidden]'";
    mysqli_query($con, $DeleteQuery);
};

    if(isset($_POST['add']))

{
    $CreateQuery = "INSERT INTO films1 (title, image, stock) VALUES ('', '', '')";
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
							<h2>Manage <b>Movies</b></h2>
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">

					<thead>
						<tr>

							<th>ID</th>
							<th>Title</th>
							<th>Description</th>
							<th>Image</th>
							<th>Stock</th>
						</tr>
					</thead>




          <?php

          $result = mysqli_query($con,"SELECT * FROM films1");
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
              ?>
					<tbody>
              <form action='crud.php' method='post'>;
						<tr>
							<td><input type='text' name='hidden' value= "<?php echo $row['ID'];?>"></td>
							<td><input type='text' name='title' value= "<?php echo $row['title'];?>"></td>
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
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Add Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" required>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
 
<?php 
$user = 'u356620682_samemistakes';  
$password = '8RNR47G/s[I';  
$host = 'localhost';  
$dbase = 'u356620682_samemistakes';  
$table = 'newsletter';  


$first_name= $_POST['firstname']; 
$last_name= $_POST['lastname']; 
$email= $_POST['email']; 
  
  
// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)   
or die("Unable to select database"); 
 
 
$query= "INSERT INTO $table". "VALUES ('$first_name', '$last_name', '$email')"; 
 
mysqli_query ($dbc, $query) 
or die ("Error querying database"); 
 
echo 'Thanks for signing up, talk soon!' . '<br>'; 
 
mysqli_close($dbc); 
 
?> 
<?php
$username = $_POST['user'];
$password = $_POST['pass'];
$connection =mysqli_connect("localhost","root","","login");

$username = stripcslashes($username);
$password = stripcslashes($password);
$usernsme = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);


$result = mysqli_query($connection,"select * from users where username ='$username' and password ='$password'")
or die("Failed to query database".mysql_error());
$row = mysqli_fetch_array($result);
if ($row['username']==$username && $row['password']==$password){
	echo"Login success!!! Welcome ".$row['username'];
}else{
	echo "Failed to Login!";

}



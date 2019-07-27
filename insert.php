<?php
include "conn.php";

// $name="abcd";
// $id=1;
// $ispresent=true;
// $arr=[1,1.8,"this is a string",true];
// echo"<h1>String:".$name."</h1>";
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$password=password_hash($password, PASSWORD_BCRYPT);

$query="INSERT INTO `users`(`name`,`email`,`password`)VALUES('$name','$email','$password')";
$result=mysqli_query($con,$query);

if($result)
{
echo "successfully inserted";
}
else
{
echo "Failed to insert";
}
?>


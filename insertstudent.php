<?php
include "conn.php";

// $name="abcd";
// $id=1;
// $ispresent=true;
// $arr=[1,1.8,"this is a string",true];
// echo"<h1>String:".$name."</h1>";
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$branch=$_POST['branch'];

// $password=password_hash($password, PASSWORD_BCRYPT);

$query="INSERT INTO `student`(`name`,`email`,`address`,`branch`)VALUES('$name','$email','$address','$branch')";
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
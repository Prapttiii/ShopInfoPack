<?php
// database connection code
if(isset($_POST['name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,"mini_project");
// get the post records

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

// insert in database 
$rs = mysqli_query($con, "INSERT INTO tbl_contact  (`id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$name', '$email', '$phone', '$message')");
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
mysqli_close($con);
?>
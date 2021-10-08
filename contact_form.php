<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "ourvaidik1";
$con = mysqli_connect($server_name,$username,$password,$database_name);
if($con){
	echo "Contact Records Inserted";
}
$name = $_POST['client_name'];
$phone = $_POST['client_mobile_number'];
$email = $_POST['client_email'];
$query = $_POST['client_query'];
$sql = "INSERT INTO 'tbl_query' ('name','phone','e-mail','query') VALUES ('$name','$phone','$email','$query')";
$rs = mysqli_query($con, $sql);
if($rs){
	echo "data store";
}
else{
	echo "data not store";
}
?>

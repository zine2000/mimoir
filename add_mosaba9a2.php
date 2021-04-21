<?php
$conn=new mysqli("localhost","root","","universite");



$l1=$_POST['l1'];
$l2=$_POST['l2'];
$l3=$_POST['l3'];
$l4=$_POST['l4'];
$l5=$_POST['l5'];
$l6=$_POST['l6'];
$l7=$_POST['l7'];
$l8=$_POST['l8'];




$sql="INSERT INTO post  VALUES('null','$l1','$l2','$l3','$l4','$l5','$l6','$l7','$l8')";
if ($conn->connect_error) {    die("Connection failed: " . $conn->connect_error); }
else{
if($l1&&$l2&&$l3&&$l4&&$l5&&$l6&&$l7&&$l8)
{
	$holla=mysqli_query($conn,$sql);
	header('refresh:1;url=home3_page.php');
}
	else{
		
		echo"يوجد عنصر لم يتم ادخاله ";
	}
}?>
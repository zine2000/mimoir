<?php
function login(){
	//هذي المتغيرات العامة باه نعرفو بيها الدالة لوقين
global $bdd,$email,$password;
	if(isset($_POST['submit'])){
	$bdd=mysqli_connect("localhost","root","","universite")or die(mysqli_connect_error());
	$email=$_POST['email2'];
	$password=md5($_POST['password2']);
	
	$true="t";
	$sql="SELECT * FROM utilisateurs WHERE  email='$email' AND PASSWORD='$password' AND userstatus='$true'";
	$sql1=mysqli_query($bdd,$sql);
	$row=mysqli_fetch_assoc($sql1);
	if($row['userstatus']==$true){
		if($row['email']==$email){
			
			if($row['PASSWORD']==$password){
				
				$_SESSION['login']=$row['id'];
				
				
			}
			
			
			
			
		}
		
		
	}else
		header('url=login_utilisateur.php?error');
}
	return $row;
}
function is_log_in()
{
	if(isset($_SESSION['login']))
		return true;
	
	
}



function log_out()
{
	session_destroy();
$_SESSION['login']=false;
	header('url=login_utilisateur.php');
	
}

?>


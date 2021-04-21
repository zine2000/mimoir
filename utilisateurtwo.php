<?php
if(isset($_POST['submit'])){
	
	$bdd=mysqli_connect("localhost","root","","universite")or die(mysqli_connect_error());
	$email=$_POST['email2'];
	$password=$_POST['password2'];
	
	$true="t";
	$sql="SELECT * FROM utilisateurs WHERE  email='$email' AND PASSWORD='$password' AND userstatus='$true'";
	$sql1=mysqli_query($bdd,$sql);
	$row=mysqli_fetch_assoc($sql1);
	
	if($row['userstatus']==$true){
		
		if($row['email']==$email){
			
			if($row['PASSWORD']==$password){
				session_start();
				$_SESSION['id_uti']=$row['id'];
				$_SESSION['email_uti']=$row['email'];
					$_SESSION['password_uti']=$row['PASSWORD'];
				
				header("location:utilisateurthree.php");
				
				
			}
			
			
			
			
		}
		
		
	}
	if($row['userstatus']!=$true || !$sql)
		header("refresh:1;url=login_utilisateur.php?error");
		
		
		
		
		
	}else
	header("refresh:1;url=login_utilisateur.php");

	
	

?>
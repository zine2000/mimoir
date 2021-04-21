<?php
session_start();
$id=$_SESSION['id_uti'];
$email=$_SESSION['email_uti'];
$pasword=$_SESSION['password_uti'];
if($id||$email||$pasword)
{
	if(isset($_POST['ko'])){
	// إجراء الإتصال
	$bdd=mysqli_connect("localhost","root","","universite")or die(mysqli_connect_error());
		/*`id`, `nom`, `prenom`, `cin`, `date_naiss`, `ieu_naiss`, `addres`, `code_postal`, `num_tel_port`, `num_tel_fix`, `fils`, `et`, `nationalite`, `marie`, `num_enfant`, `statut_person`, `besoins_speciaux`, `Menti_natur_ handi`, `situat_directi_servi_nation`, `Num_ refer_docum`, `Date_demis_docum`*/
		
		$nom_ar=$_POST['nom'];
		$prenom_ar=$_POST['prenom'];
		$nom_fr=$_POST['nomFr'];
		$prenom_fr=$_POST['prenomFr'];
		$cin=$_POST['cin'];
		$gener=$_POST['genre'];//الجنس
		$date_naiss=$_POST['dateNaissance'];
		$ieu_naiss=$_POST['lieuNaissance'];
		$addres=$_POST['adresse'];
		$code_postal=$_POST['codePostale'];
		$num_tel_port=$_POST['mobile'];
		$num_tel_fix=$_POST['fixe'];
		$fils=$_POST['fil'];
		$et=$_POST['et'];
		$nationalite=$_POST['nass'];
		$marie=$_POST['marri'];
		$num_enfant=$_POST['num_fils'];
		$statut_person=$_POST['martyr'];// ذوي حقوق الشهيد
		$besoins_speciaux=$_POST['besoins'];//ذوي الاحتياجات الخاصة
		$handicap=$_POST['handicap'];//نوع الاعاقة 
		$ser_nati=$_POST['ser_nati4'];//الخدمة الوطنية 
		$Num_refer_docum=$_POST['num'];
		$Date_demis_docum=$_POST['date_n'];
		$photo=$_POST['photo'];
		
		
		
	
	
		$sql="INSERT INTO iinformation_personnal      VALUES('null','$nom_ar','$prenom_ar','$cin','$date_naiss','$ieu_naiss','$addres','$code_postal','$num_tel_port','$num_tel_fix','$fils','$et','$nationalite','$marie','$num_enfant','$statut_person','$besoins_speciaux','$handicap','$ser_nati','$Num_refer_docum','$Date_demis_docum','$gener','$photo','$nom_fr','$prenom_fr')";
					$holla=mysqli_query($bdd,$sql);
		if(isset($holla))
			echo('succeful');
		
		
	}else
		echo'
		<!doctype html>
<html  lang="ar"  dir="rtl">
<head>
<meta charset="utf-8">
<title>المعلومات الشخصية</title>
	<meta http-equiv="x-ua-compatible" content="IE=edge">
		<meta name="viewport" content="widht=device-widht,initial-scale=1">
<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
</head>

<body>
	
	
	<!-- الواجهة الاول لي فيها الصورة والشعار -->
	
	<!-- As a link -->
<div class=" container-fluid  ">
<nav class="navbar navbar-light bg-light m1">
  <a class="navbar-brand" href="#">
    <img src="logo.png" width="60" height="60" class="d-inline-block align-top" alt="" loading="lazy">موقع التوظيف العمومي
  </a>
</nav>
</div>
	<!-- لوقو الموقع واسمه -->
		
		
	
	<!-- الواجهة الاول لي فيها الصورة والشعار -->
	<!-----------------الواجهة الثانية لي فيها حساب المستخدم------------------->
	<div class="container p-0">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      
        <span class="nav-title">
  فضاء الترشيح على بوابة التشغيل العمومي
</span>
<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="navbar-collapse collapse" id="navbarNavDropdown" >
  
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="https://depot.emploi-public.ma/telechargerPhoto.asp?token=NTcyOTM0NEJFMEEyRjhDQUIxMjNDRjRGRDgwMzNENUIxNjNDMkJBNThFQUUxQTUwMjhBRUJCNTk5Mjk2NzVGOTRBQjlBOUYzMjhDNjg5NEVEMDRGNUQ5Njk0NzMxQzRDQURGNzc4NUEwNDE5NjU3RUM4NTcwRDJEOEI2ODNBODg=" alt="..." class="rounded-circle nav-user-img unveil-loaded" style="width:20%  !important">
        زين بوغزاله
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="candidatMPasse.asp">تغيير كلمة المرور</a>
        <a class="dropdown-item" href="logout_utili.php">الخروج من الفضاء</a>
      </div>
    </li>
  </ul>
  
</div>
      
      </nav>
    </div>
	<!-------------------------------معلومات حول الشهادة او المؤهل المتحصل عليه-------------------->
	<div class="container" >
		
	<form action="" >

	<table border="10" style="width:100%  !important" >
		<tr>
		<th colspan="2" ><center>معلومات حول الشهادة او المؤهل المتحصل عليه</center> </th>
		</tr>
		<tr>
		<td>
			
			<input class="form-control form-control-lg" type="text" placeholder="تسمية الشهادة">		
			
			</td>
					

		</tr>
		
		<tr>
		<td><input class="form-control form-control-lg" type="text" placeholder="الشعبة"></td>
					

		</tr>
		
		
		<tr>
		<td><input class="form-control form-control-lg" type="text" placeholder="التخصص"></td>
					

		</tr>
		
		<tr>
		<td><input class="form-control form-control-lg" type="text" placeholder="تاريخ الحصول على الشهادة"></td>
					

		</tr>
		
		
		<tr>
		<td><input class="form-control form-control-lg" type="text" placeholder="رقم"></td>
					

		</tr>
		
		
		<tr>
		<td><input class="form-control form-control-lg" type="text" placeholder="مدة التكوين للحصول على الشهادة من:" ></td>
				

		</tr>
		
		
		<tr>
		<td><input class="form-control form-control-lg" type="text" placeholder="مدة التكوين للحصول على الشهادة الى:" ></td>
					

		</tr>
		<tr>
		<td><input class="form-control form-control-lg" type="text" placeholder="المؤسسة المسلمة للشهادة" ></td>
					

		</tr>
		<tr>
		<td>
			<center><button type="submit" class="btn btn-primary mb-2">ارسال</button></center>
			
			</td>
		
		
		</tr>
		
		
		
		
		</table>
	
	
	
	
	
	
	</form>
	</div>
	
		<!-------------------------------معلومات حول الشهادة او المؤهل المتحصل عليه-------------------->
	
	
	
	
	
	
	
	
	
	
	
	<!--خاص بالربط بالبوتستراب-->	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js" integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k" crossorigin="anonymous"></script>
	
	
	
<script>
	
	$(function () {
  $("[data-toggle="popover"]").popover()
})
	
	</script>
	<!--خاص بالربط بالبوتستراب-->
</body>
</html>
		';
	
}
else
	header("refresh:1;url=login_utilisateur.php");




?>
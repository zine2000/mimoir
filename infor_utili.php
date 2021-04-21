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
		$zin=5;
		
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
<div class="navbar-collapse collapse" id="navbarNavDropdown" style="">
  
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="https://depot.emploi-public.ma/telechargerPhoto.asp?token=NTcyOTM0NEJFMEEyRjhDQUIxMjNDRjRGRDgwMzNENUIxNjNDMkJBNThFQUUxQTUwMjhBRUJCNTk5Mjk2NzVGOTRBQjlBOUYzMjhDNjg5NEVEMDRGNUQ5Njk0NzMxQzRDQURGNzc4NUEwNDE5NjU3RUM4NTcwRDJEOEI2ODNBODg=" alt="..." class="rounded-circle nav-user-img unveil-loaded">
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
	<!-----------------الواجهة الثانية لي فيها حساب المستخدم------------------->
	
	<div class="col">
        
            <nav aria-label="breadcrumb" class="mt-3">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="utilisateurthree.php">الاستقبال</a></li>
                <li class="breadcrumb-item active" aria-current="page">معلوماتي الشخصية</li>
              </ol>
            </nav>
          
            <div class="card-deck no-gutters">
              <div class="card card-b-blue">

                <div class="card-header p-1">
                  <h1 class="m-1">معلوماتي الشخصية</h1>
                </div>
                <div class="card-body">

                  <form action="infor_utili.php" id="frmInfo" name="frmInfo" method="post">
                    <div class="row">
                      <div class="col-md-4 text-center">
                        
                        <img id="photoImg" src="https://depot.emploi-public.ma/telechargerPhoto.asp?token=NTcyOTM0NEJFMEEyRjhDQUIxMjNDRjRGRDgwMzNENUIxNjNDMkJBNThFQUUxQTUwMjhBRUJCNTk5Mjk2NzVGOTRBQjlBOUYzMjhDNjg5NEVEMDRGNUQ5Njk0NzMxQzRDQURGNzc4NUEwNDE5NjU3RUM4NTcwRDJEOEI2ODNBODg=" alt="..." class="rounded-circle profile-user-img m-1 mx-auto d-block unveil-loaded">
                        <input type="hidden" id="photo" name="photo" >
                        <a data-toggle="modal" data-height="1000" class="btn btn-secondary btn-sm m-1" href="photoUpload.asp" role="button">
                          <i class="fas fa-folder-open"></i>
                          إلحاق الصورة
                        </a>
                      </div>
                      <div class="col-md-8">
                        <div class="row mb-3">
                          <div class="col-md-6">
                            <label for="prenom">الاسم الشخصي <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm " name="prenom" value="zin" required>
                            <div class="invalid-feedback">
                              
                            </div>
                          </div>
                          <div class="col-md-6 text-right">
                            <label for="prenomFr"><span class="text-danger">*</span> Prénom</label>
                            <input type="text" class="form-control form-control-sm text-right " name="prenomFr" required>
                            <div class="invalid-feedback">
                              
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-md-6">
                            <label for="nom">الاسم العائلي <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm " name="nom" required>
                            <div class="invalid-feedback">
                              
                            </div>
                          </div>
                          <div class="col-md-6 text-right">
                            <label for="nomFr"><span class="text-danger">*</span> Nom</label>
                            <input type="text" class="form-control form-control-sm text-right " name="nomFr" required>
                            <div class="invalid-feedback">
                              
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                    
                      <div class="col-md-4 mb-3">
                        <label for="cin">رقم البطاقة الوطنية للتعريف الإلكترونية (CNIE) <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm " name="cin" id="cin" required>
                        <div class="invalid-feedback">
                          
                        </div>
                      </div>
                      
                    

                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <label class="d-block">الجنس <span class="text-danger">*</span></label>
                        <div class="form-control check ">
                        <div class="custom-control custom-radio d-inline-block mr-3">
                          <input type="radio" id="genre1" name="genre" value="m" class="custom-control-input" checked="" required>
                          <label class="custom-control-label" for="genre1">ذكر</label>
                        </div>
                        <div class="custom-control custom-radio d-inline-block">
                          <input type="radio" id="genre2" name="genre" value="f" class="custom-control-input" required>
                          <label class="custom-control-label" for="genre2">أنثى</label>
                        </div>
                        </div>
                        <div class="invalid-feedback">
                          
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="dateNaissance">تاريخ الازدياد <span class="text-danger">*</span></label>
                        <input type="date" class="form-control form-control-sm " name="dateNaissance" required>
                        <div class="invalid-feedback">
                          
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="lieuNaissance">مكان الازدياد <span class="text-danger">*</span></label>
                        <input class="form-control form-control-sm " name="lieuNaissance"  autocomplete="off"   required>
                        <div class="invalid-feedback">
                          
                        </div>
                      </div>
                    </div>

                    <div class="mb-3">
                      <label for="adresse">العنوان <span class="text-danger">*</span></label>
                      <input type="text" class="form-control form-control-sm " name="adresse" required>
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <label for="codePostale">الرمز البريدي</label>
                        <input type="text" class="form-control form-control-sm " name="codePostale" >
                        <div class="invalid-feedback">
                          
                        </div>
                      </div>
                      
                    </div>

                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <label for="mobile">رقم الهاتف المحمول <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm " name="mobile"  required>
                        <div class="invalid-feedback">
                          
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="fixe">رقم الهاتف الثابت</label>
                        <input type="text" class="form-control form-control-sm " name="fixe" >
                        <div class="invalid-feedback">
                          
                        </div>
                      </div>
                    </div>
					  <!----------------------ابن من------------------------->
					  
					  <div class="row">
    <div class="col-md-4 mb-3">
		<label for="fixe">ابن(ة)<span class="text-danger">*</span></label>
      <input type="text" class="form-control" name="fil" placeholder="ابن" required>
    </div>
    <div class="col-md-4 mb-3">
		<label for="fixe">و<span class="text-danger">*</span></label>
      <input type="text" class="form-control" name="et" placeholder="و" required>
    </div>
  </div>
					  <!--------------------------------------ابن من------------------------------------------->
					  
					  <!--------------------------------الجنسية------------------------------------------------>
					  
					  
					  <div class="row">
    <div class="col">
		<label for="fixe">الجنسية:<span class="text-danger">*</span></label>
      <input type="text" class="form-control" name="nass" placeholder="الجنسية" required>
    </div>
    
  </div>
					  <!-------------------------------الجنسية---------------------------------------------------->
					  
					  <!---------------الزواج--------------------------------------------->
					  
					  <label for="fixe">متزوج:<span class="text-danger">*</span></label>
					  <br/>
						  
					  <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="marri" class="custom-control-input" required>
  <label class="custom-control-label" for="customRadioInline1">نعم</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="marri" class="custom-control-input" required>
  <label class="custom-control-label" for="customRadioInline2">لا</label>
</div>
						 
						  
					   <!---------------الزواج--------------------------------------------->
<!-------عدد الاولاد------------------------>
					  
					  <div class="row">
    <div class="col">
		<label for="fixe">عدد الأولاد:</label>
      <input type="text" class="form-control" name="num_fils" placeholder="عدد الاولاد">
    </div>
    
  </div>
					  
					  
					  <!---------------------عدد الاولاد------------------------------>
					  
					  
					  <!---------------------صفة ذوي حقوق الشهيد------------------------------>
					  
					   <label for="fixe">هل لديك صفة ذوي حقوق الشهيد:<span class="text-danger">*</span></label>
					  <br/>
						  
					  <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="1" name="martyr" class="custom-control-input" required>
  <label class="custom-control-label" for="1">نعم</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="2" name="martyr" class="custom-control-input" required>
  <label class="custom-control-label" for="2">لا</label>
</div>
					  
					  <!---------------------صفة ذوي حقوق الشهيد------------------------------>
					  
					  
					  
					  
					  
					  <!---------------هل أنت من ذوي اإلحتياجات الخاصة--------------------------------------------->
					  					  <br/>
					  <br/>

					  <label for="fixe">هل أنت من ذوي اإلحتياجات الخاصة:<span class="text-danger">*</span></label>
					  <br/>
						  
					  <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline3" name="besoins" class="custom-control-input" required>
  <label class="custom-control-label" for="customRadioInline3">نعم</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline4" name="besoins" class="custom-control-input" required>
  <label class="custom-control-label" for="customRadioInline4">لا</label>
</div>
						 
						  
					   <!---------------هل أنت من ذوي اإلحتياجات الخاصة--------------------------------------------->
<!------- طبيعة اإلعاقة------------------------>
					  
					  <div class="row">
    <div class="col">
		<label for="fixe">أذكر طبيعة الاعاقة:<span class="text-danger">*</span></label>
      <input type="text" class="form-control" name="handicap" required>
    </div>
    
  </div>
					  
				
					  <!---------------------طبيعة اإلعاقة ------------------------------>
					  
					  <!------------------الوضعية اتجاه الخدمة الوطنية------------------------>
					  
					  <br/>
					  <br/>

					  <label for="fixe">الوضعية اتجاه الخدمة الوطنية:<span class="text-danger">*</span></label>
					  <br/>
						  
	 <input type="radio" name="ser_nati4"  required />مؤدي
  

  <input type="radio"  name="ser_nati4" required />معفى
 
  <input type="radio"  name="ser_nati4" required />مؤجل
  
  <input type="radio" name="ser_nati4" required />مسجل


  
					  
					  
					  
					  
					  
					  
					  
					  					  <!------------------الوضعية اتجاه الخدمة الوطنية------------------------>
					  <!--------------------مرجع الوثيقة--------------->

	 <br/>
					  <br/>

					  <label for="fixe">مرجع الوثيقة:<span class="text-danger">*</span></label>
					  <div class="row">
					<div class="col-md-4 mb-3">
                        <label for="codePostale">الرقم:<span class="text-danger" >*</span></label>
                        <input type="text" class="form-control form-control-sm " name="num" required>
                        <div class="invalid-feedback">
                          
                        </div>
                      </div>  
	                    
					  <div class="col-md-4 mb-3">
                        <label for="dateNaissance">تاريخ الاصدار <span class="text-danger">*</span></label>
                        <input type="date" class="form-control form-control-sm " name="date_n" required>
                        <div class="invalid-feedback">
                          
                        </div>
                      </div>
						  </div>
				  
					  					  <!--------------------مرجع الوثيقة--------------->


                    <div class="row">
                      <div class="col-md-12 mb-2">
                        <span class="text-danger">*</span> : خانات إجبارية
                      </div>
                    </div>

                    <hr class="mb-4">

                    <input name="Token" value="2yq5xr19wvndwbkuhtkm5wuq42gwdhemozdelso0" type="hidden">
                    <input type="hidden" name="idc" value="">
                    <input type="hidden" name="ide" value="">
                    <input type="hidden" name="idex" value="">

                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <button class="btn btn-primary btn-sm btn-block" type="submit" name="submit" value="ok">تسجيل</button>
						  <input type="hidden" name="ko"/>
                      </div>
                      <div class="col-md-4 offset-md-4 mb-3">
                        <a class="btn btn-secondary btn-sm btn-block" href="candidatAccueil.asp" role="button">الرجوع إلى صفحة الاستقبال</a>
                      </div>
                    </div>

                    </form>


                </div>

              </div>
            </div>
          
          </div>
	
	
	
	
	
	
	
	
	
	
	
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
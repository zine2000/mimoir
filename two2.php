<?php

if(isset($_POST['do'])){
	
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];    
$cin=$_POST['cin'];	
$genre=$_POST['genre'];
$email=$_POST['email'];
$password0=$_POST['password'];
$password_confirm=$_POST['password_confirm'];
	$accepte=$_POST['accepte'];
	//هذا باه يسخرجلنا رموز تاكيد حساب عشوائية نستخدموها في تأكيد حساب المستخدم
	$user_code=md5(uniqid(rand()));
	$password=$password0;
	
	if($prenom&&$nom&&$cin&&$genre&&$email&&$password&&$password_confirm&&$accepte)
	{
		if($password_confirm==$password0)
		{
			//التعليمات هذي نديرو فيها باه نثبتو ان البريد الالكتروني اذا موجود ولا لا 
		$bdd=mysqli_connect("localhost","root","","universite")or die(mysqli_connect_error());
		$qery=mysqli_query($bdd,"select * from utilisateurs where email='$email' ");
					
			$row=mysqli_num_rows($qery);
			
			//هاذي نتاع اكبر من 0 معناها بلي البريد الالكتروني لي دخلته موجود في قواعد البيانات 
			if($row>0)
			{
				echo ('<!doctype html>

<html lang="ar"  dir="rtl">
<head>
<meta charset="utf-8">
<title>التسجيل</title>
	<meta http-equiv="x-ua-compatible" content="IE=edge">
		<meta name="viewport" content="widht=device-widht,initial-scale=1">
<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
	
	
	<!---كودات خاصة ب سي اس اس لهذه الصفحة -->
	<style>
		
		
	.navbar{
			background-image: url( "login.jpg");
		background-repeat: no-repeat;
		background-size: 100%
			
			
		}
		
		.zi{
		
			
		}
	
	
	
	</style>
	
	
	
		<!---كودات خاصة ب سي اس اس لهذه الصفحة -->

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
	<div class="container-fluid zi">
	<div class="card card-b-blue bg-light ">
              <div class="card-body">
                <h1>التسجيل</h1>
                <hr class="mb-3">

                
                 <font color="red" size="5px" face="arial">البريد الالكتروني الذي أدخلته مسجل به من قبل </font>
                <form action="two2.php"  name="frmSearch" method="post">
                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <label for="prenom"> الاسم الشخصي <span class="text-danger">*</span></label>
                      <input type="text" class="form-control form-control-sm " name="prenom"  value="">
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="nom"> الاسم العائلي <span class="text-danger">*</span></label>
                      <input type="text" class="form-control form-control-sm " name="nom" id="nom" value="">
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="cin"> رقم البطاقة الوطنية للتعريف <span class="text-danger">*</span></label>
                      <input type="text" class="form-control form-control-sm " name="cin" id="cin" value="">
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <label class="d-block"> الجنس <span class="text-danger">*</span> </label>
                      <div class="form-control check ">
                      <div class="custom-control custom-radio d-inline-block mr-3">
                        <input type="radio" id="genre1" name="genre" value="m" class="custom-control-input">
                        <label class="custom-control-label" for="genre1">ذكر</label>
                      </div>
                      <div class="custom-control custom-radio d-inline-block">
                        <input type="radio" id="genre2" name="genre" value="f" class="custom-control-input">
                        <label class="custom-control-label" for="genre2">أنثى</label>
                      </div>
                      </div>
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
                    <div class="col-md-8 mb-3">
                      <label for="email"> البريد الإلكتروني <span class="text-danger">*</span> </label>
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-at"></i></span>
                        </div>
                        <input type="text" class="form-control " name="email" id="email" value="">
                        <div class="invalid-feedback" style="width: 100%;">
                          
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <label for="password"> كلمة السر <span class="text-danger">*</span> </label>
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control " name="password" id="password" autocomplete="off" data-original-title="" title="">
                        <div class="invalid-feedback" style="width: 100%;">
                          
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 mb-3">
                      <label for="password-confirm"> تأكيد كلمة السر <span class="text-danger">*</span> </label>
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control " name="password_confirm" id="password-confirm">
                        <div class="invalid-feedback" style="width: 100%;">
                          
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 align-self-end pb-3">
                      
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 mb-2">
                      <p> حماية المعطيات الشخصية في الجزائر على ضوء القانون رقم 18-07 المتعلق بحماية الأشخاص الذاتيين تجاه معالجة المعطيات ذات الطابع الشخصي، فإن المعلومات التي تقدمونها عند الإشتراك في هذه الخدمة لن تستخدم لأغراض أخرى.لديكم كامل الصلاحية في تصحيح أو حذف المعطيات التي تخصكم، وفي هذه الحالة يرجى البعث برسالة إلكترونية عبر الرابط <a href="https://www.emploi-public.ma/ar/poserUneQuestion.asp">للإتصال بنا</a>.</p>
                      <div class="form-control check bg-transparent ">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" name="accepte" id="accepte" value="y">
                          <label class="custom-control-label text-primary" for="accepte">
                            <strong>لقد اطلعت وأوافق على شروط الاستخدام العامة، بما في ذلك الإشارة المتعلقة بحماية البيانات الشخصية <span class="text-danger">*</span></strong>
                          </label>
                        </div>
                      </div>
                      
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 mb-2">
                      <span class="text-danger">*</span> : خانات إجبارية 
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 offset-md-4 mb-3">
                      <input name="Token" value="he7le8hocc4uds2bya14ldb8jhxctxv46fuv396p" type="hidden">
                      <input type="hidden" name="idconcours" value="">
                      <input type="hidden" name="idemploi" value="">

                      <button class="btn btn-primary btn-sm btn-block" type="submit" name="submit" value="ok">تسجيل</button>
						  <input type="hidden" name="do"/>
                    </div>
                  </div>

                </form>

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
</html>');
				
			}else{
				
				$sql="INSERT INTO utilisateurs  VALUES('null','$prenom','$nom','$cin','$genre','$email','$password','f','$user_code')";
					$holla=mysqli_query($bdd,$sql);
				$qerys=mysqli_query($bdd,"select * from utilisateurs where email='$email' ");
			$pow=mysqli_fetch_assoc($qerys);
				/*$qerys=mysqli_query($bdd,"select * from utilisateurs where email='$email' ");
			$pow=mysqli_fetch_assoc($qerys);
				
				$ko=$pow['id'];
				header('refresh:1;url=two3.php?id='.$ko.'');*/
				if($holla){
					$last_id=mysqli_insert_id($bdd);
					$subject='تفعيل حساب';
					$message='
<!doctype html >
<html lang="ar"  dir="rtl">
<head>
<meta charset="utf-8">
<title>تأكيد الحساب</title>
	<meta http-equiv="x-ua-compatible" content="IE=edge">
		<meta name="viewport" content="widht=device-widht,initial-scale=1">
<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
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
	<style>
		body{
			background-color: black;
			
		}
		#mo{
		position: absolute;
			top:40%;
			left: 50%;
			right: 30%;
			color: black;
			
			
		}
		table{
						padding: 10px;
			background-color: white;
			width: 500px;
			height: 300px;
			
		}
		
	
	
	</style>
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


<div class="container-fluid" id="mo">
	
	<table >
	<tr>
	<td>
	مرحبا:
	<h8 style="color:red">مرحبا '.$pow['email'].'</h8>
	</td>
	</tr>
	<tr><td>
	لتفعيل الحساب الخاص بك اضغط على زر التفعيل
	
	</td></tr>
	<tr>
	<td>
	<center><a class="btn btn-primary" href="http://localhost/%D9%85%D8%B4%D8%B1%D9%88%D8%B9%20%D8%A7%D9%84%D8%AA%D8%AE%D8%B1%D8%AC/two3.php?id='.$pow['id'].'& code='.$pow['tokencode'].'" role="button">التفعيل</a></center>
	
	</td>
	
	</tr>
	
	
	
	
	</div>


	
	
	
</body>
	
	
</html>';
					function send_mail($email,$message,$subject)
	{						
		require_once('phpmailer\mailer\class.phpmailer.php');
		$mail = new PHPMailer();	 	
		$mail->IsSMTP(); 
		$mail->CharSet =  "utf-8";
		$mail->SMTPDebug  = 1;                     
		$mail->SMTPAuth   = true;                  
		$mail->SMTPSecure = "tls";                 
		$mail->Host       = "smtp.gmail.com";      
		$mail->Port       = 587;            
		$mail->AddAddress($email);
		$mail->Username="zinalabdin9@gmail.com";  
		$mail->Password="MOUHAMEDmouhamed2000";            
		$mail->SetFrom("zinalabdin9@gmail.com",'‪zin alabdin‬');
		$mail->AddReplyTo("zinalabdin9@gmail.com","موقع التوظيف العمومي");
		$mail->Subject    = $subject;
		$mail->MsgHTML($message);
		$mail->Send();
	}	
	 send_mail($email,$message,$subject);
	 
	 
	 $msg = '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">اهلا بك</h4>
  <p>تم تسجيل الحساب انتقل الى بريدك الاكتروني واضغط على رابط تفعيل الحساب</p>
  <hr>
  <a class="btn btn-primary" href="https://mail.google.com" role="button">التفعيل</a>
    
  </button>
</div>     ';echo $msg;
					
					
				}
				
				

			};
			
		}
		else
			echo ('<!doctype html>

<html lang="ar"  dir="rtl">
<head>
<meta charset="utf-8">
<title>التسجيل</title>
	<meta http-equiv="x-ua-compatible" content="IE=edge">
		<meta name="viewport" content="widht=device-widht,initial-scale=1">
<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
	
	
	<!---كودات خاصة ب سي اس اس لهذه الصفحة -->
	<style>
		
		
	.navbar{
			background-image: url( "login.jpg");
		background-repeat: no-repeat;
		background-size: 100%
			
			
		}
		
		.zi{
		
			
		}
	
	
	
	</style>
	
	
	
		<!---كودات خاصة ب سي اس اس لهذه الصفحة -->

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
	<div class="container-fluid zi">
	<div class="card card-b-blue bg-light ">
              <div class="card-body">
                <h1>التسجيل</h1>
                <hr class="mb-3">

                
                 <font color="red" size="5px" face="arial">كلمتا السر غير متطابقتان</font>
                <form action="two2.php"  name="frmSearch" method="post">
                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <label for="prenom"> الاسم الشخصي <span class="text-danger">*</span></label>
                      <input type="text" class="form-control form-control-sm " name="prenom"  value="">
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="nom"> الاسم العائلي <span class="text-danger">*</span></label>
                      <input type="text" class="form-control form-control-sm " name="nom" id="nom" value="">
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="cin"> رقم البطاقة الوطنية للتعريف <span class="text-danger">*</span></label>
                      <input type="text" class="form-control form-control-sm " name="cin" id="cin" value="">
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <label class="d-block"> الجنس <span class="text-danger">*</span> </label>
                      <div class="form-control check ">
                      <div class="custom-control custom-radio d-inline-block mr-3">
                        <input type="radio" id="genre1" name="genre" value="m" class="custom-control-input">
                        <label class="custom-control-label" for="genre1">ذكر</label>
                      </div>
                      <div class="custom-control custom-radio d-inline-block">
                        <input type="radio" id="genre2" name="genre" value="f" class="custom-control-input">
                        <label class="custom-control-label" for="genre2">أنثى</label>
                      </div>
                      </div>
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
                    <div class="col-md-8 mb-3">
                      <label for="email"> البريد الإلكتروني <span class="text-danger">*</span> </label>
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-at"></i></span>
                        </div>
                        <input type="text" class="form-control " name="email" id="email" value="">
                        <div class="invalid-feedback" style="width: 100%;">
                          
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <label for="password"> كلمة السر <span class="text-danger">*</span> </label>
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control " name="password" id="password" autocomplete="off" data-original-title="" title="">
                        <div class="invalid-feedback" style="width: 100%;">
                          
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 mb-3">
                      <label for="password-confirm"> تأكيد كلمة السر <span class="text-danger">*</span> </label>
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control " name="password_confirm" id="password-confirm">
                        <div class="invalid-feedback" style="width: 100%;">
                          
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 align-self-end pb-3">
                      
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 mb-2">
                      <p> حماية المعطيات الشخصية في الجزائر على ضوء القانون رقم 18-07 المتعلق بحماية الأشخاص الذاتيين تجاه معالجة المعطيات ذات الطابع الشخصي، فإن المعلومات التي تقدمونها عند الإشتراك في هذه الخدمة لن تستخدم لأغراض أخرى.لديكم كامل الصلاحية في تصحيح أو حذف المعطيات التي تخصكم، وفي هذه الحالة يرجى البعث برسالة إلكترونية عبر الرابط <a href="https://www.emploi-public.ma/ar/poserUneQuestion.asp">للإتصال بنا</a>.</p>
                      <div class="form-control check bg-transparent ">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" name="accepte" id="accepte" value="y">
                          <label class="custom-control-label text-primary" for="accepte">
                            <strong>لقد اطلعت وأوافق على شروط الاستخدام العامة، بما في ذلك الإشارة المتعلقة بحماية البيانات الشخصية <span class="text-danger">*</span></strong>
                          </label>
                        </div>
                      </div>
                      
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 mb-2">
                      <span class="text-danger">*</span> : خانات إجبارية 
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 offset-md-4 mb-3">
                      <input name="Token" value="he7le8hocc4uds2bya14ldb8jhxctxv46fuv396p" type="hidden">
                      <input type="hidden" name="idconcours" value="">
                      <input type="hidden" name="idemploi" value="">

                      <button class="btn btn-primary btn-sm btn-block" type="submit" name="submit" value="ok">تسجيل</button>
						  <input type="hidden" name="do"/>
                    </div>
                  </div>

                </form>

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
</html>');
		
		
	}
	else
		echo ('<!doctype html>

<html lang="ar"  dir="rtl">
<head>
<meta charset="utf-8">
<title>التسجيل</title>
	<meta http-equiv="x-ua-compatible" content="IE=edge">
		<meta name="viewport" content="widht=device-widht,initial-scale=1">
<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
	
	
	<!---كودات خاصة ب سي اس اس لهذه الصفحة -->
	<style>
		
		
	.navbar{
			background-image: url( "login.jpg");
		background-repeat: no-repeat;
		background-size: 100%
			
			
		}
		
		.zi{
		
			
		}
	
	
	
	</style>
	
	
	
		<!---كودات خاصة ب سي اس اس لهذه الصفحة -->

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
	<div class="container-fluid zi">
	<div class="card card-b-blue bg-light ">
              <div class="card-body">
                <h1>التسجيل</h1>
                <hr class="mb-3">

                
                 <font color="red" size="5px" face="arial">يوجد عنصر لم تقم بادخاله</font>
                <form action="two2.php"  name="frmSearch" method="post">
                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <label for="prenom"> الاسم الشخصي <span class="text-danger">*</span></label>
                      <input type="text" class="form-control form-control-sm " name="prenom"  value="">
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="nom"> الاسم العائلي <span class="text-danger">*</span></label>
                      <input type="text" class="form-control form-control-sm " name="nom" id="nom" value="">
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="cin"> رقم البطاقة الوطنية للتعريف <span class="text-danger">*</span></label>
                      <input type="text" class="form-control form-control-sm " name="cin" id="cin" value="">
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <label class="d-block"> الجنس <span class="text-danger">*</span> </label>
                      <div class="form-control check ">
                      <div class="custom-control custom-radio d-inline-block mr-3">
                        <input type="radio" id="genre1" name="genre" value="m" class="custom-control-input">
                        <label class="custom-control-label" for="genre1">ذكر</label>
                      </div>
                      <div class="custom-control custom-radio d-inline-block">
                        <input type="radio" id="genre2" name="genre" value="f" class="custom-control-input">
                        <label class="custom-control-label" for="genre2">أنثى</label>
                      </div>
                      </div>
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
                    <div class="col-md-8 mb-3">
                      <label for="email"> البريد الإلكتروني <span class="text-danger">*</span> </label>
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-at"></i></span>
                        </div>
                        <input type="text" class="form-control " name="email" id="email" value="">
                        <div class="invalid-feedback" style="width: 100%;">
                          
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <label for="password"> كلمة السر <span class="text-danger">*</span> </label>
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control " name="password" id="password" autocomplete="off" data-original-title="" title="">
                        <div class="invalid-feedback" style="width: 100%;">
                          
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 mb-3">
                      <label for="password-confirm"> تأكيد كلمة السر <span class="text-danger">*</span> </label>
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control " name="password_confirm" id="password-confirm">
                        <div class="invalid-feedback" style="width: 100%;">
                          
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 align-self-end pb-3">
                      
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 mb-2">
                      <p>حماية المعطيات الشخصية في الجزائر على ضوء القانون رقم 18-07 المتعلق بحماية الأشخاص الذاتيين تجاه معالجة المعطيات ذات الطابع الشخصي فإن المعلومات التي تقدمونها عند الإشتراك في هذه الخدمة لن تستخدم لأغراض أخرى.لديكم كامل الصلاحية في تصحيح أو حذف المعطيات التي تخصكم، وفي هذه الحالة يرجى البعث برسالة إلكترونية عبر الرابط <a href="https://www.emploi-public.ma/ar/poserUneQuestion.asp">للإتصال بنا</a>.</p>
                      <div class="form-control check bg-transparent ">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" name="accepte" id="accepte" value="y">
                          <label class="custom-control-label text-primary" for="accepte">
                            <strong>لقد اطلعت وأوافق على شروط الاستخدام العامة، بما في ذلك الإشارة المتعلقة بحماية البيانات الشخصية <span class="text-danger">*</span></strong>
                          </label>
                        </div>
                      </div>
                      
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 mb-2">
                      <span class="text-danger">*</span> : خانات إجبارية 
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 offset-md-4 mb-3">
                      <input name="Token" value="he7le8hocc4uds2bya14ldb8jhxctxv46fuv396p" type="hidden">
                      <input type="hidden" name="idconcours" value="">
                      <input type="hidden" name="idemploi" value="">

                      <button class="btn btn-primary btn-sm btn-block" type="submit" name="submit" value="ok">تسجيل</button>
						  <input type="hidden" name="do"/>
                    </div>
                  </div>

                </form>

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
</html>');
	
	
	
	
	
}
	else{
		echo '







<!doctype html>

<html lang="ar"  dir="rtl">
<head>
<meta charset="utf-8">
<title>التسجيل</title>
	<meta http-equiv="x-ua-compatible" content="IE=edge">
		<meta name="viewport" content="widht=device-widht,initial-scale=1">
<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
	
	
	<!---كودات خاصة ب سي اس اس لهذه الصفحة -->
	<style>
		
		
	.navbar{
			background-image: url( "login.jpg");
		background-repeat: no-repeat;
		background-size: 100%
			
			
		}
		
		.zi{
		
			
		}
	
	
	
	</style>
	
	
	
		<!---كودات خاصة ب سي اس اس لهذه الصفحة -->

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
	<div class="container-fluid zi">
	<div class="card card-b-blue bg-light ">
              <div class="card-body">
                <h1>التسجيل</h1>
                <hr class="mb-3">

                
                
                <form action="two2.php"  name="frmSearch" method="post">
                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <label for="prenom"> الاسم الشخصي <span class="text-danger">*</span></label>
                      <input type="text" class="form-control form-control-sm " name="prenom"  value="">
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="nom"> الاسم العائلي <span class="text-danger">*</span></label>
                      <input type="text" class="form-control form-control-sm " name="nom" id="nom" value="">
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="cin"> رقم البطاقة الوطنية للتعريف <span class="text-danger">*</span></label>
                      <input type="text" class="form-control form-control-sm " name="cin" id="cin" value="">
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <label class="d-block"> الجنس <span class="text-danger">*</span> </label>
                      <div class="form-control check ">
                      <div class="custom-control custom-radio d-inline-block mr-3">
                        <input type="radio" id="genre1" name="genre" value="m" class="custom-control-input">
                        <label class="custom-control-label" for="genre1">ذكر</label>
                      </div>
                      <div class="custom-control custom-radio d-inline-block">
                        <input type="radio" id="genre2" name="genre" value="f" class="custom-control-input">
                        <label class="custom-control-label" for="genre2">أنثى</label>
                      </div>
                      </div>
                      <div class="invalid-feedback">
                        
                      </div>
                    </div>
                    <div class="col-md-8 mb-3">
                      <label for="email"> البريد الإلكتروني <span class="text-danger">*</span> </label>
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-at"></i></span>
                        </div>
                        <input type="text" class="form-control " name="email" id="email" value="">
                        <div class="invalid-feedback" style="width: 100%;">
                          
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <label for="password"> كلمة السر <span class="text-danger">*</span> </label>
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control " name="password" id="password" autocomplete="off" data-original-title="" title="">
                        <div class="invalid-feedback" style="width: 100%;">
                          
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 mb-3">
                      <label for="password-confirm"> تأكيد كلمة السر <span class="text-danger">*</span> </label>
                      <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control " name="password_confirm" id="password-confirm">
                        <div class="invalid-feedback" style="width: 100%;">
                          
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 align-self-end pb-3">
                      
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 mb-2">
                      <p>حماية المعطيات الشخصية في الجزائر على ضوء القانون رقم 18-07 المتعلق بحماية الأشخاص الذاتيين تجاه معالجة المعطيات ذات الطابع الشخصي، فإن المعلومات التي تقدمونها عند الإشتراك في هذه الخدمة لن تستخدم لأغراض أخرى.لديكم كامل الصلاحية في تصحيح أو حذف المعطيات التي تخصكم، وفي هذه الحالة يرجى البعث برسالة إلكترونية عبر الرابط <a href="https://www.emploi-public.ma/ar/poserUneQuestion.asp">للإتصال بنا</a>.</p>
                      <div class="form-control check bg-transparent ">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" name="accepte" id="accepte" value="y">
                          <label class="custom-control-label text-primary" for="accepte">
                            <strong>لقد اطلعت وأوافق على شروط الاستخدام العامة، بما في ذلك الإشارة المتعلقة بحماية البيانات الشخصية <span class="text-danger">*</span></strong>
                          </label>
                        </div>
                      </div>
                      
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 mb-2">
                      <span class="text-danger">*</span> : خانات إجبارية 
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 offset-md-4 mb-3">
                      <input name="Token" value="he7le8hocc4uds2bya14ldb8jhxctxv46fuv396p" type="hidden">
                      <input type="hidden" name="idconcours" value="">
                      <input type="hidden" name="idemploi" value="">

                      <button class="btn btn-primary btn-sm btn-block" type="submit" name="submit" value="ok">تسجيل</button>
						  <input type="hidden" name="do"/>
                    </div>
                  </div>

                </form>

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
</html>';}
?>
<?php
if(isset($_POST['ko'])){
	// إجراء الإتصال
	$bdd=mysqli_connect("localhost","root","","universite")or die(mysqli_connect_error());
	
	//بداية الجلسة
	session_start();
	$email=$_POST['email2'];
	$password=$_POST['password2'];
	//دالة جلب المعلومات 
	$qery=mysqli_query($bdd,"select * from login_form where email='$email' AND password='$password'");
	//دالة التحقق هل المعلومات والمقارنات جت مع بعض ام لا 
	$row=mysqli_num_rows($qery);
	if($row){
	if($qery){
		//الدالة هذي تجيب القيم من قواعد البيانات وتحطها في مصفوفة 
		$ligne=mysqli_fetch_assoc($qery);
		//هذي باه نخزن الايميل لي في قواعد البيانات في متغير الجلسة باه نستحقه في صفحات اخرى 
		$_SESSION['email']=$ligne['email'];
		$_SESSION['password']=$ligne['password'];
		//هذي دالة تنقل المستخدم الى المسار الذي نريد الذهاب اليه
		header("location:home3_page.php");
	}	
		
		
	}else{
		//تتعاودلي نفس الصفحة لكن فيها بلي كاين خطأ ومنه هو تقدر تعاود ترجع 
		echo '
		
		<!doctype html>
<html lang="ar"  dir="rtl">
<head>
<meta charset="utf-8">
<title>الفضاء الخاص بالادارة</title>
	<meta http-equiv="x-ua-compatible" content="IE=edge">
		<meta name="viewport" content="widht=device-widht,initial-scale=1">
<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
	<!--خاص بالربط بالبوتستراب-->	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js" integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k" crossorigin="anonymous"></script>
	
	
	
<script>
	
	$(function () {
  $("["data-toggle="popover"]").popover()
})
	
	</script>
	<!--خاص بالربط بالبوتستراب-->
	
	
	<!--كودات سي اس اس الخاصة بهذه الصفحة-->
	<style>
		
	
		.photo_logo{
			background-image: url( "job1.jpg");
			height: 200px;
			background-size: 100%;
			background-position:0px; 
		}
		.m1{
			background-color:rgba(0,51,255,0.001) !important;
		}
		.m2{
			background-color:#770DAD !important;
		}
		.m3{
			background-color:darkgray;
			position:relative;
			right: 450px;
			left: 100px;
		}
		
		
	
	
	
	</style>
	
		<!--كودات سي اس اس الخاصة بهذه الصفحة-->
</head>

<body>
	<!-- الواجهة الاول لي فيها الصورة والشعار -->
	<div class="photo_logo">
	
	<!-- لوقو الموقع واسمه -->
<nav class="navbar navbar-light bg-light m1">
  <a class="navbar-brand" href="#">
    <img src="logo.png" width="60" height="60" class="d-inline-block align-top" alt="" loading="lazy">
  </a>
</nav>
	<!-- لوقو الموقع واسمه -->
		
		
	</div>
	<!-- الواجهة الاول لي فيها الصورة والشعار -->
	<!--فضاء الترشيح-->
		<nav class="navbar navbar-light bg-light m2">
  <span class="navbar-brand mb-0 h1" style="font-size: 30px ;color: white">فضاء الادارة المنظمة للمسابقة</span>
</nav>
<!--فضاء الترشيح-->
	
	
	<!--النافذة الخاصة بتسجيل الدخول-->
	<div class="m4">
	<div class="container-fluid ">
		<div class="row ">
	         
          <div class="col-lg-4 col-md-6">
          
            <div class="card card-b-blue my-3 mx-n1">

              <form action="login_admin.php" id="frmLogin" name="frmLogin" method="post">
              <div class="card-body py-2 m3">
                
                <h2>الولوج إلى فضاء الادارة </h2>
                <hr class="mt-0 mb-2">

                
                
                <div class="row">
                  <div class="col-md-12 mb-2">

                    <label for="email2"> البريد الإلكتروني </label>
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                      </div>
                      <input type="text" class="form-control " name="email2" id="email2" value="">
                      <div class="invalid-feedback" style="width: 100%;">
                        
                      </div>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mb-2">

                    <label for="password2"> كلمة السر </label>
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                      </div>
                      <input type="password" class="form-control " name="password2" id="password2">
                      <div class="invalid-feedback" style="width: 100%;">
                        
                      </div>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mb-2">

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" name="rememberMe" id="rememberMe" value="y">
                      <label class="custom-control-label" for="rememberMe"> حفظ بياناتي ؟ </label>
					  <font color="red" size="2px" face="arial">اسم المستخدم او كلمة السر غير صحيحة</font>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 offset-md-4 mb-2">

                    <input name="Token" value="da3ga4dk99zq9ox8u7wzh084fdt9ptrz2bqrx52l" type="hidden">

                    <button class="btn btn-primary btn-sm btn-block" type="submit" name="submit" value="ok">الدخول</button>
					<input type="hidden" name="ko"/>

                  </div>
                  
                </div>
                
                <div class="row">
                  <div class="col-md-12 mb-2">
                    <p>نسيت كلمة السر ؟ <a href="candidatFgtPass_frm.asp">اضغط هنا لاستعادتها</a></p>
                  </div>
                </div>

              </div>
              </form>

            </div>
              
            
          
          
          </div>

</div>
      </div>
	
        </div>  

      
	
	<!--النافذة الخاصة بتسجيل الدخول-->
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>';
		
	}
	
	
	
	
	
	
	
}
	else{
		echo '






<!doctype html>
<html lang="ar"  dir="rtl">
<head>
<meta charset="utf-8">
<title>الفضاء الخاص بالادارة</title>
	<meta http-equiv="x-ua-compatible" content="IE=edge">
		<meta name="viewport" content="widht=device-widht,initial-scale=1">
<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
	<!--خاص بالربط بالبوتستراب-->	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js" integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k" crossorigin="anonymous"></script>
	
	
	
<script>
	
	$(function () {
  $("["data-toggle="popover"]").popover()
})
	
	</script>
	<!--خاص بالربط بالبوتستراب-->
	
	
	<!--كودات سي اس اس الخاصة بهذه الصفحة-->
	<style>
		
	
		.photo_logo{
			background-image: url( "job1.jpg");
			height: 200px;
			background-size: 100%;
			background-position:0px; 
		}
		.m1{
			background-color:rgba(0,51,255,0.001) !important;
		}
		.m2{
			background-color:#770DAD !important;
		}
		.m3{
			background-color:darkgray;
			position:relative;
			right: 450px;
			left: 100px;
		}
		
		
	
	
	
	</style>
	
		<!--كودات سي اس اس الخاصة بهذه الصفحة-->
</head>

<body>
	<!-- الواجهة الاول لي فيها الصورة والشعار -->
	<div class="photo_logo">
	
	<!-- لوقو الموقع واسمه -->
<nav class="navbar navbar-light bg-light m1">
  <a class="navbar-brand" href="#">
    <img src="logo.png" width="60" height="60" class="d-inline-block align-top" alt="" loading="lazy">
  </a>
</nav>
	<!-- لوقو الموقع واسمه -->
		
		
	</div>
	<!-- الواجهة الاول لي فيها الصورة والشعار -->
	<!--فضاء الترشيح-->
		<nav class="navbar navbar-light bg-light m2">
  <span class="navbar-brand mb-0 h1" style="font-size: 30px ;color: white">فضاء الادارة المنظمة للمسابقة</span>
</nav>
<!--فضاء الترشيح-->
	
	
	<!--النافذة الخاصة بتسجيل الدخول-->
	<div class="m4">
	<div class="container-fluid ">
		<div class="row ">
	         
          <div class="col-lg-4 col-md-6">
          
            <div class="card card-b-blue my-3 mx-n1">

              <form action="login_admin.php" id="frmLogin" name="frmLogin" method="post">
              <div class="card-body py-2 m3">
                
                <h2>الولوج إلى فضاء الادارة </h2>
                <hr class="mt-0 mb-2">

                
                
                <div class="row">
                  <div class="col-md-12 mb-2">

                    <label for="email2"> البريد الإلكتروني </label>
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                      </div>
                      <input type="text" class="form-control " name="email2" id="email2" value="">
                      <div class="invalid-feedback" style="width: 100%;">
                        
                      </div>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mb-2">

                    <label for="password2"> كلمة السر </label>
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                      </div>
                      <input type="password" class="form-control " name="password2" id="password2">
                      <div class="invalid-feedback" style="width: 100%;">
                        
                      </div>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mb-2">

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" name="rememberMe" id="rememberMe" value="y">
                      <label class="custom-control-label" for="rememberMe"> حفظ بياناتي ؟ </label>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 offset-md-4 mb-2">

                    <input name="Token" value="da3ga4dk99zq9ox8u7wzh084fdt9ptrz2bqrx52l" type="hidden">

                    <button class="btn btn-primary btn-sm btn-block" type="submit" name="submit" value="ok">الدخول</button>
					<input type="hidden" name="ko"/>

                  </div>
                  
                </div>
                
                <div class="row">
                  <div class="col-md-12 mb-2">
                    <p>نسيت كلمة السر ؟ <a href="candidatFgtPass_frm.asp">اضغط هنا لاستعادتها</a></p>
                  </div>
                </div>

              </div>
              </form>

            </div>
              
            
          
          
          </div>

</div>
      </div>
	
        </div>  

      
	
	<!--النافذة الخاصة بتسجيل الدخول-->
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>';}
?>
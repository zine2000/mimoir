<?php
session_start();
$id=$_SESSION['id_uti'];
$email=$_SESSION['email_uti'];
$pasword=$_SESSION['password_uti'];


if($id&$email&$pasword){
	$bdd=mysqli_connect("localhost","root","","universite")or die(mysqli_connect_error());
	$sql="SELECT * FROM utilisateurs WHERE  email='$email' AND PASSWORD='$pasword' ";
	$sql1=mysqli_query($bdd,$sql);
	$row=mysqli_fetch_assoc($sql1);
echo '
				<!doctype html>
<html lang="ar"  dir="rtl">
<head>
<meta charset="utf-8">
<title>فضاء الترشيح عل بوابة التشغيل العمومي</title>
	<meta http-equiv="x-ua-compatible" content="IE=edge">
		<meta name="viewport" content="widht=device-widht,initial-scale=1">
<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
<style>
img{

widht:50px;
height:50px;

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
	

	
	
	
	
	
	
	
	<!-------------------------------------->
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
       <img src="login.jpg" alt="..." class="rounded-circle nav-user-img unveil-loaded img">
        
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
	
	
	
	
	
	
	
	
	
	
	<main role="main" class="container">
      <div class="row">
       
					
          <aside class="col-md-3 blog-sidebar mt-3">
            
            <div class="card card-b-blue">

  <div class="card-body text-center">
   <img  src="login.jpg" alt="..." class="rounded-circle profile-user-img unveil-loaded "  >

    <h5 class="card-title">'.$row['prenom'].'</h5>
    <h6 class="card-subtitle mb-2 text-muted">'.$row['email'].'</h6>

  </div>
  <div class="list-group list-group-flush">
    <a href="" class="list-group-item list-group-item-action">تغيير كلمة السر</a>
    <a href="logout_utili.php" class="list-group-item list-group-item-action">الخروج من الفضاء</a>
  </div>

</div>
            
          </aside>

          <div class="col-md-9 blog-main mt-3">

            

            <div class="card card-b-blue mb-3">

              <div class="card-header p-1">
                <h1 class="m-1">فضاء المترشح</h1>
              </div>
              <div class="card-body">

                

                <div class="row">
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-white bg-secondary">
                      <div class="list-group list-group-flush text-center">
                        <a href="infor_utili.php" class="list-group-item list-group-item-action px-1 py-3">
                          <img src="https://depot.emploi-public.ma/imgs/id-card.png" alt="معلوماتي الشخصية" class="unveil-loaded"><br>
                        </a>
                      </div>
                      <div class="list-group list-group-flush text-center">
                        <a href="infor_utili.php" class="list-group-item list-group-item-action p-2">
                          معلوماتي الشخصية
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-white bg-secondary">
                      <div class="list-group list-group-flush text-center">
                        <a href="" class="list-group-item list-group-item-action px-1 py-3">
                          <img src="https://depot.emploi-public.ma/imgs/agreement.png" alt="دبلوماتي" class="unveil-loaded"><br>
                        </a>
                      </div>
                      <div class="list-group list-group-flush text-center">
                        <a href="utilisateurfoor.php" class="list-group-item list-group-item-action p-2">
                          مؤهلاتي العلمية
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-white bg-secondary">
                      <div class="list-group list-group-flush text-center">
                        <a href="" class="list-group-item list-group-item-action px-1 py-3">
                          <img src="https://depot.emploi-public.ma/imgs/curriculum.png" alt="سيرتي الذاتية" class="unveil-loaded"><br>
                        </a>
                      </div>
                      <div class="list-group list-group-flush text-center">
                        <a href="" class="list-group-item list-group-item-action p-2">
                          سيرتي الذاتية
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-white bg-secondary">
                      <div class="list-group list-group-flush text-center">
                        <a href="" class="list-group-item list-group-item-action px-1 py-3">
                          <img src="https://depot.emploi-public.ma/imgs/subscription.png" alt="ترشيحاتي" class="unveil-loaded"><br>
                        </a>
                      </div>
                      <div class="list-group list-group-flush text-center">
                        <a href="" class="list-group-item list-group-item-action p-2">
                          ترشيحاتي
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-white bg-secondary">
                      <div class="list-group list-group-flush text-center">
                        <a href="" class="list-group-item list-group-item-action px-1 py-3">
                          <img src="https://depot.emploi-public.ma/imgs/bell-ring.png" alt="تنبيهاتي" class="unveil-loaded"><br>
                        </a>
                      </div>
                      <div class="list-group list-group-flush text-center">
                        <a href="" class="list-group-item list-group-item-action p-2">
                          تنبيهاتي
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-white bg-secondary">
                      <div class="list-group list-group-flush text-center">
                        <a href="" class="list-group-item list-group-item-action px-1 py-3">
                          <img src="https://depot.emploi-public.ma/imgs/list.png" alt="مبارياتي" class="unveil-loaded"><br>
                        </a>
                      </div>
                      <div class="list-group list-group-flush text-center">
                        <a href="" class="list-group-item list-group-item-action p-2">
                          مبارياتي
                        </a>
                      </div>
                    </div>
                  </div>
                </div>





              </div>

            </div>
					
          </div>
					
          
          
          

      </div>

    </main>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!--خاص بالربط بالبوتستراب-->	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js" integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k" crossorigin="anonymous"></script>
	
	
	

	<!--خاص بالربط بالبوتستراب-->
</body>
</html>

				
				
				';}
else
	header("location:login_utilisateur.php");


?>
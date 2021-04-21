<?php
session_start();
$bdd=mysqli_connect("localhost","root","","universite")or die(mysqli_connect_error());
	$result=mysqli_query($bdd,"select * from post");
if(isset($_SESSION['password']))
{
	
echo 
	'
	<!doctype html>
<html lang="ar"  dir="rtl">
<head>
<meta charset="utf-8">
<title>موقع التوظيف العمومي</title>
	
	<meta http-equiv="x-ua-compatible" content="IE=edge">
		<meta name="viewport" content="widht=device-widht,initial-scale=1">
<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
	
</head>
	<style>
		.bg-light{
			background-color:rgba(0,51,255,0.001) !important;
		}
		.color{
			color: black!important;
		}
		.navbar li:hover{
			
			
		text-shadow: 1px 1px 0.01px red;
		transition: 0.1s;
		
			
		
		}
		.photo_job{
			background-image:url( "job.jpg");
			height: 800px;
			background-size: 100%
		}
		.m5{
			
			width: 50%;
			
			
		}
		.m6{
			
			background-color: aqua;
			
			
		}
		.m7{
			
			background-color: brown;
		}
		strong{
			color: red;
		}
		
	
	
	</style>
	<script>
		$(document).ready(function(){
		$("#ma").click(function(){
			
			
			
			
		})	
			
			
			
		})
		
		
		
	</script>

<body class="photo_job">
	
	
	<!--navbar-->
	
<div >	
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a style="color:black; font-size:30px;border-left-style:solid;border-left-color: black;padding-left: 8px; border-top-left-radius: 1px; border-bottom-left-radius: 1px" class="navbar-brand" ><img src="logo.png" width="60" style="padding-left:5px;" height="60" alt=""> موقع التوظيف العمومي</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link color" href="home3_page.php">الرئيسية <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link color" href=""> طلبات الترشيح في المسابقات </a>
      </li>
		<li class="nav-item">
        <a class="nav-link color" href="add_mosaba9a.php">اضافة مسابقة</a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle color" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          مجال المسابقة
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
   
  </div>
</nav>
</div>
	<!--navbat-->
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<!---------------------خاص باعلانات المسابقات-------------------------->
	';
	if(isset($result)){
		echo '
	
	
	<div class="container-fluid m5">
	<div class="card mt-3 mb-3 ">
            <div class="card-body p-0 m6">
              
              
              <div class="derniersAvis accordion">
                <table class="table table-sm table-striped ">
                  <thead class="thead-dark">
                    <tr class="m7">
                      <th scope="col" class="" width="50"></th>
                      <th scope="col" class="text-center" width="100">تاريخ النشر</th>
                      <th scope="col" class="text-center">آخر الإعلانات</th>
                    </tr>
                  </thead>';
	while($row=mysqli_fetch_assoc($result)){
			
			
			echo '
				
				<tr class="odd" id="ma" ><td class="text-center"><img style="widht:40px;height: 40px" src="login.jpg" ></td><td class="dateAvis"> '. 
				$row["date_publi"].'</td><td><a href="home2_page.php?id='. $row['id'].'">مباراة لتوظيف '.$row['Degree'].' (<strong>'.  $row['Num_posit'].'</strong> (منصب)</a></td></tr>
					';};
		echo '
		
		</table>
		
              </div>			
					
					
                   
                 
                

            </div>
			<button><a href="add_mosaba9a.php">اضافة مسابقة</a></button>
          </div>
		 
	</div>
	
		
		';
	
	
	};
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	echo '
	
	
	<!----------------------خاص باعلانات المسابقات------------------------>
	

<!--خاص بالربط بالبوتستراب-->	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js" integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k" crossorigin="anonymous"></script>
<script>
	
	$(function () {
  $("[data-toggle="popover"]").popover();
});
	
	</script>
	<!--خاص بالربط بالبوتستراب-->
	
	
	
	
	
	

	
	
	

</body>
</html>
	
	
	
	
	
	
	
	';
	
	
	
	
	}
											   

		else{
	
	header("location:login_admin.php");
}
	




?>
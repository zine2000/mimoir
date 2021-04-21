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
		
		.m7{
			
			background-color: black;
			color: white;
		}
		strong{
			color: red;
		}
		
	
	
	</style>
	<script>
		$(document).ready(function(){
		$('#ma').click(function(){
			
			
			
			
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
        <a class="nav-link color" href="home_page.php">الرئيسية <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link color" href="login_utilisateur.html">فضاء المترشح </a>
      </li>
		<li class="nav-item">
        <a class="nav-link color" href="login_admin.php">فضاء الادارة المنظمة للمسابقة</a>
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
	<br/><br/><br/><br/><br/><br/><br/><br/>
	<!---------------------خاص باعلانات المسابقات-------------------------->
	
	<?php
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	$bdd=mysqli_connect("localhost","root","","universite")or die(mysqli_connect_error());
	$result=mysqli_query($bdd,"select * from post where id='$id'");
	if(isset($result)){
	?><table class="table table-striped table-bordered table-sm m7">
                <tbody>
					<?php
               
					 
		while($row=mysqli_fetch_assoc($result)){
			
			
			echo '
				
				<tr>
                    <th width="25%" scope="row">
                      الإدارة المنظمة :
                    </th>
                    <td>جامعة الشهيد حمه لخضر</td>
                  </tr>
                  <tr>
                    <th scope="row">الدرجة  :</th>
                    <td>'.$row['Degree'].'</td>
                  </tr>
                  

                  <tr>
                    <th scope="row">نوع التوظيف :</th>
                    <td>
                      
                      <strong>'.$row['Emp_type'].'</strong>
                      
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">عدد المناصب :</th>
                    <td>'.$row['Num_posit'].'</td>
                  </tr>
                  <tr>
                    <th scope="row">تاريخ النشر :</th>
                    <td>'.$row['date_publi'].'</td>
                  </tr>
                  <tr>
                    <th scope="row">آخر أجل لإيداع الترشيحات :</th>
                    <td>
                      '.$row['Dead_sub_nomi'].' <span class="expire">(إنتهى)</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">تاريخ إجراء المباراة :</th>
                    <td>
                      '.$row['Date_match'].'
                    </td>
                  </tr>
                  
              
                  <tr>
                    <th scope="row">معلومات إضافية :</th>
                    <td>
                      '.$row['add_inf'].'
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">لطلب توضيحات إضافية :</th>
                    <td>
                      '.$row['Req_add_ cla'].'
              
                    </td>
                  </tr>
                  
					';
					
					
  }  ?>
		</tbody>
              </table>
	
	
	
	
	
	
	
	
	<?php } } 
	else{
		echo("no");
	}
	?>
	
	
	
	
	
	
	
	
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

<?php



session_start()
?>

<!DOCTYPE html>
<html>

<head>
  <title>jQuery Form Validation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>


<body><div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
            <div id="message"></div>

				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input type="text" name="name" id="name" class="form-control" placeholder="username/email/number">

						<span class="focus-input100" ></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter yout Password">

						<span class="focus-input100" ></span>
					</div>

					
					<div class="container-login100-form-btn">
						<button  type="button" id="submitbtn"class="login100-form-btn ">
Login
                        
						</button>
					</div>

					<div class="text-center p-t-90">
						
                         Create Account ☺<a href="Mainpage.php" class="text-white">Signup Here</a>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	















  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
  <script>


$(document).ready(function () {

    
    $('#submitbtn').click(function () {

var name = $("#name").val();
var pass = $("#password").val();
console.log(name);
console.log(pass);

       
if(name=="" || pass==""){
    alert("empty feild");
}
else{
    $.ajax({
            url:"Login.php",
            type:'POST',
            data:{
                name:name,
               
                password:pass,
               
            },
            success:function(data)
            {
 $("#message").html(data);
//  var dataResult = JSON.parse(data);
// debugger
//  if(dataResult['success']==true){
// 	 window.location.href = 'Dashboard.php';
//  }
//  else{
// 	alert("login failed");
//  }
               
            }
        });
}
        
         

        })
     



    })







  </script>
</body>

</html>
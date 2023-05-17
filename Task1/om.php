<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

<style>
.formstyle{
  /* background-image:url("jpg"); */
   /* overflow:hidden;  */
   background:#60a3bc;
}

.input-group-text {
			background: #c0392b !important;
			color: white !important;
			border: 10 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
}
.card{
  background:	#FFCC99;
}
.register_btn {
			width: 70%;
			background: #c0392b !important;
			color: white !important;
		}
    
</style>

</head>
<body>
    

<div class="formstyle">
<h3 class="text-uppercase text-center mb-4" style="color:white">Register</h3>
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-5 col-xl-6">
          <div class="card" style="border-radius: 10px;">
            <div class="card-body p-4">
      

              <form id ="myform">

                <div class="form-outline mb-4">
                <div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fa fa-sitemap"></i></span>
							</div>

                  <input type="text" id="org_name" name='organization' class="form-control form-control-sm oname"  placeholder="Organization Name*"  />
                  
                </div>
                <div>
                  <p id="orgcheck"></p>
                  </div>

                <div class="form-outline mb-4">
                <div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-lock"></i></span>
							</div>
                <input type="text" id="adminname" class="form-control form-control-sm" placeholder="Admin Name*" />
                 
              </div>
              <p id="adcheck"></p> 
                <div class="form-outline mb-4">
                <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
                <input type="email" id="email" class="form-control form-control-sm" placeholder="Email*" />
                <p id="emailcheck"></p>  
              </div>

                <div class="form-outline mb-4">
                <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-phone"></i></span>
							</div>              
                <input type="number" id="phone" class="form-control form-control-sm" placeholder="Phone*" />
                <p id="phonecheck"></p>  
              </div>

                <div class="form-outline mb-4">
                <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>                 
               <input type="password" id="password" class="form-control form-control-sm" placeholder="Password*" />
                  <p id="passcheck"></p>
                </div>

                <div class="form-outline mb-4">
                <div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-check-circle"></i></span>
							</div>                 
               <input type="password" id="conpassw" class="form-control form-control-sm" placeholder="Confirm Password*" />
                  <p id="cpasscheck"></p>
                </div>

                
                <div class="d-flex justify-content-center">
                  <button type="submit" id="register" name="register"
                    class="btn register_btn btn-block btn-md gradient-custom-4 text-body">Register</button>
                </div>

                <div>
                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="http://localhost/Ubischool/login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script>

$(document).ready(function(){
  

  $('#orgcheck').hide();
  var org_err = true;

  $('#org_name').keyup(function(){
   org_validate();

  })
  function org_validate(){
    
    var orgname= $('#org_name').val();

    if(orgname.length == ""){
    $('#orgcheck').show();
    $('#orgcheck').html('**Please enter organization name');
    $('#orgcheck').focus();
    $('#orgcheck').css("color","red");
    var org_err = false;
    return false;
   }
   else{
    $('#orgcheck').hide();
   }
   
   if(orgname.length<5 || orgname.length>30){
     $('#orgcheck').show();
     $('#orgcheck').html('**Length must be betweeen 5 and 30');
     $('#orgcheck').focus();
     $('#orgcheck').css("color","red");
     var org_err = false;
    return false;
 
    }
    else{
     $('#orgcheck').hide();
     var org_err = true;
     return true;


  }
    
    if(orgname.match(/^[a-zA-Z]*$/)){
    $('#orgcheck').hide();
    
   }
   else{
    $('#orgcheck').show();
    $('#orgcheck').html('** name must contain albhabets only');
    $('#orgcheck').focus();
    $('#orgcheck').css("color","red");
    var org_err = false;
    return false;
   }
  }

$("#register").click(function(e){

    e.preventDefault();
    var organization = $('#org_name').val();
   var register = $("#register").val();
   console.log(organization);
   
   

   org_validate();

  $.ajax({
   
    url:"registerbackend.php",
    type:"POST",
    data:{organization:organization,
          register:register
    },    
    success:function(data){
      console.log('gud');
    }
  });

})

});





// $('#register').click(function(){


// function validateform(){
//   var o_name = $('#orgname').val();

//   if(o_name.length == ""){
//     $('#orgcheck').show();
//     $('#orgcheck').html('**Please enter organization name');
//     $('#orgcheck').focus();
//     $('#orgcheck').css("color","red");
    
//    }
//    else{
//     $('#orgcheck').hide();
//     $.ajax({
//       url:"registerbackend.php", 
//       type:"POST",
//       data:$('#myform input').serialize(),
//       success: function(data){
//       alert("Success");
//       }
//     });
// }
// }
// });




// $(document).ready(function(){

// $('#orgname').keyup(function(){
//    org_check();

// });

// function org_check(){
 
// var o_name = $('#orgname').val();

//    if(o_name.length == ""){
//     $('#orgcheck').show();
//     $('#orgcheck').html('**Please enter organization name');
//     $('#orgcheck').focus();
//     $('#orgcheck').css("color","red");
    
//    }
//    else{
//     $('#orgcheck').hide();
    
//     if(o_name.length<5 || o_name.length>30){
//     $('#orgcheck').show();
//     $('#orgcheck').html('**Length must be betweeen 5 and 30');
//     $('#orgcheck').focus();
//     $('#orgcheck').css("color","red");
   
//    }
//    else{
//     $('#orgcheck').hide();
   
//    
//   }
//    }
//   }
//    $('#register').click(function(){

//     org_check();
//     var register = $("#register").val();
//     $.ajax({
//     url:"registerbackend.php",
//     type:"POST",
//     data:{o_name:o_name,register:register},
//     success:function(data){

//     }
//    });
//    })

  
 

// });

</script>




</body>
</html>
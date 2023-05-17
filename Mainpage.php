
<?php


session_start()
?>
<!DOCTYPE html>
<html>

<head>
  <title>jQuery Form Validation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='style.css' type='text/css' />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div id="message"></div>
<div class="section">
<div class="container p-3"> 
  <h1 class="text-center"> Registration</h1>
  <div class="form">
    <form id="frm" method="post">
      <div class="row">
        <div class="col-md-6 col-lg-12 m-auto d-block p-3">
          <label for="Oname">Organisation:</label>
          <input type="text" id="Oname" name="Oname" onkeypress="return blockSpecialChar(event)" placeholder="Enter your Organisation name
              " maxlength="30" minlength="5">
          <span class="error" id="Oname_err"> </span>

        </div>
        <div class="col-md-6 col-lg-12">
          <label for="name">Admin name:</label>
          <input type="text" id="name"   onkeypress="return blockSpecialChar(event)" name="name" placeholder="Enter your name
              " maxlength="30" minlength="5">
          <span class="error" id="username_err"> </span>

        </div>


        <div class="col-md-6 col-lg-12">

          <label for="email">Email </label>
          <input type="email" id="email" name="email" placeholder="Enter your email">
          <span></span>
        </div>

        <div class="col-md-6 col-lg-12"> 
    
         
  <label for="exampleFormControlInput1" class="form-label">Number</label>
  <input type="text"  name="number" id="number" class="form-group" class="form-control" id="exampleFormControlInput1" placeholder="Enter your number">
  
          <span class="error" id="mobile_err"></span>
        </div>
        


        <div class="col-md-6 col-lg-12">
          <label for="password">Password:</label>

          <input type="password" name="password" id="password" placeholder="Enter your password" >


          <span class="error" id="password_err"> </span>
        </div>

        <div class="col-md-6 col-lg-12">
          <label for="conpassword">Confirm Password:</label>
          <input type="password" name="cpass" id="cpassword" placeholder="Enter your confirm password" >

          <span class="error" id="cpassword_err"> </span>
        </div>

      
    <div class="col-md-3">
    <button type="submit" class="btn btn-primary my-3">submit</button>

    </div>
      </div>
    </form>
  </div>
</div>
</div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
  <script>



function blockSpecialChar(e) {
            var k = e.keyCode;
            return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8   || (k >= 0 && k < 9));
        }
    var frm = $("#frm");

    frm.submit(function (e) {
      e.preventDefault();
      let Oname = $('#Oname').val();
      let fullName = $("#name").val();
      let email = $("#email").val();
      let number = $("#number").val();
      var pass = $('#password').val();
      var cpass = $('#cpassword').val();
// debugger
      console.log(Oname)

      console.log(fullName)
      console.log(email);
      console.log(number);
      console.log(pass);
      console.log(cpass);
      var data1 = /^[a-zA-Z]+ [a-zA-Z]+$/;
      var data2 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

      var data3 = /^[6-9][0-9]{9}$/;
      var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;


data5 = /^[a-zA-Z]+$/;

      //    var data4 =  (?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,});

      //  checkPassword()

      if ( Oname=="" || fullName == "" || email == "" || number == "" || pass=="" || cpass=="") {
        alert("empty feild");
      }
      else {
        if(Oname.match(data5)){

        $('#Oname_err').html('');

        if (fullName.match(data1)) {


          $('#username_err').html('');
          // alert('Your name have accepted : you can try another');
          //   return true;

          if (number.match(data3)) {


            // alert('Your number have accepted : you can try another')
            $("#mobile_err").html("");
            if (pass.match(pattern2)) {
              $('#password_err').html("");

              if (pass == cpass) {
                alert("Confirmpasword is match")



              $.ajax({
                url: "insert.php",
                type: 'POST',
                data: {Oname:Oname,
                  name: fullName,
                  email: email,
                  number: number,
                  password:pass,
                  cpass:cpass,

                },
                success: function (data) {
                  $('#message').html(data);
                  // alert(status);

                  // window.location.href = "LoginPage.php";

                  $("#frm")[0].reset();

                }


              });

            }

            else{
              alert("password is not match");
            }




            
            }
            else{
              $("#password_err").html("password require");

              
            }



            

          }
          else {
            // alert("invalid number:number should be start from 6/7/9 and 10 digits only");
            $("#mobile_err").html("10 digit required : starting from 6/7/9");

            return false;
          }





        }
        else {

          $('#username_err').html('username should be a-z ,A-Z only');
          return false;
        }

        

      }
      else{
        $('#Oname_err').html('Organisaton should be a-z ,A-Z only');
          return false;

      }
      


      }













    })







  </script>
</body>

</html>



<?php
session_start();
echo "welecome".$_SESSION['user_name'];

if(!isset($_SESSION['user_name'])){
  echo "you are log out";
   header('location:Login.php');
}


?> 




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <link rel="stylesheet" href="dash.css"/>
    <title>Hello, world!</title>
    <style>
      .navbar-side{
        background-color: #ADD8E6;
        /* color: white; */
      }
      .navbar-side span{
        color:blue;
      }
      .navbar-side ul li a:hover{
        background-color:white;
      }
      .navbar-brand{
        color:orange;
      }


      body{
        overflow-x:hidden;
      }
      nav  .container-fluid ul li {
        list-style: none;
      }
      
    </style>

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-info text-white">
      <div class="container-fluid ">
        <ul>
          <li><a class="navbar-brand  text-white" href="#">UBI<span>SCHOOL</span> 
        <a class="navbar-brand  text-white" href="#"><span>Programm</span></a>

          </li>
        </ul>
    </div>
        <div class="dropdown show px-5  mx-5 ">
  <!-- <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
  <i class="fa fa-bars" aria-hidden="true" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

  <!-- </a> -->

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Change Password</a>
    <a class="dropdown-item" href="#">Profile</a>
    <a class="dropdown-item" href="Logout.php">Logout</a>
  </div>
</div>

    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-sucess text-black">
      <div class="container-fluid ">
        
      <h6>
        <span class="icon"><i class="fas fa-code"></i></span>
        <span class="link-text">Admin Panel</span>
      </h6>
      <div class="form-inline ">
      <input class=' mx-5' type="text"placeholder='Search item'name='search'>

<button   class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModal">Add </button>
      </div>
    

    </div>
    </nav>
    
    
             

    <div class="main">
    <div class="navbar-side">
      
      <ul>
        <li><a href="#" class="link-active" title="Dashboard">
            <span class="icon"><i class="fas fa-chart-bar"></i></span>
            <span class="link-text">Dashboard</span>
          </a></li>
        <li>
          <a href="#" class="myBtn" data-toggle="collapse" data-target="#my-sub" title="Post" aria-expanded="false">

          <span class="icon"><i class="fas fa-cog"></i></span>
          <span class="link-text">Settings</span>
        
          </a>
          <div id="my-sub" class="collapse bg-secondary">
            <a href="#" title="All Post">
              <span class="icon"><i class="fas fa-copy"></i></span>
              <span class="link-text">Programm</span>
            </a>
            <a href="#" title="Add Post">
              <span class="icon"><i class="fas fa-pen-fancy"></i></span>
              <span class="link-text">Shift</span>
            </a>
            <a href="#" title="Add Post">
              <span class="icon"><i class="fas fa-pen-fancy"></i></span>
              <span class="link-text">Department</span>
            </a>
            <a href="#" title="Add Post">
              <span class="icon"><i class="fas fa-pen-fancy"></i></span>
              <span class="link-text">Designation</span>
            </a>
          </div>
        </li>
        <li><a href="#" title="Category">
            <span class="icon"><i class="fas fa-list-alt"></i></span>
            <span class="link-text">Staff</span>
          </a></li>
        <li><a href="#" title="Comment">
            <span class="icon"><i class="fas fa-comment"></i></span>
            <span class="link-text">Guardian</span>
          </a></li>
        <li><a href="#" title="Tags">
            <span class="icon"><i class="fas fa-tags"></i></span>
            <span class="link-text">Holiday</span>
          </a></li>
        
        
      </ul>
    </div>



    </div>
       

    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h4 class="modal-title text-center" id="myModalLabel">Add</h4>
            </div>

            <div class="modal-body">
              <form action="" id="form1">
                <div  action="" method="post">
                    <div class="modal-body">
                        <label class="control-label"> Add Programm</label>
                        <input type="text" class="form-control" name="name1" id="name1" />
                        
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        <button id="submit" type="submit" value="Add" class="btn"  onclick="addUser()">Add</button>
                    </div>

                </div>
                </form>
            </div>
        </div>
    </div>
</div>

     <div class="container">
      <div class="row">
      <table class="table table-striped text-center">



<tbody id="search_result">

     

</tbody>
</table>
      </div>
     </div>
              
      















     <!-- !-- !-- Modal -->  
<div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="container">
      <div class="modal-body">



<form action="" enctype="multipart/form-data" id="form2">
<div class="form-group">
<label for="Updatename">Full name</label>
    <input class="form-control" type="text" name='Updatename' id="Updatename"  >
</div>

   








      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-secondary" onclick="Update()">Update</button>
<input type="hidden" id="hiddenData">
    </div>

</form>

    </div>
  </div>
</div>


<!-- Update modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  <script>
$(document).ready(function(){
    displayData()
});
    // Display  the  insert  data
     function displayData(){
        var displaydata = "true";
        $.ajax({
            url:"Display.php",
            type:"POST",
            data:{
                displaySend:displaydata,
            },
            success:function(data,status){
$('#search_result').html(data);
            }
            
        });
     }



     function addUser(){
        var name = $('#name1').val();
        

        
if(name==""){
    alert("empty feild");
}
else{
    $.ajax({
            url:"Display.php",
            type:'POST',
            data:{
                name:name,
                
            },
            success:function(data)
            {
alert(data);

                $("#form1")[0].reset();
                displayData()
                
            }
        });

}

       
    }


    function UserDetails(id){
      // alert(id);
      $('#hiddenData').val(id);
      $.post("Update.php",
    {updateID:id},
    function(data){
// console.log(data);
console.log(status);

        var user = JSON.parse(data);

        $("#Updatename").val(user.program_Name);
        // $("#Updateemail").val(user.Email);





    });
    $("#UpdateModal").modal("show");
    

  }


    

  function Update(){
    var updatename =$("#Updatename").val();
    var hiddenData = $("#hiddenData").val();

    $.post("Update.php",{
   updatename :updatename,
   hiddenData : hiddenData
 },function(data){
    $("#UpdateModal").modal("hide");
    displayData();

 }
 );
  }

  

  // $("#status").bootstrapToggle({
    

  //   on:'Active',
  //   off:'Deactive',
  //   onstyle:'primary',
  //   offstyle:'danger'
    
  // });
  // $("#status").change(function(){
  //   if($(this).prop('checked')){
  //     $('#hiddenstatus').val('Active');

  //   }
  //   else{
  //     $('#hiddenstatus').val('Deactive');

  //   }
  // })
  </script>
</html>
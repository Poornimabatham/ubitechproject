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
      
     

      body{
        overflow-x:hidden;
      }
      
      
    </style>

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-info text-white">
      <div class="container-fluid ">
        <ul>
          <li><a class="navbar-brand  text-white" href="#">UBI<span>SCHOOL</span> 
        <a class="navbar-brand  text-white" href="#"><span> Dashboard</span></a>

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
    <a class="dropdown-item" href="#">Logout</a>
  </div>
</div>
    </nav>
    
    
             

    <div class="main">
    <div class="navbar-side bg-primary">
      <h6>
        <span class="icon"><i class="fas fa-code"></i></span>
        <span class="link-text">Admin Panel</span>
      </h6>
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
            <a href="Programm.php" >
            <span><i class="fas fa-copy"></i></span>
            <span class="link-text">Programme</span>

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
                       datatype:'JSON',

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
        
// console.log(name);

        
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
// alert(status);

                // console.log(data);
                displayData();
            }
        });

}

       
    }
  </script>
</html>

<?php

session_start();
include 'connection.php';
extract($_POST);
if(isset($_POST['name'])  && isset($_POST['password'])){
  $Name = $_POST['name'];
  $Password  = $_POST['password'];
  
  if(empty($Name) || empty($Password) )
  {
          echo '<div class="alert alert-success">please fill all required field</div>';

  }
  else{
    // `mobileNo`, `email`
      $sql = "SELECT * FROM `loginmaster` WHERE  (mobileNo = '$Name'  ||  email= '$Name' || roletype='$Name')  &&
       (password = '$Password')";
      $result = mysqli_query($conn,$sql);
    
      $total = mysqli_num_rows($result);
     //  echo $total;
     //  exit;
     if($total == 1){
        $_SESSION['user_name'] = $Name;

        // header('location:Dashboard.php');
      echo '<div class="alert alert-success">Login successfully</div>';
      echo '<script type="text/javascript">';
      echo 'window.location= "Dashboard.php"';
 
      echo '</script>'; 
      
    //   $sts['msg']='success';
    //   $sts['success']=true;
    //    json_encode($sts);
     }
     else{
      echo '<div class="alert alert-success">User doest exit</div>';

     }
 
 }




}

?>












    
  
  
   


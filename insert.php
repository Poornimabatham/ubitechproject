<?php
include 'connection.php';
extract($_POST);
if( isset($_POST['Oname']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['password']) && isset($_POST['cpass']) ){

  $oname = $_POST['Oname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $pass  =$_POST['password'];
    $cpass = $_POST['cpass'];


    if (empty($oname) || empty($name) || empty($email)  || empty($number) || empty($pass) || empty($cpass)) {
      echo '<div class="alert alert-success">please fill all required field</div>';
  } 
  

  else{ 
    $sql = " SELECT * FROM `organization` WHERE `contactName`='$oname'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) >0)
    {
      echo '<div class="alert alert-primary">organisation already exist</div>';
  
      
    }
  else {
    $Cdate =  date("Y/m/d");
    $Mdate =  date("Y/m/d");

    
    $sql1 = "INSERT INTO `organization`( `contactName`, `name`, `phoneNumber`, `email`, `password`, `createdDate`, `modifiedDate`) 
    VALUES ('$oname','$name','$number', '$email','$pass','$Cdate','$Mdate')";

      if ($res = mysqli_query($conn, $sql1)) {

          $sql2 = "INSERT INTO `loginmaster`( `mobileNo`, `email`, `password`, `roletype`, `organizationId`, `status`, `createDate`, `modifiedDate`) 
          VALUES ('$number','$email','$pass','o','1','0','$Cdate','$Mdate')";
          if($ress = mysqli_query($conn,$sql2)){
            echo '<div class="alert alert-success">data successfully inserted</div>';

          }
      } else {
          echo '<div class="alert alert-warning">data not inserted</div>';
      }
  }



}

}

?>



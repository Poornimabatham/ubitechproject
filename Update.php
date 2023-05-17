<?php

include 'connection.php';


if(isset($_POST['updateID'])){
    $user_id = $_POST['updateID'];
    
  $sql = "SELECT * FROM `programs`  WHERE  `Id`  = $user_id
  ";
 
    // $sql = "SELECT * FROM `crud`  WHERE  `Id`  = $user_id";
    $result = mysqli_query($conn,$sql);
    $response = array();
    while($row = mysqli_fetch_assoc($result)){
        $response = $row;
    }
    echo json_encode($response);

}
else{
    $response['status']=200;
    $response['message']="Invalid or data not found";
}


?>














<?php


if(isset($_POST['hiddenData'])){
    $user_id = $_POST['hiddenData'];
    $updatedate=$_POST['updatedate'];

    $updatename =$_POST['updatename'];
    
    $Sql2 = "UPDATE `programs` SET `program_Name`='$updatename' ,`modified_Date`='$updatedate' WHERE `id`='$user_id'";
      $result = mysqli_query($conn,$Sql2);
      if($result){
          echo 'Data has been updated sucessfully';
      }
    }


?>
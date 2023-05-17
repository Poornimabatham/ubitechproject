
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
        .bt{
            border: none;
            color: white;
            padding: 5px 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 20px;
        }
        .green{
            background-color: #199319;
        }
        .red{
            background-color: green;
        }
        table,th{
            border-style : solid;
            border-width : 1;
            text-align :center;
        }
        td{
            text-align :center;
        }
    </style>    
</head>
  
<body>




<?php

include 'connection.php';

if(isset($_POST['displaySend'])){
    $table='
    <table class="table table-striped text-center">

<tr>
    <th> Programm Id</th>
    <th>Programme Name</th>
    <th>Create Date</th>
    <th>Modiefed Date</th>

    <th>Status</th>
    <th>Action</th>
</tr>';

  $select = "SELECT * FROM `programs`
  ";
 
 
  
 $result = mysqli_query($conn,$select);

 while($row=mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $name= $row['program_Name'];
    
    // $Cd= $row['created_Date'];
    // $Md = $row['modified_Date'];
    $Md = date('d/M/y ',strtotime($row["'modified_Date'"]));
     $date = date('d/M/y ',strtotime($row["created_Date"]));

$status = $row['status'];


    $table.='<tr>

    <td>'.$id.'</td>

      <td>'.$name.'</td>
      <td>'.$date.'</td>
      <td>'.$Md.'</td>
<td>
<div class="form-check form-switch">

  <input class="form-check-input bg-primary"   <?php if('.$status.'=="1"){echo "checked"} else{
    >
  

</div>
</td>
      

      <td>
      <button class="btn btn-primary" onclick="UserDetails('.$id.')">Update</button>
      <button class="btn btn-dark" onclick="User('.$id.')">Delete</button>

      </td>
    </tr>';
}
$table.='</table>';
echo $table;
}

?>











<?php
include 'connection.php';
if(isset($_POST['name'])){

  $Name = $_POST['name'];
  $date = date('Y-m-d H:i:s');

  $status = 1;
   $sql2 = "INSERT INTO   `programs` ( `program_Name` ,`created_Date`,`status`)  VALUES ( '$Name', '$date',
  '$status')";

  if(mysqli_query($conn,$sql2)){
   
       echo 'done';
     }
}


?>

</script>
</html>
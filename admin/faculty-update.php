<?php

    $id = $_GET['id'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $degree = $_POST['degree'];
    $university = $_POST['university'];
    
    

    $conn = mysqli_connect('localhost', 'root', '', 'cse');
    
    
    $sql = "SELECT * FROM faculty WHERE id = '$id' ";
    $result = mysqli_query($conn,$sql);
    
    $data = mysqli_fetch_assoc($result);

    $img1 = '';
    $update_sql = "UPDATE faculty SET name = '$name' , designation = '$designation',  degree = '$degree', university = '$university' ";

if(!empty($_FILES['img']['name'])) {
    $random =rand(999, 999999999999);

    $img = 'upload/'.$random. $_FILES['img']['name'];
     move_uploaded_file($_FILES['img']['tmp_name'], $img);

    $update_sql .= ",img = '$img'";
    if(!empty($data['img'])) {
        unlink($data['img']);
    }
}

  
  
  $update_sql .= "WHERE id = '$id' ";
  if(mysqli_query($conn,$update_sql)){
        session_start();
        $_SESSION['edit_f'] = true;
        header("Location:faculty.php");
  }
  
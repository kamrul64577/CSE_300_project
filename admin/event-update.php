<?php

    $id = $_GET['id'];
    $name = $_POST['name'];
   
    
    

    $conn = mysqli_connect('localhost', 'root', '', 'cse');
    
    
    $sql = "SELECT * FROM event WHERE id = '$id' ";
    $result = mysqli_query($conn,$sql);
    
    $data = mysqli_fetch_assoc($result);

    $img1 = '';
    $update_sql = "UPDATE event SET name = '$name' ";

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
  if(mysqli_query($conn,$update_sql)) {
    session_start();
    $_SESSION['edit'] = true;
    header("Location:event.php");
  }
  
<?php

    $id = $_GET['id'];
    $title = $_POST['title'];
    

    $conn = mysqli_connect('localhost', 'root', '', 'cse');
    
    
    $sql = "SELECT * FROM notice WHERE id = '$id' ";
    $result = mysqli_query($conn,$sql);
    
    $data = mysqli_fetch_assoc($result);

    $pdf1 = '';
    $update_sql = "UPDATE notice SET title = '$title'";

if(!empty($_FILES['pdf']['name'])) {
    $random =rand(999, 999999999999);

    $pdf = 'upload/'.$random. $_FILES['pdf']['name'];
     move_uploaded_file($_FILES['pdf']['tmp_name'], $pdf);

    $update_sql .= ",pdf = '$pdf'";
    if(!empty($data['pdf'])) {
        unlink($data['pdf']);
    }
}

  
  
  $update_sql .= "WHERE id = '$id' ";
  if(mysqli_query($conn,$update_sql)){
      session_start();
      $_SESSION['edit_n'] = true;
      header("Location:notice.php");
  }
  
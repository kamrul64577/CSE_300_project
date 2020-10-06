<?php

$random =rand(999, 999999999999);

$img = 'upload/'.$random. $_FILES['img']['name'];


move_uploaded_file($_FILES['img']['tmp_name'], $img);

$name = $_POST['name'];


$conn = mysqli_connect('localhost', 'root', '', 'cse');
     $sql = "INSERT INTO event VALUES(NULL,'$name' ,'$img')";
      if(mysqli_query($conn,$sql)){
           session_start();
           $_SESSION['add'] = true;
           header("Location: event.php");

      } 
      
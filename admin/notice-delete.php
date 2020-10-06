<?php

$id = $_GET['id'];

$conn = mysqli_connect('localhost', 'root', '', 'cse');


$sql = "SELECT * FROM notice WHERE id = '$id' ";
$result = mysqli_query($conn,$sql);

$data = mysqli_fetch_assoc($result);


if(file_exists($data['pdf'])) {
    unlink($data['pdf']);
}



$sql = "DELETE FROM notice WHERE id = '$id' ";
       
mysqli_query($conn,$sql);

       header("Location: notice.php");

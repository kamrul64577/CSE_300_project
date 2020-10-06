<?php

$id = $_GET['id'];

$conn = mysqli_connect('localhost', 'root', '', 'cse');


$sql = "SELECT * FROM event WHERE id = '$id' ";
$result = mysqli_query($conn,$sql);

$data = mysqli_fetch_assoc($result);


if(file_exists($data['img'])) {
    unlink($data['img']);
}



$sql = "DELETE FROM event WHERE id = '$id' ";
       
mysqli_query($conn,$sql);

       header("Location: event.php");

?>

<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $conn = mysqli_connect('localhost', 'root', '', 'cse');

    $sql = "INSERT INTO contact VALUES(NULL, '$name', '$email', '$msg')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location:../cnt.php");
    }

?>

<?php 

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$con_pass = $_POST['confirm_password'];

if($pass != $con_pass) {
    
    $_SESSION['error_msg'] = "Password & Confirm Password doesn't match" ;
    header("Location: register.php");
}


else {
    $conn = mysqli_connect('localhost', 'root', '', 'cse');
$sql1 = "SELECT * FROM login WHERE email = '$email' ";
$result = mysqli_query($conn,$sql1);
$rowcount = mysqli_num_rows($result);

if($rowcount == 1) {
    $_SESSION['error_msg1'] = "Account already exist" ;
    header("Location: register.php");
}
else {
    $sql = "INSERT INTO login VALUES(NULL, '$name', '$email', '$pass')"; 

   if(mysqli_query($conn,$sql)) {
    $_SESSION['reg_msg'] = "Registration Successful Please Login" ;
    header("Location: login.php");
   }
}
}





?>
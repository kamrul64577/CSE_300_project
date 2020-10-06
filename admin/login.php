<?php
    session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<br><br><br><br><br>
    <div class="container mb-5 pb-5">
        <div class="row">
           
            
            <div class="col-md-6 offset-3">


            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-warning">
                    <strong>Warning</strong> Email or Password incorrect
                </div>
            
            <?php } ?>

        <?php if(isset($_SESSION['reg_msg'])) { ?>
            <div class="alert alert-success">
                <strong>success!</strong> <?php echo $_SESSION['reg_msg']; ?>
            </div>
            
        <?php } ?>

        <div class="header">
		    <h2>Login</h2>
		</div>
            <hr>
               
                <form action="confirm-login.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required>
                    </div>

                    

                    

                    <div class="mt-4">
                         <input type="submit" class="btn btn-success " value = "Login">
                        <span class="ml-5">Create a account </span>
                        <a href="register.php" class="btn btn-primary"> SignUp</a> <br>
                   </div>



                </form>


            </div>
        </div>
    </div>


<?php unset($_SESSION['error']) ?>
 


<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
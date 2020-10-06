<?php

    session_start();

    if(!isset($_SESSION['login'])) {
        header("Location: login.php");
    }

    $conn = mysqli_connect('localhost', 'root', '', 'cse');
    $sql = "SELECT * from notice";
     $result = mysqli_query($conn, $sql);


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
<nav class="navbar navbar-dark bg-dark navbar-expand">
    <div class="container">
      <a class="navbar-brand" href="#">ADMIN</a>
    <div>
      <ul class="navbar-nav mr-auto">
         <li class="nav-item px-3 "><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item px-3 active"><a href="notice.php" class="nav-link">Notice</a></li>
          <li class="nav-item px-3"><a href="event.php" class="nav-link">Event</a></li>
          <li class="nav-item px-3"><a href="faculty.php" class="nav-link">Faculty</a></li>
          <li class="nav-item px-3"><a href="contacts.php" class="nav-link">Contact</a></li>
            <li class="nav-item px-3">
            <a href="logout.php" class="btn  text-white">Logout</a>
            </li>
       </ul>
    </div>
    </div>
  </nav>

  <?php if(isset($_SESSION['edit_n'])) { ?>
            <div class="alert alert-success text-center m-0">
                <strong>success!</strong> Updated Successfully
            </div>
            
     <?php } ?>

     <?php if(isset($_SESSION['add_n'])) { ?>
            <div class="alert alert-success text-center m-0">
                <strong>success!</strong> Data Added Successfully
            </div>
            
     <?php } ?>

  <section class="notice">
  <div class="container py-5 ">
        <div class="row">
            <div class="col-md-12">
               <!-- <h3><a href="notice-add.php">+ Add Notice</a></h3>-->
                <div class="card">
                    <div class="card-header">
                       <h1 class="text-center"> Notice</h1>
                    </div>
                    <div class="card-body">
                        
                    <a href="notice-add.php" class="btn btn-primary add mb-5 mt-3">+ Add Notice</a>
                           
                            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                
                                    
                                     <div class="row">
                                         <div class="col-lg-9">
                                         <h3><?php echo $row['title']; ?> </h3>
                                         </div>
                                         <hr>
                                         <div class="col-lg-3">
                                         
                                         <a href="<?php echo $row['pdf']; ?>"  class="btn btn-secondary">View</a>
                                    
                                    <a href="notice-edit.php?id=<?php echo $row['id'] ?>" class="btn btn-success" > Edit  </a>
                                        <a href="notice-delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"> Delete </a>
                                         </div>
                                     </div>
                                     <hr>
                                    <!-- <?php echo $row['pdf']; ?> -->
                                         <br>
                            <?php } ?>
                            
                       
                        
                    </div>
                </div>
            </div>
           
        </div>
    </div>

  </section>

  <footer class="text-center bg-dark py-3">
      <p class="text-white">All copyright reserved 2020</p>
  </footer>
  <?php unset($_SESSION['edit_n']) ?>
  <?php unset($_SESSION['add_n']) ?>


    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>
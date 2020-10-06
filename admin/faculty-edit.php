<?php
    $id = $_GET['id'];

    $conn = mysqli_connect('localhost', 'root', '', 'cse');
    
    
    $sql = "SELECT * FROM faculty WHERE id = '$id' ";
    $result = mysqli_query($conn,$sql);
    
    $data = mysqli_fetch_assoc($result);

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

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">ABC</a>
    <div>
      <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a href="logout.php" class="btn  text-white">Logout</a>
            </li>
       </ul>
    </div>
    </div>
  </nav>

  <section class="edit">
  <div class="container py-5 ">
        <div class="row">
            <div class="col-lg-8 e">

                <form action="faculty-update.php?id=<?php echo $id; ?>" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label for="name"><h4>Name</h4></label>
                        <input type="text" name="name" placeholder="Enter faculty member name" class="form-control" value="<?php echo $data['name'] ;?>">
                    </div>
                    <div class="form-group">
                        <label for="img"><h4>Image</h4></label>
                        <input type="file" name="img">
                        <img src="<?php echo $row['img']; ?>"  >  <?php echo $data['img']; ?> 
                    </div>

                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" name="designation" class="form-control" value="<?php echo $data['designation'] ;?>" >
                    </div>
                    <div class="form-group">
                        <label for="degree">Degree</label>
                        <input type="text" name="degree" class="form-control" value="<?php echo  $data['degree'] ;?>">
                    </div>

                    <div class="form-group">
                        <label for="university">University</label>
                        <input type="text" name="university" class="form-control" value="<?php echo  $data['university'] ;?>">
                    </div>


                    <input type="submit" value="Submit" class="e-submit">
                </form>

            </div>
        </div>
    </div>
  </section>
    
  <footer class="text-center bg-dark py-3">
      <p class="text-white">All copyright reserved 2020</p>
  </footer>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
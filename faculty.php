<?php
  $conn = mysqli_connect('localhost', 'root', '', 'cse');
  $sql = "SELECT * from faculty";
   $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Document</title>
  <link rel="stylesheet" href="fonts/font.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!--START HEADER-->
  <header class="bg-light">
    <div class="container">
        <div class="row heading py-3">
            <a class="navbar-brand" href="#home"><img class="img-fluid" src="img/logo.png" alt=""></a>
          <div class="col-md-10 text-center">
            <h3>North East University Bangladesh</h3>
            <h1>Computer Science & Engineering</h1>
           </div>
         </div>
    </div>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <div class="container">
            
            <button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#navbarNav">
                <i class="navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item active"><a class="nav-link" href="faculty.php">Faculty</a></li>
                    <li class="nav-item "><a class="nav-link" href="admission.php">Admission</a></li>
                    <li class="nav-item"><a class="nav-link" href="facilities.php">Facilities</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
 <!--END HEADER-->


<!--START FAULTY HEADERS-->
<section id="faculty-header">
    <div class="layer">
        <div class="container">
            <div class="row pt-4">
                <div class="col-12 pt-5">
                    <div class="faculty-content text-center pt-5 mt-5">
                        <h1>Our Respective Faculty Members</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--START FAULTY HEADERS-->


<!--START FAULTY BODY-->
<section id="faculty-body" class="py-5">
    <div class="container">
        <div class="row">
            
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-lg-4 ">
            
                <div class="faculty-member">
                
                        <div class="card text-center pb-5 faculty-column">
                        
                            <img src="<?php echo 'admin/'.$row['img']; ?>" alt="" class="img-fluid">
                            <h2><?php echo $row['name'] ?></h2>
                            <hr>
                            <h3><?php echo $row['designation']; ?></h3>
                            <hr class="hr">
                            <h5><?= $row['degree'] ; ?></h5>
                            <h5 ><?php echo $row['university']; ?></h5>
                            
                        </div>
                        
                </div>
                
            </div>
            <?php } ?>
            


            <!--<div class="col-lg-4">
                <div class="faculty-member">
                    <div class="card text-center pb-3">
                        <img src="../img/AlMehdiSaadatChowdhury.jpg" alt="" class="img-fluid">
                        <h2>Al Mehdi Saadat Chowdhury</h2>
                        <hr>
                        <h3>Assistant Professor</h3>
                        <hr class="hr">
                        <h5>M.Sc. (Thesis) in CSE</h5>
                        <h5>B.Sc. (Engg.) in CSE</h5>
                        <h5>Shahjalal University of Science & Technology</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="faculty-member">
                    <div class="card text-center pb-5">
                        <img src="../img/head.jpg" alt="" class="img-fluid">
                        <h2>Noushad Sojib</h2>
                        <hr>
                        <h3>Assistant Professor & Head (Acting)</h3>
                        <hr class="hr">
                        <h5>B.Sc. (Engg.) in CSE</h5>
                        <h5 class="pb-1">Shahjalal University of Science & Technology</h5>
                    </div>
                </div>
            </div>

            

            

            <div class="col-lg-4">
                <div class="faculty-member">
                    <div class="card text-center pb-5">
                        <img src="../img/Shahadat_Hussain_Parvej.jpg" alt="" class="img-fluid">
                        <h2>Shahadat Hussain Parvez</h2>
                        <hr>
                        <h3>Lecturer</h3>
                        <hr class="hr">
                        <h5>B.Sc. (Engg.) in CSE</h5>
                        <h5>Shahjalal University of Science & Technology</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="faculty-member">
                    <div class="card text-center pb-5">
                        <img src="../img/Nafisa_Noushin.jpg" alt="" class="img-fluid">
                        <h2>Nafisa Nowshin</h2>
                        <hr>
                        <h3>Lecturer</h3>
                        <hr class="hr">
                        <h5>B.Sc. (Engg.) in CSE</h5>
                        <h5>Shahjalal University of Science & Technology</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="faculty-member">
                    <div class="card text-center pb-5">
                        <img src="../img/Md._Mahir_Hasan_Chowdhury.jpg" alt="" class="img-fluid">
                        <h2>Mahir Hasan Chowdhury</h2>
                        <hr>
                        <h3>Lecturer</h3>
                        <hr class="hr">
                        <h5>B.Sc. (Engg.) in CSE</h5>
                        <h5>Shahjalal University of Science & Technology</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="faculty-member">
                    <div class="card text-center pb-5">
                        <img src="../img/Buddho_Chandra_Banik.jpg" alt="" class="img-fluid">
                        <h2>Buddha Chandra Banik</h2>
                        <hr>
                        <h3>Lecturer</h3>
                        <hr class="hr">
                        <h5>B.Sc. (Engg.) in CSE</h5>
                        <h5>Shahjalal University of Science & Technology</h5>
                    </div>
                </div>
            </div>

            


            <div class="col-lg-4">
                <div class="faculty-member">
                    <div class="card text-center pb-5">
                        <img src="../img/Mir_Lutfur_Rahman.jpg" alt="" class="img-fluid">
                        <h2>Mir Lutfur Rahman</h2>
                        <hr>
                        <h3>Lecturer</h3>
                        <hr class="hr">
                        <h5>B.Sc. (Engg.) in CSE</h5>
                        <h5 class="mir">North East University Bangladesh</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="faculty-member">
                    <div class="card text-center pb-5">
                        <img src="../img/Pranta_Sarker.jpg" alt="" class="img-fluid">
                        <h2>Pranta Sarker</h2>
                        <hr>
                        <h3>Lecturer</h3>
                        <hr class="hr">
                        <h5>B.Sc. (Engg.) in CSE</h5>
                        <h5 class="mir">North East University Bangladesh</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 offset-lg-4">
                <div class="faculty-member">
                    <div class="card text-center pb-5">
                        <img src="../img/AhnafFarhan.jpg" alt="" class="img-fluid">
                        <h2>Ahnaf Farhan (On Study Leave)</h2>
                        <hr>
                        <h3>Lecturer</h3>
                        <hr class="hr">
                        <h5>B.Sc. (Engg.) in CSE</h5>
                        <h5>Shahjalal University of Science & Technology</h5>
                    </div>
                </div>
            </div>-->
            
        </div>
    </div>
</section>
<!--END FAULTY BODY-->

 


<!--START CONTACT SECTION-->
<section id="Contact">
  <div class="container">
    <h1 class="text-center text-light">Get in Touch</h1>
      <div class="row">
          <div class="col-md-6">
              <form class="contact-form" action="admin/contact.php" method = "POST">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your name" name="name">
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Mobile No.">
                  </div>
                  <div class="form-group">
                      <input type="Email" class="form-control" placeholder="Email Id" name="email">
                  </div>
                  <div class="form-group">
                      <textarea name="msg" class="form-control" rows="4" placeholder="Message"></textarea>
                  </div>
                  <input type="submit" class="btn btn-primary" value="Send Message"> 
              </form>
          </div>
          <div class="col-md-6 contact-info">
              <div class="follow"><b>Address:</b> <i class="fa fa-map-marker"></i>Sheikhghat - Kazirbazar Rd,Sylhet 3100</div>
              <div class="follow"><b>Telephone:</b><i class="fa fa-phone"></i> 0821-710221</div>
              <div class="follow"><b>Mobile:</b><i class="fa fa-mobile-phone"></i>01755566994</div>

              <div class="follow"><b>Facebook:</b><i class="fa fa-facebook"></i><a
                      href="https://www.facebook.com/NorthEastUniversityBangladesh/">NEUB-facebook page</a>
              </div>

              <div class="follow"><b>Email</b><i class="fa fa-envelope-o"><a href="https://www.neub.edu.bd/"></a></i> info@neub.edu.bd
              </div>
           </div>
       </div> 
  </div>
</section>
<!--END CONTACT SECTION-->


<!--START FOOTER-->
<section id="footer">
    <div class="container text-center">
         <p>Made with <i class="fa fa-heart-o"></i> End project</p>
     </div>
</section>
<!--END FOOTER-->

  <!--Js SCRIPT-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>

  <script src="https://kit.fontawesome.com/6ff3dbda61.js" crossorigin="anonymous"></script>

  
</body>

</html>
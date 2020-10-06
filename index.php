<?php
  $conn = mysqli_connect('localhost', 'root', '', 'cse');
  $sql = "SELECT * from notice";
  $sql1 = "SELECT * from event";
   $result = mysqli_query($conn, $sql);
   $result1 =  mysqli_query($conn, $sql1);
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
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            
            <button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#navbarNav">
                <i class="navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="faculty.php">Faculty</a></li>
                    <li class="nav-item"><a class="nav-link" href="admission.php">Admission</a></li>
                    <li class="nav-item"><a class="nav-link" href="facilities.php">Facilities</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
  <!--END HEADER-->


  <!--START SLIDER-->
  <section class="slider-section mb-5">


    <div id="slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li class="active" data-target="#slider" data-slide-to="0"></li>
            <li class="" data-target="#slider" data-slide-to="1"></li>
            <li class="" data-target="#slider" data-slide-to="2"></li>
            <li class="" data-target="#slider" data-slide-to="3"></li>
            <li class="" data-target="#slider" data-slide-to="4"></li>
            

        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="img-fluid d-block" src="img/slider-0.jpg" alt="first-slide">
                
            </div>
            <div class="carousel-item">
                <img class="img-fluid d-block" src="img/slider-1.jpg" alt="second-slide">
                
            </div>
            <div class="carousel-item">
                <img class="img-fluid d-block" src="img/slider-2.jpg" alt="third-slide">
                
            </div>
            <div class="carousel-item">
                <img class="img-fluid d-block" src="img/slider-4.jpg" alt="third-slide">
                
            </div>
            <div class="carousel-item">
              <img class="img-fluid d-block" src="img/slider-5.jpg" alt="third-slide">
              
          </div>

        </div>
        <a href="#slider" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>
<!--END SLIDER-->


<!--START MESSAGE FROM HEAD-->
<section id="message" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
         <div class="img-head">
              <img src="img/TasnimZahan.jpg" alt="" class="img-fluid">
          </div>
      </div>
      <div class="col-lg-7">
        <div class="message-head">
          <h1>Message From Head <hr> </h1>
          <p> <span>Welcome </span> to the Department of Computer Science and Engineering. The Department of Computer Science and Engineering (CSE) in North East University has been at the front positioning subject in the university. Our Department has brightest students and our goal is pushing them to ensure that they reach their greatest potential by putting them through some of the most challenging and rigorous computing courses.</p>
          <p>In ultimate, I hope you will enjoy our website and welcome you to the Department of Computer Science and Engineering.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--END MESSAGE FROM HEAD-->


<!--START MISSION & VISION-->
<section id="mission" class="py-4 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1>Our <span>V</span>ision & <span>M</span>ission</h1>
        <p class="pt-4"><span>Vision:</span> The vision of the department of Computer Science and Engineering is to enlighten the next generation of engineers and scientists and make them national and international leaders in education and research through effective teaching and disciplinary and ethical learning.</p>
        <hr>
        <p> <span>Mission:</span> The mission of CSE is to contribute the society by advancing the fields of Computer Science and Engineering through innovations in teaching and research thus enhancing student knowledge through instruction global engagement and experimental learning. The department of CSE provides excellent undergraduate and graduate education in a state-of-the art environment preparing students for careers as computer scientists in industry, government and academia. Also support society by participating and encouraging technology transfer.</p>
      </div>
    </div>
  </div>
</section>
<!--END MISSION & VISION-->



<!--START NOTICE HEADER-->
<section id="notice-header"class="py-5">
  <div class="container">
      <div class="row">
          <div class="col-lg-9">
              <h1>Department Of Computer Science & Enginering</h1>
              <div class="notice py-5">
                  <h4 class="text-light">Notice</h4>
              </div>
           
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
              <div class="notice-content">
                  <h2><?php echo $row['title']?></h2>
                  <hr>
                  
                  <a href="<?php echo 'admin/'.$row['pdf']; ?>" target="_blank" class="btn">Read More ...</a>
              </div>
            <?php } ?>

          </div>

          <div class="col-lg-3">
              <div class="events">
                  <div class="card text-center ">
                      <h3 class="mb-4 pb-2">Events</h3>
                      <?php while($row1 = mysqli_fetch_assoc($result1)) { ?>
                      <h5 class="pt-3" ><a href="<?php echo 'admin/'.$row1['img']; ?>" ><?php echo $row1['name']; ?></a></h5>
                      <hr>

                      <?php } ?>
                     
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--START NOTICE HEADER-->






 <!--START STATISTIC OF STUDENT TEACHER COURSE-->
<section class="statistics  pb-5">
  <div class="container">
      <div class="row text-center">
          <div class="col">
              <h1 class="py-5"><span>S</span>TATISTICS OF C<span>S</span>E</h1>
          </div>
      </div>
      <div class="row text-center">
          <div class="col-lg-3 col-md-6 text-center">
              <img src="img/teacher.jpg" alt="" class="img-fluid d-block mx-auto">
              <h3 class="py-3">10+</h3>
              <h2 class="pb-3">Teachers</h2>
          </div>
          <div class="col-lg-3  col-md-6  wow bounceInLeft">
              <img src="img/student.jpg" alt="" class="img-fluid d-block mx-auto">
              <h3 class="py-3">600+</h3>
              <h2 class="pb-3">Students</h2>
          </div>
          <div class="col-lg-3  col-md-6 text-center  wow bounceInRight">
              <img src="img/courses.jpg" alt="" class="img-fluid d-block mx-auto">
              <h3 class="py-3">150+</h3>
              <h2 class="pb-3">Credits</h2>
          </div>
          <div class="col-lg-3  col-md-6 text-center  wow bounceInRight">
              <img src="img/classroom.jpg" alt="" class="img-fluid d-block mx-auto">
              <h3 class="py-3">15+</h3>
              <h2 class="pb-3">Classroom</h2>
          </div>
      </div>
  </div>
</section>
<!--END STATISTIC OF STUDENT TEACHER COURSE-->


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
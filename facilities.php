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
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item "><a class="nav-link" href="faculty.php">Faculty</a></li>
                    <li class="nav-item "><a class="nav-link" href="admission.php">Admission</a></li>
                    <li class="nav-item active"><a class="nav-link" href="facilities.php">Facilities</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
 <!--END HEADER-->



 <!--START FACILITY SECTION-->
 <section id="cse-facilities" class="py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col py-5">
                <h1>FACILTIES OF CSE </h1>
            </div>
        </div>
        <div class="row text-center py-4">
            <div class="col-md-5">
                <img class="img-fluid" src="img/i-lab.jpg" alt="">
            </div>
            <div class="col-md-7">
                <h3>Central Computer Lab (CCL)</h3>
                <hr>
                <p class="lead text-justify">CCL for computer science instructional use. The Central Computer Lab is equipped with 40 Intel Pentium Dual Core 2.9 GHZ desktop computers, and a multimedia projector. All the computers of the lab are networked and use standard switches. The lab provides a range of software to support lab classes and research works in the broad field of Software Systems including programming, database systems, information system design, software engineering, computer networking, and high-performance simulation and modeling.</p>
            </div>
        </div>

        <div class="row text-center py-4">
            <div class="col-md-7">
                <h3>Hardware Lab</h3>
                <hr>
                <p class="lead text-justify">
                    This laboratory has inductor, capacitor, and resistor banks, single and variable AC power sources, DC power supplies, oscilloscopes, signal generators and various types of measuring instruments to enable students to conduct experiments on electrical circuits. Work related to electronics courses is performed in this lab also. It is equipped with modern analog and digital trainer boards, all types of IC chips, and other semiconductor devices. At most 10 students can perform their lab works at a time in this lab.
                </p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid i-lab" src="img/h-lab.jpg" alt="">
            </div>
        </div>

        <div class="row text-center py-4">
            <div class="col-md-5">
                <img class="img-fluid" src="img/internet-lab.jpg" alt="">
            </div>
            <div class="col-md-7">
                <h3>Internet Lab</h3>
                <hr>
                <p class="lead text-justify"> Internet labs on the campus are for student work and internet browsing. The Internet Lab is equipped with 16 Intel Pentium Dual Core 2.9 GHZ desktop computers. These PCs are equipped with state of the art hardware and software where students can do their assignments and have practical knowledge which is an integral part of their learning. North East University Bangladesh has internet facility of 2 Mbps band width. Free Wi-Fi internet connections for faculty and students are available inside the campus.</p>
            </div>
        </div>

        <div class="row text-center py-4">
            <div class="col-md-7">
                <h3>Robotics Lab</h3>
                <hr>
                <p class="lead text-justify">
                    Laboratory robotics is the practice of using robots to perform or assist in laboratory tasks. While laboratory robots have found applications in diverse industries and sciences, pharmaceutical companies have used them more than any other group.
                    Advantages of laboratory robotics include high speed, high efficiency, minimal wastage, task reproducibility, task endurance, precision, high productivity, enhanced safety for laboratory personnel, the ability to withstand adverse environmental conditions
                </p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="img/robotics.jpg" alt="">
            </div>
        </div>
    </div>
</section>



 

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

<?php

session_start();
if(isset($_SESSION['emailaddress']) && $_SESSION['emailaddress'] == true) {

}else{
  header('location:job-post.php');
}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JobPortal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	<?php


include('include/navbar.php');
?>
    <!-- END nav -->


<div class="container" style="margin-top:100px;">

</div>
 

            <?php
include('connection/db.php');
  
  $email = $_SESSION['emailaddress'];
  // echo "<script>alert($id)</script>";
  $query = mysqli_query($conn,"select * from jobseeker where email='$email' ");
  while($row=mysqli_fetch_array($query)){
    $firstname=$row['firstname'];
    $lastname=$row['lastname'];
    $DOB=$row['DOB'];
    $mobileno =$row['mobileno'];
    $id=$row['id'];

    $dob =new DateTime($DOB);
    $today = new DateTime();
    $diff = $dob->diff($today);
    $age = $diff->y;
    $age_month = $diff->m;
    $age_day = $diff->d;
  }



?>
    
    <h1 class="" style="margin-left:100px;">Profile  View</h1>
        <div class=" mx-auto container ftco-animate p-2" style="background: #f8f9fa;">
     
                    <div class="row p-2 m-2 m-4 rounded text-dark	"  style="background: #fff;">
                        <div class="col-sm-4">
                            <strong>First Name </strong>
                            <br>
                            <?php echo $firstname  ?>
                        </div>
                     
                        <div class="col-sm-4">
                        <strong>Last Name</strong>
                        <br>
                        <?php echo   $lastname  ?>
                        </div>
                        <div class="col-sm-4">
                        <strong>DOB</strong>
                        <br>
                        <?php echo  $DOB  ?>
                        </div>
                        <div class="col-sm-4">
                        <strong>Mobile Number</strong> 
                        <br>
                        <?php echo $mobileno  ?>
                        </div>
                        <div class="col-sm-4">
                        <strong>Age</strong>
                        <br>
                        <?php echo $age . " " . "Years" . " " . $age_month .  " " .  "Month" .  " " . $age_day .  " " . "Day"  ?>
                        </div>
                        <div class="col-sm-4">
                        <strong>Work Experience</strong>

                        </div>
                        <div class="col-sm-4">
                        <strong>Aadhar Number</strong>
                        </div>
                        <div class="col-sm-4">
                        <strong>Skills</strong>
                        
                        </div>
                        <div class="col-sm-4">
                        <strong>Resume</strong>

                        </div>
                        
                        <div class="col-sm-4">
                        <strong>Additional Documents</strong>
                        
                        </div>
                    </div>
        </div>


          </div> <!-- .col-md-8 -->


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
        	<div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Employers</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Register</a></li>
                <li><a href="#" class="py-2 d-block">Post a Job</a></li>
                <li><a href="#" class="py-2 d-block">Advance Skill Search</a></li>
                <li><a href="#" class="py-2 d-block">Recruiting Service</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Faq</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Workers</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Register</a></li>
                <li><a href="#" class="py-2 d-block">Post Your Skills</a></li>
                <li><a href="#" class="py-2 d-block">Job Search</a></li>
                <li><a href="#" class="py-2 d-block">Emploer Search</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
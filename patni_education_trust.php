<?php 

// Include configuration file  
require ('config.php');
 
//Select query 


$select = "SELECT * FROM contact WHERE sid='3'";
$result5 = $conn->query($select);


?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Patni Education Trust - Surat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon1.png" rel="icon">
  <link href="assets/img/apple-touch-icon1.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style2.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@patnijamaat.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91 12345 67890</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar-->

 
  
  <?php include 'header.php';?>

  <!-- ======= hero Section ======= -->
  <section id="hero">

    <div class="hero-content" data-aos="fade-up">
      <h2 style="font-family: 'DM Serif Display', serif;"><span style="color:blue";>The Patni Education Trust -Surat</span></h2>
      <div>
        <a href="#about2" class="btn-get-started scrollto">Book Hall</a>
        <a href="#portfolio2" class="btn-projects scrollto">Our Projects</a>
      </div>
    </div> 

    <div class="hero-slider swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/1.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/2.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/3.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/4.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/5.jpg');"></div>
      </div>
    </div>

  </section><!-- End Hero Section -->

  <main id="main">                        
    <!-- ======= About Section ======= -->
    <section id="about2">
      <div class="container" data-aos="fade-up">


      
        <div class="row">
        <?php

require ('config.php');


$sql = "SELECT * FROM about WHERE sid='3'";
$result = $conn->query($select);

$result = mysqli_query($conn,$sql) or die("Failed");

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
?>
          <div class="col-lg-6 about-img">
            <img src="admin/upload/<?php echo $row['filename']; ?>" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2 style="font-family: 'DM Serif Display', serif;"><?php echo $row['title']; ?></h2>
            <h6 style="font-size: 1.3rem; font-family: 'DM Serif Display', serif;"><?php echo $row['description']; ?></h6>
			    </div>
        </div>
  <?php }}?>
      </div>
    </section>











    <section id="services2">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2 style="font-family: 'DM Serif Display', serif;">Committees</h2>
          <p>It has different committees to run different services such as:</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="index.php">Patni Sunnat Jamaat </a></h4>
              <p class="description">Mother Body to manage Jamaat as a whole.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="patni_co-operative_credit_society.php">The Patni Co-operative Credit Society Ltd</a></h4>
              <p class="description">Gives Qarz e Hasana (intrest free loans) to members of Jamaat..</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="patni_education_trust.php">Patni Education Trust</a></h4>
              <p class="description">Helping Jamaat students by giving scholarships, books and uniforms & motivates them..</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="patni_housing_society.php">Patni Housing Society</a></h4>
              <p class="description">Developed and now manages Patni Colony.</p>
            </div>
          </div>
		  
		  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <div class="icon"><i class="bi bi-airplane-engines"></i></div>
              <h4 class="title"><a href="qamar_free_library.php">The Qamar Free Library </a></h4>
              <p class="description">Having vast collection of all kinds of books (Religious, historical, political, literary, biography, poetry, novels etc.) in Urdu, Gujarati, English and Hindi languages.</p>
            </div>
          </div>
		  
		  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <div class="icon"><i class="bi bi-bookmark"></i></div>
              <h4 class="title"><a href="patni_sports.php">Patni Sports </a></h4>
              <p class="description">Managing sports activities of Jamaat Youth.</p>
            </div>
          </div>

        </div>

      </div>
    </section>







    <!-- ======= Home page committees Section ======= -->
    <!-- <section id="services2">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2 style="font-family: 'DM Serif Display', serif;">Committees</h2>
          <p>It has different committees to run different services such as:</p>
        </div>

        <div class="row gy-4">
        <?php

require ('config.php');


$sql = "SELECT * FROM `committees`";


$result = mysqli_query($conn,$sql) or die("Failed");

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
?>



          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href=""><?php echo $row['cname'];  ?></a></h4>
              <p class="description"><?php echo $row['description']; ?></p>
            </div>
          </div>
         <?php }}?> 
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Services Section -->




    <?php 

// Include configuration file  
require ('config.php');
 
//Select query 
$select = "SELECT * FROM even WHERE committee_id='3'";
$result3 = $conn->query($select);


?>

    <section id="portfolio-details"  class="portfolio-details">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
        <div class="section-header">
        <h2 style="font-family: 'DM Serif Display', serif;">Advertisments</h2>
      </div>
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

            <?php

require ('config.php');


$sql = "SELECT * FROM `ads` ";


$result = mysqli_query($conn,$sql) or die("Failed");

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
?>

              <div class="swiper-slide">
                <img src="admin/upload/<?php echo $row['filename']; ?>" alt="">
              </div>

              

<?php }

}?>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>










        

        <div class="col-lg-6">
        <div class="section-header">
        <h2 style="font-family: 'DM Serif Display', serif;">Upcoming Events</h2>
      </div>
          
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <?php

while($row = $result3->fetch_object()){
               echo '<div class="swiper-slide active">';
             echo '<h3>'. $row->title. '</h3>';
             

              ?>
              
          <ul>
          <?php 
             $category= "Event Sponsor";
             $guset="Event Guest";
             $address="Event Address";
             $date="Event Date";
             $time="Event Time";
             $url="Event Website";
             
             echo'<li><strong>'.$category.'</strong>: '.$row->sponser.'</li>';
             echo'<li><strong>'.$guset.'</strong>: '.$row->guest_name.'</li>';
             echo'<li><strong>'.$address.'</strong>: '.$row->address.'</li>';
             echo'<li><strong>'.$date.'</strong>: '.$row->date.'</li>';
             echo'<li><strong>'.$time.'</strong>: '.$row->time.'</li>';
             echo '</ul></div>';

             }
           
          ?>

          
          
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        

      </div>

    </div>
  </section>


    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container" data-aos="zoom-out">
        <div class="row">
          <!-- <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div> -->
          <?php

require ('config.php');


$sql = "SELECT * FROM `report` WHERE committee_id='3'";


$result = mysqli_query($conn,$sql) or die("Failed");

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
?>
          <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="admin/rpdf/<?php echo $row['filename'];?>">Report: <?php echo $row['year'];?></a>
          </div>
          <?php }}?>
        </div>
      </div>
    </section>
    <!-- ======= Team Section ======= -->

    <section id="team2">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2 style="font-family: 'DM Serif Display', serif;">Committee Members</h2>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="form-floating">
            <select class="form-select" id="yearSelect" style="margin-bottom: 50px;">
              <option value=''>Select Year</option>
            </select>
          </div>
        </div>

        <div id="data">
            </div>



    


       

      </div>
    </section>
    <!-- <section id="team2">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Committee Members</h2>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="form-floating">
            <select class="form-select" id="yearSelect" aria-label="State">
              <option selected>Select Year</option>
            </select>
          </div>
        </div>


        <div id="data">
            </div>


      </div>
    </section> -->
    <!-- End Team Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio2" class="portfolio2">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2 style="font-family: 'DM Serif Display', serif;">Gallery</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <!-- <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Heritage</li>
              <li data-filter=".filter-card">Patni Hall</li>
              <li data-filter=".filter-web">Web</li>
            </ul> -->
          </div>
        </div>

        <?php

require ('config.php');


$sql = "SELECT gid,filename FROM gallery WHERE committee_id='3'";


$result = mysqli_query($conn,$sql) or die("Failed");

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
?>

       
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="admin/upload/<?php echo $row['filename']; ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p>Heritage</p>
              <a href="admin/upload/<?php echo $row['filename']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>  
            </div>
          </div> 

          <?php }
}?>
          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/upload/heritage/pic-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p>Heritage</p>
              <a href="assets/img/upload/heritage/pic-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              
            </div>
          </div>
		  
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/upload/heritage/pic-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p>Heritage</p>
              <a href="assets/img/upload/heritage/pic-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/upload/heritage/pic-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p>Heritage</p>
              <a href="assets/img/upload/heritage/pic-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/upload/heritage/pic-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p>Heritage</p>
              <a href="assets/img/upload/heritage/pic-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/upload/jamaatkhana/hall/hallPic-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p>Patni Hall</p>
              <a href="assets/img/upload/jamaatkhana/hall/hallPic-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/upload/jamaatkhana/hall/hallPic-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p>Patni Hall</p>
              <a href="assets/img/upload/jamaatkhana/hall/hallPic-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/upload/jamaatkhana/hall/hallPic-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p>Patni Hall</p>
              <a href="assets/img/upload/jamaatkhana/hall/hallPic-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/upload/jamaatkhana/hall/hallPic-11.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4></h4>
              <p>Patni Hall</p>
              <a href="assets/img/upload/jamaatkhana/hall/hallPic-11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              
            </div>
          </div> -->

        </div>

 
      </div>
    </section><!-- End Portfolio Section -->
    <style>
  #heros {
  width: 100%;
  height: 60vh;
  position: relative;
  background-size: cover;
  padding: 0;
}

#heros .heros-content {
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  z-index: 10;
  display: flex;
  align-items: center;
  flex-direction: column;
  text-align: center;
}

#heros .heros-content h2 {
  color: #50d8af;
  margin-bottom: 30px;
  font-size: 64px;
  font-weight: 700;
}

#heros .heros-content h2 span {
  color: #50d8af;
  text-decoration: underline;
}

@media (max-width: 767px) {
  #heros .heros-content h2 {
    font-size: 34px;
  }
}

#heros .heros-content .btn-get-started,
#heros .heros-content .btn-projects {
  font-family: "Raleway", sans-serif;
  font-size: 15px;
  font-weight: bold;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 32px;
  border-radius: 2px;
  transition: 0.5s;
  margin: 10px;
  color: #fff;
}

#heros .heros-content .btn-get-started {
  background: #50d8af;
  border: 2px solid #50d8af;
}

#heros .heros-content .btn-get-started:hover {
  background: none;
  color: #50d8af;
}

#heros .heros-content .btn-projects {
  background: #50d8af;
  border: 2px solid #50d8af;
}

#heros .heros-content .btn-projects:hover {
  background: none;
  color: #50d8af;
}

#heros .heros-slider {
  z-index: 8;
  height: 60vh;
}

#heros .heros-slider::before {
  content: "";
  background-color: rgba(255, 255, 255, 0.7);
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  z-index: 7;
}

#heros .heros-slider .swiper-slide {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  transition-property: opacity;
}

</style>


   
    <!-- ======= Contact Section ======= -->
    <section id="contact2">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2 style="font-family: 'DM Serif Display', serif;">Contact Us</h2>
         <?php 
          while($row = $result5->fetch_object()){
          echo'<p>'.$row->description.'</p>';
          
        ?>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <?php  echo'<address>'.$row->address.'</address>'; ?>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
            <?php echo '<p><a href="tel:+155895548855">'.$row->phone_number.'</a></p>'; ?>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <?php echo '<p><a href="mailto:info@example.com">'.$row->email.'</a></p>'; ?>
            </div>
          </div>
          <?php }?>
        </div>
      </div>

      <!-- <div class="container mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div> -->

      <!-- <div class="container">
        <div class="row">
         <div class="form-group mt-3">
              <div class="text-center">
                <a href="student.php" class="btn-get-started scrollto">Student Registration</a>
              </div>
            </div>            
          </div>
        </div> -->
    </section><!-- End Contact Section -->


   
<section id="heros">
 <div class="heros-content" data-aos="fade-up">
        <div class="section">
          <h2 style="font-size:35px">IMPORTANT FORM</h2>
          <a href="student.php" class="btn-get-started scrollto">Student Registration</a>
        </div>
      </div>
 </section>

















  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>The Patni Jamaat</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
      -->
        Designed by <a href="https://socialadrace.com">Affiniq</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


 <!-- <script>


$(document).ready(function(){
            $('#yearSelect').change(function(){
                //Selected value
                var inputValue = $(this).val();

                //Ajax for calling php function
                $.post('submit2.php', { dropdownValue: inputValue }, function(data){
                    document.getElementById('data').innerHTML = data;
                    console.log(data)
                    //do after submission operation in DOM
                });
            });
        });
  
  document.addEventListener("DOMContentLoaded", function() {
  var selectElement = document.getElementById("yearSelect");

  var temp = 2023;

  var currentYear = new Date().getFullYear();
  var startYear = 1950;

  for (var year = startYear; year <= currentYear; year++) {
    var option = document.createElement("option");
    option.value = year;
    option.text = year;
    selectElement.appendChild(option);
  }
  for(var i, j = 0; i = selectElement.options[j]; j++) {
      if(i.value == temp) {
        selectElement.selectedIndex = j;
          break;
      }
  }

  $.post('submit2.php', { dropdownValue: temp }, function(data){
                    document.getElementById('data').innerHTML = data;
                    console.log(data)
                    //do after submission operation in DOM
                });
});

</script> -->

<script>


            $(document).ready(function(){
            $('#yearSelect').change(function(){
                //Selected value
                var inputValue = $(this).val();

                //Ajax for calling php function
                $.post('submit2.php', { dropdownValue: inputValue }, function(data){
                    document.getElementById('data').innerHTML = data;
                    console.log(data)
                    //do after submission operation in DOM
                });
            });
        });
        

  
  document.addEventListener("DOMContentLoaded", function() {
  var selectElement = document.getElementById("yearSelect");

  var temp = 2023;

  var currentYear = new Date().getFullYear();
  var startYear = 1950;

  for (var year = startYear; year <= currentYear; year++) {
    var option = document.createElement("option");
    option.value = year;
    option.text = year;
    selectElement.appendChild(option);
  }

  for(var i, j = 0; i = selectElement.options[j]; j++) {
      if(i.value == temp) {
        selectElement.selectedIndex = j;
          break;
      }
  }

  $.post('submit2.php', { dropdownValue: temp }, function(data){
                    document.getElementById('data').innerHTML = data;
                    console.log(data)
                    //do after submission operation in DOM
                });
});

</script> 













  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
 <script src="assets/js/main.js"></script> 

</body>

</html>
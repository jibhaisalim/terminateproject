<?php 

// Include configuration file  
require ('config.php');
 
//Select query 
$select = "SELECT * FROM even";
$result3 = $conn->query($select);


?> 





<!-- ======= Portfolio Details Section ======= -->
 <section id="portfolio-details"  class="portfolio-details">
    <div class="container">

      <div class="row">

        <div class="col-lg-6">
        <div class="section-header">
        <h2>Advertisments</h2>
      </div>
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="assets/img/portfolio/portfolio-details-1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/portfolio-details-2.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/portfolio-details-3.jpg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>










        

        <div class="col-lg-6">
        <div class="section-header">
        <h2>Upcoming Events</h2>
      </div>
          
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <?php

            echo '<div class="swiper-slide">';
             while($row = $result3->fetch_object()){
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


             }
          ?>
          </ul>

          
          </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->
